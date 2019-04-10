<?php

namespace MauticPlugin\MauticGSBundle\Controller;

use Doctrine\DBAL\Query\QueryBuilder;
use Doctrine\ORM\Query\ResultSetMapping;
use Mautic\CoreBundle\Controller\CommonController;
use Mautic\LeadBundle\Entity\Lead;
use MauticPlugin\MauticGSBundle\Entity\MauticGSPlugin;
use Symfony\Component\HttpFoundation\Response;
use DateTime;
use Mautic\CampaignBundle\Entity\Campaign;
use Mautic\CampaignBundle\Entity\Event;
use MauticPlugin\MauticGSBundle\Entity\ImportSegment;
use MauticPlugin\MauticGSBundle\Entity\ContactsToImport;
use MauticPlugin\MauticGSBundle\Entity\ChangeContactSegment;
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

/**
 *
 */
class GSController extends CommonController {

    const CLIENT_APP_NAME = 'mautic';
    const CLIENT_ID = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
    const CLIENT_EMAIL = 'mautic@mautic-xxxx.iam.gserviceaccount.com';
    const CLIENT_KEY_PATH = __DIR__ . '/../Google/mautic-service-api.p12'; // PATH_TO_KEY = where you keep your key file
    const CLIENT_KEY_PW = 'notasecret'; //password for the secret key


    /**
     * List the persons moved to the Pipedrive fetch from database and display online.
     * @return \Symfony\Component\HttpFoundation\JsonResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function indexAction() {
        $em = $this->factory->getEntityManager();
        $users = $em->getRepository("MauticUserBundle:User")->findAll();
        $lists = $em->getRepository("MauticLeadBundle:LeadList")->getLists();
        $changeSegment = $em->getRepository("MauticGSBundle:ChangeContactSegment")->findAll();

        return $this->delegateView(array(
            'contentTemplate' => 'MauticGSBundle:Default:index.html.php',
            'viewParameters' => array("lists" => $lists,"users"=>$users,"changeSegments"=>$changeSegment),
        ));
    }

    /**
     * the test campaign cloning creation in pipedrive
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function singleAction() {
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
            echo 'error<br/>';
            echo 'Could not connect to google sheets<br/>';
            die;
        }

        /**
         * Get spreadsheet by title
         */
        $spreadsheetTitle = $_POST['sheet_name'];
        $spreadsheetService = new SpreadsheetService();
        $spreadsheetFeed = $spreadsheetService->getSpreadsheets();
        $spreadsheet = $spreadsheetFeed->getByTitle($spreadsheetTitle);
        if (!isset($spreadsheet)) {
            //echo "spreadsheet connected";
            echo 'error<br/>';
            echo 'There was problem getting google sheet named ' . $_POST['sheet_name'] . '<br/>';
            die;
        }

        /**
         * Get particular worksheet of the selected spreadsheet
         */
        $worksheetTitle = $_POST['worksheet_name']; // it's generally named 'Sheet1'
        $worksheetFeed = $spreadsheet->getWorksheets();
        $worksheet = $worksheetFeed->getByTitle($worksheetTitle);
        if (!isset($spreadsheet)) {
            echo 'error<br/>';
            echo 'There was problem getting google sheet named' . $_POST['worksheet_name'] . '<br/>';
            die;
            //echo "worksheet connected";
        }

        /**
         * Get row lists of worksheet
         */
        $listFeed = $worksheet->getListFeed();

        /**
         * Print row lists
         */
        $leadsArray = array();
        foreach ($listFeed->getEntries() as $entries) {
            array_push($leadsArray, $entries->getValues());
        }

