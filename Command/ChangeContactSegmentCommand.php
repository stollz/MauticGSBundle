<?php

namespace MauticPlugin\MauticGSBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use \DateTime;
use Doctrine\DBAL\Query\QueryBuilder;
use Doctrine\ORM\Query\ResultSetMapping;
use Mautic\CoreBundle\Controller\CommonController;
use Mautic\LeadBundle\Entity\Lead;
use MauticPlugin\MauticGSBundle\Entity\MauticPipedrivePlugin;
use Symfony\Component\HttpFoundation\Response;
use Mautic\CampaignBundle\Entity\Campaign;
use Mautic\CampaignBundle\Entity\Event;
use MauticPlugin\MauticGSBundle\Entity\ChangeContactSegment;
use Symfony\Component\Console\Input\InputArgument;

class ChangeContactSegmentCommand extends ContainerAwareCommand
{
	protected function configure()
	{
		$this->setName("gs:custom:ChangeContactSegment")
		->setDescription("takes Source and Destination segment with a limit and moves number of conacts");
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
        $logger = $this->getContainer()->get('logger');
        $factory = $this->getContainer()->get("mautic.factory");
        $em = $factory->getEntityManager();
        $conn = $this->getContainer()->get('database_connection');

        try {
            /**
             * if monday to friday - OK else exit
             */
            if(date("N")>5){
                die;
            }

            /**
             * get all segment changes
             */
            $segmentChnageActions = $em->getRepository("MauticGSBundle:ChangeContactSegment")->findAll();
            if(isset($segmentChnageActions) && count($segmentChnageActions)>0){
                foreach($segmentChnageActions as $segmentChange){
                    $output->writeln($segmentChange->getSource()." | ".$segmentChange->getDestination()." | ".$segmentChange->getLimit());
                    $logger->info($segmentChange->getSource()." | ".$segmentChange->getDestination()." | ".$segmentChange->getLimit());
                    try{
                        $toUpdate= $conn->fetchAll("select lead_id as leadstoupdate from ".MAUTIC_TABLE_PREFIX."lead_lists_leads where lead_id not in (select lead_id from ".MAUTIC_TABLE_PREFIX."lead_lists_leads where leadlist_id=".$segmentChange->getDestination().") and leadlist_id=".$segmentChange->getSource()." limit ".$segmentChange->getLimit());
                        if($toUpdate!=null && count($toUpdate)>0){
                            $toUpdateString= implode(",",array_map(function($entry){
                                return $entry['leadstoupdate'];
                            },$toUpdate));
                            if(strlen(trim($toUpdateString))>0){
                                $stmt = $conn->prepare("update ".MAUTIC_TABLE_PREFIX."lead_lists_leads set leadlist_id = :destination where leadlist_id =:source and lead_id in (".$toUpdateString.")");
                                $stmt->bindParam(":destination", $segmentChange->getDestination());
                                $stmt->bindParam(":source", $segmentChange->getSource());
                                $stmt->execute();
                            }
                        }
                    }
                    catch(\Exception $e){
                        $logger->info($e->getMessage().' on '.$e->getFile().' '.$e->getLine());
                        $output->writeln($e->getMessage().' on '.$e->getFile().' '.$e->getLine());            
                    }
                }
            } 
        } catch (\Exception $e) {
            $logger->info($e->getMessage().' on '.$e->getFile().' '.$e->getLine());
            $output->writeln($e->getMessage().' on '.$e->getFile().' '.$e->getLine());
        }
    }
}