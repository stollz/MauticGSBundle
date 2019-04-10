<?php
/**
 * Created by PhpStorm.
* User: mayank
* Date: Fri mar 10 2017
* Time: 12:55
*/

namespace MauticPlugin\MauticGSBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use MauticPlugin\MauticGSBundle\Benhawker\Pipedrive\Pipedrive;
use \DateTime;
use MauticPlugin\MauticGSBundle\Entity\ImportSegment;
use MauticPlugin\MauticGSBundle\Entity\ContactsToImport;

use Doctrine\DBAL\Query\QueryBuilder;
use Doctrine\ORM\Query\ResultSetMapping;
use Mautic\CoreBundle\Controller\CommonController;
use Mautic\LeadBundle\Entity\Lead;
use MauticPlugin\MauticGSBundle\Entity\MauticPipedrivePlugin;
use Symfony\Component\HttpFoundation\Response;
use Mautic\CampaignBundle\Entity\Campaign;
use Mautic\CampaignBundle\Entity\Event;

use Symfony\Component\Console\Input\InputArgument;

class ImportIntoLeadSegmentCommand extends ContainerAwareCommand
{
	protected function configure()
	{
		$this->setName("gs:custom:ImportIntoLeadSegment")
		->setDescription("takes contacts from the queue and adds to Lead Segment");
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
        $logger = $this->getContainer()->get('logger');
        $factory = $this->getContainer()->get("mautic.factory");
        $em = $factory->getEntityManager();
        $conn = $this->getContainer()->get('database_connection');

        try {
            /**
            * un fetched worksheets
            */
            $contactsToImport = $em->getRepository("MauticGSBundle:ContactsToImport")->findBy([
                    "addedToSegment"=>false
                ],
                [
                    "id"=>"ASC"
                ],
                250
            );
            if(isset($contactsToImport) && count($contactsToImport)>0){
                foreach($contactsToImport as $contact){
                    $logger->info($contact->getEmail().' | '.$contact->getCompany());
                    $output->writeln($contact->getEmail().' | '.$contact->getCompany());
                    $leadModel = $factory->getModel('lead');
                    
                    if (strlen(trim($contact->getEmail())) > 0) {
                        $checkAgainst = '';
                        $fallback = '';
                        $worksheetName='';
                        $owner = 1;
                        $contactSegmentInfo = $em->getRepository("MauticGSBundle:ImportSegment")->findOneById($contact->getImportSegmentId());
                        if(isset($contactSegmentInfo)){
                            if($contactSegmentInfo->getCheckAgainst()!=0){
                                $checkAgainst = $contactSegmentInfo->getCheckAgainst();
                            }
                            if($contactSegmentInfo->getFallbackSegment()!=0){
                                $fallback = $contactSegmentInfo->getFallbackSegment();
                            }
                            if($contactSegmentInfo->getSegmentOwner()!=0){
                                $owner = $contactSegmentInfo->getSegmentOwner();
                            }
                            if($contactSegmentInfo->getWorkSheetName()!=null && $contactSegmentInfo->getWorkSheetName()!=''){
                                $worksheetName = $contactSegmentInfo->getWorkSheetName();
                            }
                        }
                        //check if lead already exists in Mautic, only matches through email, assuming each lead should contain unique email, continue the loop if exists otherwise proceed normally
                        $leadsFromDB = $conn->fetchAll("select * from ".MAUTIC_TABLE_PREFIX."leads where email='" . $contact->getEmail() . "'");
                        if ($leadsFromDB!=null && count($leadsFromDB) > 0) {
                            /*
                             * do something if lead already exists
                             * */
                            /**
                             * check for unsubscribed
                             *
                            $isUnsubscribed = $conn->fetchAll("SELECT * FROM ".MAUTIC_TABLE_PREFIX."lead_donotcontact WHERE lead_id IN (SELECT id FROM ".MAUTIC_TABLE_PREFIX."leads WHERE email = '". $contact->getEmail() . "')");
                            if($isUnsubscribed!=null && count($isUnsubscribed)>0){
                                //lead has unsubscribed thus don't add
                                if(!$em->isOpen()){
                                    $output->writeln("Connection is closed");
                                    $em = $em->create(
                                        $em->getConnection(), $em->getConfiguration());
                                }
                                $contactToUpdate = $em->getRepository("MauticGSBundle:ContactsToImport")->findOneById($contact->getId());
                                if(isset($contactToUpdate)){
                                    $contactToUpdate->setSkipped(true);
                                    $contactToUpdate->setReasonForSkipped("unsubscriber");
                                    $contactToUpdate->setAddedToSegment(true);
                                    $contactToUpdate->setAddedToSegmentOn(new \DateTime());
                                    $em->flush();
                                }
                                continue;
                            }
                            /**
                             * check against list based existance
                             *
                            if(isset($checkAgainst) && $checkAgainst!=''){
                               $isinList = $conn->fetchAll("SELECT * FROM ".MAUTIC_TABLE_PREFIX."lead_lists_leads WHERE leadlist_id = ".$checkAgainst." AND lead_id IN (SELECT id FROM ".MAUTIC_TABLE_PREFIX."leads WHERE email = '". $contact->getEmail() . "')");
                                if($isinList!=null && count($isinList)>0){
                                    //lead exists in the selected list
                                    if(!$em->isOpen()){
                                        $output->writeln("Connection is closed");
                                        $em = $em->create(
                                            $em->getConnection(), $em->getConfiguration());
                                    }
                                    $contactToUpdate = $em->getRepository("MauticGSBundle:ContactsToImport")->findOneById($contact->getId());
                                    if(isset($contactToUpdate)){
                                        $contactToUpdate->setSkipped(true);
                                        $contactToUpdate->setReasonForSkipped("Skipped Against Checked List");
                                        $contactToUpdate->setAddedToSegment(true);
                                        $contactToUpdate->setAddedToSegmentOn(new \DateTime());
                                        $em->flush();
                                    }
                                    continue;
                                }
                            }

                            */
                        } else {
                            $lead = new Lead();
                            $leadFields = array(
                                'firstname' => $contact->getFirstName()!=null?$contact->getFirstName():'',
                                'lastname' => $contact->getLastName()!=null?$contact->getLastName():'',
                                'email' => $contact->getEmail()!=null?$contact->getEmail():'',
                                'phone' => $contact->getPhone()!=null?$contact->getPhone():'',
                                'company' => $contact->getCompany()!=null?$contact->getCompany():'',
                                'address1' => $contact->getStreetAddress()!=null?$contact->getStreetAddress():'',
                                'zipcode' => $contact->getZipcode()!=null?$contact->getZipcode():'',
                                'city' => $contact->getCity()!=null?$contact->getCity():'',
                                'country' => $contact->getCountry()!=null?$contact->getCountry():'',
                                'website' => $contact->getHomepage()!=null?$contact->getHomepage():''
                            );

                            // Set the lead's data
                            $leadModel->setFieldValues($lead, $leadFields);

                            // Save the entity
                            $leadModel->saveEntity($lead);

                            $leadModel->updateLeadOwner($lead,$owner);

                            //add to list
                            $leadModel->addToLists($lead, [$contact->getLeadSegment()]);
                 
                            if(!$em->isOpen()){
                                $output->writeln("Connection is closed");
                                $em = $em->create(
                                    $em->getConnection(), $em->getConfiguration());
                            }
                            $contactToUpdate = $em->getRepository("MauticGSBundle:ContactsToImport")->findOneById($contact->getId());
                            if(isset($contactToUpdate)){
                                $contactToUpdate->setSkipped(false);
                                $contactToUpdate->setAddedToSegment(true);
                                $contactToUpdate->setAddedToSegmentOn(new \DateTime());
                                $em->flush();
                            }
                        }
                 
                    }
                    else{
                        if(!$em->isOpen()){
                            $output->writeln("Connection is closed");
                            $em = $em->create(
                                $em->getConnection(), $em->getConfiguration());
                        }
                        $contactToUpdate = $em->getRepository("MauticGSBundle:ContactsToImport")->findOneById($contact->getId());
                        if(isset($contactToUpdate)){
                            $contactToUpdate->setSkipped(true);
                            $contactToUpdate->setReasonForSkipped("Email not Available");
                            $contactToUpdate->setAddedToSegment(true);
                            $contactToUpdate->setAddedToSegmentOn(new \DateTime());
                            $em->flush();
                        }
                    }
                }
            }
        } catch (\Exception $e) {
            $logger->info($e->getMessage().' on '.$e->getFile().' '.$e->getLine());
            $output->writeln($e->getMessage().' on '.$e->getFile().' '.$e->getLine());
        }
	}
}
