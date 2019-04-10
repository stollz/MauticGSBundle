<?php
namespace MauticPlugin\MauticGSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Mautic\CoreBundle\Entity\CommonEntity;
use Mautic\CoreBundle\Doctrine\Mapping\ClassMetadataBuilder;

/**
 * 
 * @ORM\Entity
 * @ORM\Table(name="plugin_import_segment")
 */
class ImportSegment extends CommonEntity{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="sheet_name", type="string", nullable=true)
     */
    private $sheetName;

    /**
     * @ORM\Column(name="work_sheet_name", type="string", nullable=true)
     */
    private $workSheetName;

    /**
     * @ORM\Column(name="imported_on", type="datetime", nullable=true)
     */
    private $importedOn;

    /**
     * @ORM\Column(name="imported_by", type="integer", nullable=true)
     */
    private $importedBy;

    /**
     * @ORM\Column(name="segment", type="integer", nullable=true)
     */
    private $segment;

    /**
     * @ORM\Column(name="segment_owner", type="integer", nullable=true)
     */
    private $segmentOwner;
      
    /**
     * @ORM\Column(name="check_against", type="integer", nullable=true)
     */
    private $checkAgainst;
    
    /**
     * @ORM\Column(name="fallback_segment", type="integer", nullable=true)
     */
    private $fallbackSegment;
   
    /**
     * @ORM\Column(name="create_campaign", type="boolean", nullable=true)
     */
    private $createCampaign;
   
     /**
     * @ORM\Column(name="clone_from_campaign", type="integer", nullable=true)
     */
    private $cloneFromCampaign;
 
    /**
     * @ORM\Column(name="import_done", type="boolean", nullable=true)
     */
    private $importDone;
    
    /**
     * @ORM\Column(name="import_completed_on", type="datetime", nullable=true)
     */
    private $importCompletedOn;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getSheetName(){
        return $this->sheetName;
    }

    public function setSheetName($sheetName){
        $this->sheetName = $sheetName;
    }

    public function getWorkSheetName(){
        return $this->workSheetName;
    }

    public function setWorkSheetName($workSheetName){
        $this->workSheetName = $workSheetName;
    }

    public function getImportedOn(){
        return $this->importedOn;
    }

    public function setImportedOn($importedOn){
        $this->importedOn = $importedOn;
    }

    public function getImportedBy(){
        return $this->importedBy;
    }

    public function setImportedBy($importedBy){
        $this->importedBy = $importedBy;
    }

    public function getSegment(){
        return $this->segment;
    }

    public function setSegment($segment){
        $this->segment = $segment;
    }

    public function getSegmentOwner(){
        return $this->segmentOwner;
    }

    public function setSegmentOwner($segmentOwner){
        $this->segmentOwner = $segmentOwner;
    }

    public function getCheckAgainst(){
        return $this->checkAgainst;
    }

    public function setCheckAgainst($checkAgainst){
        $this->checkAgainst = $checkAgainst;
    }

    public function getFallbackSegment(){
        return $this->fallbackSegment;
    }

    public function setFallbackSegment($fallbackSegment){
        $this->fallbackSegment = $fallbackSegment;
    }

    public function isCreateCampaign(){
        return $this->createCampaign;
    }

    public function setCreateCampaign($createCampaign){
        $this->createCampaign = $createCampaign;
    }
   
    public function getCloneFromCampaign(){
        return $this->cloneFromCampaign;
    }

    public function setCloneFromCampaign($cloneFromCampaign){
        $this->cloneFromCampaign = $cloneFromCampaign;
    }
   
    public function isImportDone(){
        return $this->importDone;
    }

    public function setImportDone($importDone){
        $this->importDone = $importDone;
    }

    public function getImportCompletedOn(){
        return $this->importCompletedOn;
    }

    public function setImportCompletedOn($importCompletedOn){
        $this->importCompletedOn = $importCompletedOn;
    }
}