        try {
            /* obtain the connection manager for doctrine */
            $em = $this->getDoctrine()->getManager();

            /*
             * create lead list
             *              */
            $date = new \DateTime();
            $list = new \Mautic\LeadBundle\Entity\LeadList();
            $list->setName($_POST['list_name']);
            $list->setAlias(str_replace(" ", "-", strtolower($_POST['list_name']).'_'.$date->getTimestamp()));
            $list->setIsGlobal(true);
            $list->setFilters(array());
            $list->setDateAdded(new \DateTime());
            $list->setDescription($_POST['list_desc']);
            $list->setIsPublished(true);
            $em->persist($list);
            $em->flush();

            /**
             * Create Leads and Add them to the newly created list
             *
             **/
            //check for decoded data from the curl response and see if error or data returned proceed if data is returned
            $count = 0;
            if (count($leadsArray) == 0) {
                echo 'No data found';
            } else {
                $conn = $this->container->get('database_connection');
                $leadModel = $this->factory->getModel('lead');
                //loop over the each lead row returned
                foreach ($leadsArray as $l) {
                    //proceed only if it has a valid email
                    if (isset($l['email']) && strlen(trim($l['email'])) > 0) {
                        //check if lead already exists in Mautic, only matches through email, assuming each lead should contain unique email, continue the loop if exists otherwise proceed normally
                        $leadsFromDB = $conn->fetchAll("select * from ".MAUTIC_TABLE_PREFIX."leads where email='" . $l['email'] . "'");
                        if ($leadsFromDB!=null && count($leadsFromDB) > 0) {
                            /*
                             * Do something with lead if it is already existing,
                             * with following code you can check for unsubscribed leads or
                             * check against any existing lead in existing segment.
                             * */
                            /**
                             * check for unsubscribed
                             *
                            $isUnsubscribed = $conn->fetchAll("SELECT * FROM ".MAUTIC_TABLE_PREFIX."lead_donotcontact WHERE lead_id IN (SELECT id FROM ".MAUTIC_TABLE_PREFIX."leads WHERE email LIKE '%". $l['email'] . "%')");
                            if($isUnsubscribed!=null && count($isUnsubscribed)>0){
                                //lead has unsubscribed thus don't add
                                continue;
                            }

                            /**
                             * check against list based existance
                             *
                            if(isset($_POST['check_against']) && $_POST['check_against']!=''){
                               $isinList = $conn->fetchAll("SELECT * FROM ".MAUTIC_TABLE_PREFIX."lead_lists_leads WHERE leadlist_id = ".$_POST['check_against']." AND lead_id IN (SELECT id FROM ".MAUTIC_TABLE_PREFIX."leads WHERE email LIKE '%". $l['email'] . "%')");
                                if($isinList!=null && count($isinList)>0){
                                    //lead exists in the selected list
                                    continue;
                                }
                            }*/
                        } else {
                            $lead = new Lead();
                            /*
                             * you can ad as many fields you want
                             * */
                            $leadFields = array(
                                'firstname' => isset($l['firstname'])?$l['firstname']:'',
                                'lastname' => isset($l['lastname'])?$l['lastname']:'',
                                'email' => isset($l['email'])?$l['email']:'',
                                'phone' => isset($l['phone'])?$l['phone']:'',
                                'company' => isset($l['company'])?$l['company']:'',
                                'address1' => isset($l['streetaddress'])?$l['streetaddress']:'',
                                'zipcode' => isset($l['zipcode'])?$l['zipcode']:'',
                                'city' => isset($l['city'])?$l['city']:'',
                                'country' => isset($l['country'])?$l['country']:'',
                                'website' => isset($l['homepage'])?$l['homepage']:''
                            );

                            // Set the lead's data
                            $leadModel->setFieldValues($lead, $leadFields);

                            // Save the entity
                            $leadModel->saveEntity($lead);

                            $leadModel->updateLeadOwner($lead,$_POST['lead_owner']);

                            //add to list
                            $leadModel->addToLists($lead, [$list->getId()]);
                            $count++;
                        }
                    }
                }
            }
            /* adding to list ends */
        } catch (\Exception $e) {
            $this->get('logger')->info($e->getMessage().' on '.$e->getFile().' '.$e->getLine());
        }
        return $this->redirectToRoute('mautic_segment_index', array('page'=>''));
    }

    /**
     * to import all worksheets in one go, by scheduling/queuing it
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function massimportAction(){
        $logger = $this->get('logger');
        $success = true;
        /**
         * AUTHENTICATE
         *
         */
        // These settings are found on google developer console
        //echo '1';
        $objClientAuth = new Google_Client ();
        //echo '2';
        $objClientAuth->setApplicationName(self::CLIENT_APP_NAME);
        //echo '3';
        $objClientAuth->setClientId(self::CLIENT_ID);
        //echo '4';
        $objClientAuth->setAssertionCredentials(new Google_Auth_AssertionCredentials(
                self::CLIENT_EMAIL, array('https://spreadsheets.google.com/feeds', 'https://docs.google.com/feeds'), file_get_contents(self::CLIENT_KEY_PATH), self::CLIENT_KEY_PW
        ));
        //echo '5';
        $objClientAuth->getAuth();
        //echo '6';
        $objClientAuth->getAuth()->refreshTokenWithAssertion();

        //echo '7';
        $objToken = json_decode($objClientAuth->getAccessToken());
        //var_dump($objToken);
        //echo '8';
        $accessToken = $objToken->access_token;


        //prepare result - be it error or success
        $result = array();

        $serviceRequest = new DefaultServiceRequest($accessToken);
        ServiceRequestFactory::setInstance($serviceRequest);
        if (!isset($serviceRequest)) {
            //echo "service request created";
            $logger->info('Could not connect to google sheets');
            die;
        }

        /**
         * Get spreadsheet by title
         */
        $spreadsheetTitle = $_POST['sheet_name'];
        $spreadsheetService = new SpreadsheetService();
        $spreadsheetFeed = $spreadsheetService->getSpreadsheets();
        $spreadsheet = $spreadsheetFeed->getByTitle($spreadsheetTitle);
        if (!isset($spreadsheet)) {
            //echo "spreadsheet connected";
            $logger->info('There was problem getting google sheet named ' . $_POST['sheet_name']);
            die;
        }


        /**
         * Get  All worksheest of the selected spreadsheet
         */
        $worksheetFeed = $spreadsheet->getWorksheets();
        $worksheets = $worksheetFeed->getAllWorksheets();
        if (!isset($worksheets) || count($worksheets)==0) {
            $logger->info('There was problem getting WorkSheets');
            die;
            //echo "worksheet connected";
        }
        else{
            $factory = $this->factory;
            $em = $this->getDoctrine()->getManager();
            try {
                if(isset($_POST['existing_segment']) && $_POST['existing_segment']!=""){
                    foreach($worksheets as $worksheet){
                        $worksheetTitle = $worksheet->getTitle();
                        if(strpos($worksheetTitle,'Guide')!==false || strpos($worksheetTitle,'Template')!==false || strpos($worksheetTitle,'Expocheck')!==false){
                            continue;
                        }
                        try{
                            $impSegment = new ImportSegment();
                            $impSegment->setSheetName($_POST['sheet_name']);
                            $impSegment->setWorkSheetName($worksheetTitle);
                            $impSegment->setImportedOn(new \DateTime());
                            $impSegment->setImportedBy($_POST['lead_owner']);
                            $impSegment->setSegment(trim($_POST['existing_segment']));
                            $impSegment->setSegmentOwner($_POST['lead_owner']);
                            if(isset($_POST['check_against']) && $_POST['check_against']!=''){
                                $impSegment->setCheckAgainst($_POST['check_against']);
                            }
                            else{
                                $impSegment->setCheckAgainst(0);
                            }
                            if(isset($_POST['fallback_list']) && $_POST['fallback_list']!=''){
                                $impSegment->setFallbackSegment($_POST['fallback_list']);
                            }
                            else{
                                $impSegment->setFallbackSegment(0);
                            }
                            $impSegment->setCreateCampaign(false);
                            $impSegment->setCloneFromCampaign(0);
                            $impSegment->setImportDone(false);
                            $em->persist($impSegment);    
                            $em->flush();
                        }
                        catch(\Exception $e){
                            $logger->info($e->getMessage());
                            $success = false;
                        }
                    }
                }
                else if(isset($_POST['multiple_segment'])){
                    foreach($worksheets as $worksheet){
                        $worksheetTitle = $worksheet->getTitle();
                        if(strpos($worksheetTitle,'Template')!==false){
                            continue;
                        }
                        try{
                            /*
                            * create lead list for each worksheet
                            *
                            */
                            $date = new \DateTime();
                            $list = new \Mautic\LeadBundle\Entity\LeadList();
                            $list->setName($worksheet->getTitle().'-'.$_POST['sheet_name']);
                            $list->setAlias(str_replace(" ", "-", strtolower($worksheet->getTitle().'-'.$_POST['sheet_name']).'_'.$date->getTimestamp()));
                            $list->setIsGlobal(true);
                            $list->setFilters(array());
                            $list->setDateAdded(new \DateTime());
                            $list->setDescription($worksheet->getTitle().' Imported via Mass import form submission');
                            $list->setIsPublished(true);
                            $em->persist($list);
                            $em->flush();
                            

                            $impSegment = new ImportSegment();
                            $impSegment->setSheetName($_POST['sheet_name']);
                            $impSegment->setWorkSheetName($worksheet->getTitle());
                            $impSegment->setImportedOn(new \DateTime());
                            $impSegment->setImportedBy($_POST['lead_owner']);
                            $impSegment->setSegment($list->getId());
                            $impSegment->setSegmentOwner($_POST['lead_owner']);
                            if(isset($_POST['check_against']) && $_POST['check_against']!=''){
                                $impSegment->setCheckAgainst($_POST['check_against']);
                            }
                            else{
                                $impSegment->setCheckAgainst(0);
                            }
                            if(isset($_POST['fallback_list']) && $_POST['fallback_list']!=''){
                                $impSegment->setFallbackSegment($_POST['fallback_list']);
                            }
                            else{
                                $impSegment->setFallbackSegment(0);
                            }
                            $impSegment->setCreateCampaign(false);
                            $impSegment->setCloneFromCampaign(0);
                            $impSegment->setImportDone(false);
                            $em->persist($impSegment);    
                            $em->flush();
                        }
                        catch(\Exception $e){
                            $logger->info($e->getMessage());
                            $success = false;
                        }
                    }
                }
                else{
                    /*
                    * create lead list
                    *              */
                    $date = new \DateTime();
                    $list = new \Mautic\LeadBundle\Entity\LeadList();
                    $list->setName($_POST['list_name']);
                    $list->setAlias(str_replace(" ", "-", strtolower($_POST['list_name']).'_'.$date->getTimestamp()));
                    $list->setIsGlobal(true);
                    $list->setFilters(array());
                    $list->setDateAdded(new \DateTime());
                    $list->setDescription($_POST['list_name'].' Imported via Mass import form submission.');
                    $list->setIsPublished(true);
                    $em->persist($list);
                    $em->flush();

                    foreach($worksheets as $worksheet){
                        $worksheetTitle = $worksheet->getTitle();
                        if(strpos($worksheetTitle,'Guide')!==false || strpos($worksheetTitle,'Template')!==false || strpos($worksheetTitle,'Expocheck')!==false){
                            continue;
                        }
                        try{
                            $impSegment = new ImportSegment();
                            $impSegment->setSheetName($_POST['sheet_name']);
                            $impSegment->setWorkSheetName($worksheet->getTitle());
                            $impSegment->setImportedOn(new \DateTime());
                            $impSegment->setImportedBy($_POST['lead_owner']);
                            $impSegment->setSegment($list->getId());
                            $impSegment->setSegmentOwner($_POST['lead_owner']);
                            if(isset($_POST['check_against']) && $_POST['check_against']!=''){
                                $impSegment->setCheckAgainst($_POST['check_against']);
                            }
                            else{
                                $impSegment->setCheckAgainst(0);
                            }
                            if(isset($_POST['fallback_list']) && $_POST['fallback_list']!=''){
                                $impSegment->setFallbackSegment($_POST['fallback_list']);
                            }
                            else{
                                $impSegment->setFallbackSegment(0);
                            }
                            $impSegment->setCreateCampaign(false);
                            $impSegment->setCloneFromCampaign(0);
                            $impSegment->setImportDone(false);
                            $em->persist($impSegment);    
                        }
                        catch(\Exception $e){
                            $logger->info($e->getMessage().' on '.$e->getFile().' '.$e->getLine());
                            $success = false;
                        }
                    }    
                    $em->flush();
                }              
            } catch (\Exception $e) {
                $logger->info($e->getMessage().' on '.$e->getFile().' '.$e->getLine());
                $success = false;
            }        
        }

        return $this->delegateView(array(
            'contentTemplate' => 'MauticGSBundle:Default:result.html.php',
            'viewParameters' => ["message"=>$success?'Success':"There was some problem, operation was not successfull"],
        ));
    }

    /**
     * Add change segment input
     * @return \Symfony\Component\HttpFoundation\JsonResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function changesegmentAction() {
        try{
            $em = $this->factory->getEntityManager();
            $cSegment = new ChangeContactSegment();
            $cSegment->setSource($_POST['source_segment']);
            $cSegment->setDestination($_POST['destination_segment']);
            $cSegment->setLimit($_POST['limit']);
            $em->persist($cSegment);    
            $em->flush();
            return $this->redirectToRoute('plugin_mautic_pipedrive_index', array('page'=>''));    
        }
        catch(\Exception $e){
            $this->get('logger')->info($e->getMessage().' on '.$e->getFile().' '.$e->getLine());
            return $this->delegateView(array(
                'contentTemplate' => 'MauticGSBundle:Default:error.html.php',
                'viewParameters' => array("error"=>$e->getMessage()),
            ));
        }
    }

    /**
     * Add change segment input
     * @return \Symfony\Component\HttpFoundation\JsonResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function deletechangesegmentAction() {
        try{
            $em = $this->factory->getEntityManager();
            $cSegment = $em->getRepository("MauticGSBundle:ChangeContactSegment")->findOneById($_POST['idToDelete']);
            $em->remove($cSegment);    
            $em->flush();
            return $this->redirectToRoute('plugin_mautic_pipedrive_index', array('page'=>''));    
        }
        catch(\Exception $e){
            $this->get('logger')->info($e->getMessage().' on '.$e->getFile().' '.$e->getLine());
            return $this->delegateView(array(
                'contentTemplate' => 'MauticGSBundle:Default:error.html.php',
                'viewParameters' => array("error"=>$e->getMessage()),
            ));
        }
    }
}

