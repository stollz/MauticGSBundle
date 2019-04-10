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
/**
 * Autoload files of https://github.com/google/google-api-php-client
 *
 */
use MauticPlugin\MauticGSBundle\Google\google_api_php_client\src\Google\Auth\Google_Auth_AssertionCredentials;
use MauticPlugin\MauticGSBundle\Google\google_api_php_client\src\Google\Google_Client;
/**
 * If you install https://github.com/asimlqt/php-google-spreadsheet-client through composer
 * Then you can just do:
 * require 'vendor/autoload.php';
 *
 * If you just download the zip file of https://github.com/asimlqt/php-google-spreadsheet-client
 * Then, you need to load the following files:
 *
 */
use MauticPlugin\MauticGSBundle\Google\php_google_spreadsheet_client\Google\Spreadsheet;
use MauticPlugin\MauticGSBundle\Google\php_google_spreadsheet_client\Google\Spreadsheet\DefaultServiceRequest;
use MauticPlugin\MauticGSBundle\Google\php_google_spreadsheet_client\Google\Spreadsheet\ServiceRequestFactory;
use MauticPlugin\MauticGSBundle\Google\php_google_spreadsheet_client\Google\Spreadsheet\SpreadsheetService;

use Symfony\Component\Console\Input\InputArgument;

class FetchFromSheetCommand extends ContainerAwareCommand
{
    const CLIENT_APP_NAME = 'mautic';
    const CLIENT_ID = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
    const CLIENT_EMAIL = 'mautic@mautic-xxxx.iam.gserviceaccount.com';
    const CLIENT_KEY_PATH = __DIR__ . '/../Google/mautic-service-api.p12'; // PATH_TO_KEY = where you keep your key file
    const CLIENT_KEY_PW = 'notasecret'; //password for the secret key
	
