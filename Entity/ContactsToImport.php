<?php
namespace MauticPlugin\MauticGSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Mautic\CoreBundle\Entity\CommonEntity;
use Mautic\CoreBundle\Doctrine\Mapping\ClassMetadataBuilder;

/**
 * 
 * @ORM\Entity
 * @ORM\Table(name="plugin_contacts_to_import")
 */
class ContactsToImport extends CommonEntity{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    

    /**
     * @ORM\Column(name="last_name", type="string", nullable=true)
     */
    private $lastName;
    
    /**
     * @ORM\Column(name="first_name", type="string", nullable=true)
     */
    private $firstName;

    /**
     * @ORM\Column(name="email", type="string", nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(name="phone", type="string", nullable=true)
     */
    private $phone;

    /**
     * @ORM\Column(name="mobile", type="string", nullable=true)
     */
    private $mobile;

    /**
     * @ORM\Column(name="position", type="string", nullable=true)
     */
    private $position;

    /**
     * @ORM\Column(name="company", type="string", nullable=true)
     */
    private $company;

    /**
     * @ORM\Column(name="homepage", type="string", nullable=true)
     */
    private $homepage;

    /**
     * @ORM\Column(name="street_address", type="string", nullable=true)
     */
    private $streetAddress;

    /**
     * @ORM\Column(name="city", type="string", nullable=true)
     */
    private $city;

    /**
     * @ORM\Column(name="zipcode", type="string", nullable=true)
     */
    private $zipcode;

    /**
     * @ORM\Column(name="country", type="string", nullable=true)
     */
    private $country;

    /**
     * @ORM\Column(name="import_segment_id", type="integer", nullable=true)
     */
    private $importSegmentId;

    /**
     * @ORM\Column(name="lead_segment", type="integer", nullable=true)
     */
    private $leadSegment;

    /**
     * @ORM\Column(name="added_to_segment", type="boolean", nullable=true)
     */
    private $addedToSegment;

    /**
     * @ORM\Column(name="added_to_segment_on", type="datetime", nullable=true)
     */
    private $addedToSegmentOn;

    /**
     * @ORM\Column(name="skipped", type="boolean", nullable=true)
     */
    private $skipped;

    /**
     * @ORM\Column(name="reason_for_skipped", type="string", nullable=true)
     */
    private $reasonForSkipped;

    /**
     * @ORM\Column(name="fetched_from_sheet_on", type="datetime", nullable=true)
     */
    private $fetchedFromSheetOn;

    public function getId(){
	    return $this->id;
    }

    public function setId($id){
	    $this->id = $id;
    }

    public function getNr(){
	    return $this->nr;
    }

    public function setNr($nr){
	    $this->nr = $nr;
    }

    public function getSalutation(){
	    return $this->salutation;
    }

    public function setSalutation($salutation){
	    $this->salutation = $salutation;
    }

    public function getLastName(){
	    return $this->lastName;
    }

    public function setLastName($lastName){
	    $this->lastName = $lastName;
    }

    public function getFirstName(){
	    return $this->firstName;
    }

    public function setFirstName($firstName){
	    $this->firstName = $firstName;
    }

    public function getEmail(){
	    return $this->email;
    }

    public function setEmail($email){
	    $this->email = $email;
    }

    public function getPhone(){
	    return $this->phone;
    }

    public function setPhone($phone){
	    $this->phone = $phone;
    }

    public function getMobile(){
	    return $this->mobile;
    }

    public function setMobile($mobile){
	    $this->mobile = $mobile;
    }

    public function getPosition(){
	    return $this->position;
    }

    public function setPosition($position){
	    $this->position = $position;
    }

    public function getCompany(){
	    return $this->company;
    }

    public function setCompany($company){
	    $this->company = $company;
    }

    public function getHomepage(){
	    return $this->homepage;
    }

    public function setHomepage($homepage){
	    $this->homepage = $homepage;
    }

    public function getStreetAddress(){
	    return $this->streetAddress;
    }

    public function setStreetAddress($streetAddress){
	    $this->streetAddress = $streetAddress;
    }

    public function getCity(){
	    return $this->city;
    }

    public function setCity($city){
	    $this->city = $city;
    }

    public function getZipcode(){
	    return $this->zipcode;
    }

    public function setZipcode($zipcode){
	    $this->zipcode = $zipcode;
    }

    public function getCountry(){
	    return $this->country;
    }

    public function setCountry($country){
	    $this->country = $country;
    }

    public function getTradeFair(){
	    return $this->tradeFair;
    }

    public function setTradeFair($tradeFair){
	    $this->tradeFair = $tradeFair;
    }

    public function getStartDate(){
	    return $this->startDate;
    }

    public function setStartDate($startDate){
	    $this->startDate = $startDate;
    }

    public function getNotes(){
	    return $this->notes;
    }

    public function setNotes($notes){
	    $this->notes = $notes;
    }

    public function getUser(){
	    return $this->user;
    }

    public function setUser($user){
	    $this->user = $user;
    }

    public function getNextActivity(){
	    return $this->nextActivity;
    }

    public function setNextActivity($nextActivity){
	    $this->nextActivity = $nextActivity;
    }

    public function getImportSegmentId(){
	    return $this->importSegmentId;
    }

    public function setImportSegmentId($importSegmentId){
	    $this->importSegmentId = $importSegmentId;
    }

    public function getLeadSegment(){
	    return $this->leadSegment;
    }

    public function setLeadSegment($leadSegment){
	    $this->leadSegment = $leadSegment;
    }

    public function getAddedToSegment(){
	    return $this->addedToSegment;
    }

    public function setaddedToSegment($addedToSegment){
	    $this->addedToSegment = $addedToSegment;
    }

    public function getAddedToSegmentOn(){
	    return $this->addedToSegmentOn;
    }

    public function setAddedToSegmentOn($addedToSegmentOn){
	    $this->addedToSegmentOn = $addedToSegmentOn;
    }

    public function isSkipped(){
	    return $this->skipped;
    }

    public function setSkipped($skipped){
	    $this->skipped = $skipped;
    }

    public function getReasonForSkipped(){
	    return $this->reasonForSkipped;
    }

    public function setReasonForSkipped($reasonForSkipped){
	    $this->reasonForSkipped = $reasonForSkipped;
    }

    public function getfetchedFromSheetOn(){
	    return $this->fetchedFromSheetOn;
    }

    public function setFetchedFromSheetOn($fetchedFromSheetOn){
	    $this->fetchedFromSheetOn = $fetchedFromSheetOn;
    }


}