	protected function configure()
	{
		$this->setName("gs:custom:FetchFromSheet")
		->setDescription("checks the queue and fetches any pending contacts into mautic for processing");
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
        $logger = $this->getContainer()->get('logger');
        $factory = $this->getContainer()->get("mautic.factory");
        $em = $factory->getEntityManager();
     
        /*
			google sheet get
		*/
		/**
		 * AUTHENTICATE
		 *
		 */
		// These settings are found on google developer console
		$objClientAuth = new Google_Client ();
		$objClientAuth->setApplicationName(self::CLIENT_APP_NAME);
		$objClientAuth->setClientId(self::CLIENT_ID);
		$objClientAuth->setAssertionCredentials(new Google_Auth_AssertionCredentials(
				self::CLIENT_EMAIL, array('https://spreadsheets.google.com/feeds', 'https://docs.google.com/feeds'), file_get_contents(self::CLIENT_KEY_PATH), self::CLIENT_KEY_PW
				));

		$objClientAuth->getAuth();

		$objClientAuth->getAuth()->refreshTokenWithAssertion();
		 

		$objToken = json_decode($objClientAuth->getAccessToken());

		$accessToken = $objToken->access_token;
		 
		 
		//prepare result - be it error or success
		$result = array();
		 
		$serviceRequest = new DefaultServiceRequest($accessToken);
		ServiceRequestFactory::setInstance($serviceRequest);
		if (!isset($serviceRequest)) {
			//echo "service request created";
            $output->writeln('error: Could not connect to google sheets');
            $logger->info('error: Could not connect to google sheets');
			die;
		}

        /**
         * un fetched worksheets
         */
        $segmentsToImport = $em->getRepository("MauticGSBundle:ImportSegment")->findBy([
                "importDone"=>false
            ],
            [
                "id"=>"ASC"
            ],
            10
        );
        
        if(isset($segmentsToImport) && count($segmentsToImport)>0){
            foreach($segmentsToImport as $seg){
                $logger->info($seg->getSheetName().' | '.$seg->getWorkSheetName());
                $output->writeln($seg->getSheetName().' | '.$seg->getWorkSheetName());
                
                /**
                * Get spreadsheet by title
                */
                $spreadsheetService = new SpreadsheetService();
                $spreadsheetFeed = $spreadsheetService->getSpreadsheets();
                $spreadsheet = $spreadsheetFeed->getByTitle($seg->getSheetName());
                if (!isset($spreadsheet)) {
                    $output->writeln('error: There was problem getting google sheet named ' . $seg->getSheetName());
                    $logger->info('error: There was problem getting google sheet named ' . $seg->getSheetName());
                    continue;
                }

                $worksheetFeed = $spreadsheet->getWorksheets();
		        $worksheet = $worksheetFeed->getByTitle($seg->getWorkSheetName());
                if (!isset($worksheet)) {
                    $output->writeln('error: There was problem getting google sheet named' . $seg->getWorkSheetName());
                    $logger->info('error: There was problem getting google sheet named' . $seg->getWorkSheetName());
                    continue;
                }
         
                /**
                * Get row lists of worksheet
		        */
        		$listFeed = $worksheet->getListFeed();
                
                
                $leadsArray = array();
                foreach ($listFeed->getEntries() as $entries) {
                    array_push($leadsArray, $entries->getValues());
                }

                if(count($leadsArray)>0){
                    try{
                       
                        
                        foreach ($leadsArray as $l) {
                            try{
                                if(!$em->isOpen()){
                                    $output->writeln("Connection is closed");
                                    $em = $em->create(
                                        $em->getConnection(), $em->getConfiguration());
                                }
                                $cti = new ContactsToImport();
                                if(isset($l['lastname'])){
                                    $cti->setLastName($l['lastname']);
                                }
                                if(isset($l['firstname'])){
                                    $cti->setFirstName($l['firstname']);
                                }
                                if(isset($l['email'])){
                                    $cti->setEmail($l['email']);
                                }
                                if(isset($l['phone'])){
                                    $cti->setPhone($l['phone']);
                                }
                                if(isset($l['mobile'])){
                                    $cti->setMobile($l['mobile']);
                                }
                                if(isset($l['position'])){
                                    $cti->setPosition($l['position']);
                                }
                                if(isset($l['company'])){
                                    $cti->setCompany($l['company']);
                                }
                                if(isset($l['homepage'])){
                                    $cti->setHomepage($l['homepage']);
                                }
                                if(isset($l['streetaddress'])){
                                    $cti->setStreetAddress($l['streetaddress']);
                                }
                                if(isset($l['city'])){
                                    $cti->setCity($l['city']);
                                }
                                if(isset($l['zipcode'])){
                                    $cti->setZipcode($l['zipcode']);
                                }
                                if(isset($l['country'])){
                                    $cti->setCountry($l['country']);
                                }
                                $cti->setImportSegmentId($seg->getId());
                                $cti->setLeadSegment($seg->getSegment());
                                $cti->setAddedToSegment(false);
                                $cti->setFetchedFromSheetOn(new \DateTime());
                                $em->persist($cti);
                                $em->flush();
                            }
                            catch(\Exception $e){
                                $logger->info('Error while saving Contact data '.$e->getMessage().' on '.$e->getFile().' '.$e->getLine());
                                $output->writeln('Error while saving Contact data '.$e->getMessage().' on '.$e->getFile().' '.$e->getLine());
                            }
                        }
                        
                        try{
                            if(!$em->isOpen()){
                                $output->writeln("Connection is closed");
                                $em = $em->create($em->getConnection(), $em->getConfiguration());
                            }
                            $segment = $em->getRepository("MauticGSBundle:ImportSegment")->findOneById($seg->getId());
                            $segment->setImportDone(true);
                            $segment->setImportCompletedOn(new \DateTime());
                            $em->flush();
                        }catch(\Exception $e){
                            $logger->info('Error while updating sheet data '.$e->getMessage().' on '.$e->getFile().' '.$e->getLine());
                            $output->writeln('Error while updating sheet data '.$e->getMessage().' on '.$e->getFile().' '.$e->getLine());
                        }                        
                    }
                    catch(\Exception $e){
                        $logger->info('Error while saving and updating data '.$e->getMessage().' on '.$e->getFile().' '.$e->getLine());
                        $output->writeln('Error while saving and updating data '.$e->getMessage().' on '.$e->getFile().' '.$e->getLine());
                    }
                }    
                
            }    
        }
	}
}
