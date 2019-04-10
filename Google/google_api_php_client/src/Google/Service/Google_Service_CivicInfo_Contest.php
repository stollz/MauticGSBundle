<?php
namespace MauticPlugin\MauticGSBundle\Google\google_api_php_client\src\Google\Service;
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
class Google_Service_CivicInfo_Contest extends Google_Collection
{
    protected $collection_key = 'sources';
    protected $internal_gapi_mappings = array(
    );
    public $ballotPlacement;
    protected $candidatesType = 'Google_Service_CivicInfo_Candidate';
    protected $candidatesDataType = 'array';
    protected $districtType = 'Google_Service_CivicInfo_ElectoralDistrict';
    protected $districtDataType = '';
    public $electorateSpecifications;
    public $id;
    public $level;
    public $numberElected;
    public $numberVotingFor;
    public $office;
    public $primaryParty;
    public $referendumSubtitle;
    public $referendumTitle;
    public $referendumUrl;
    public $roles;
    protected $sourcesType = 'Google_Service_CivicInfo_Source';
    protected $sourcesDataType = 'array';
    public $special;
    public $type;


    public function setBallotPlacement($ballotPlacement)
    {
        $this->ballotPlacement = $ballotPlacement;
    }
    public function getBallotPlacement()
    {
        return $this->ballotPlacement;
    }
    public function setCandidates($candidates)
    {
        $this->candidates = $candidates;
    }
    public function getCandidates()
    {
        return $this->candidates;
    }
    public function setDistrict(Google_Service_CivicInfo_ElectoralDistrict $district)
    {
        $this->district = $district;
    }
    public function getDistrict()
    {
        return $this->district;
    }
    public function setElectorateSpecifications($electorateSpecifications)
    {
        $this->electorateSpecifications = $electorateSpecifications;
    }
    public function getElectorateSpecifications()
    {
        return $this->electorateSpecifications;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setLevel($level)
    {
        $this->level = $level;
    }
    public function getLevel()
    {
        return $this->level;
    }
    public function setNumberElected($numberElected)
    {
        $this->numberElected = $numberElected;
    }
    public function getNumberElected()
    {
        return $this->numberElected;
    }
    public function setNumberVotingFor($numberVotingFor)
    {
        $this->numberVotingFor = $numberVotingFor;
    }
    public function getNumberVotingFor()
    {
        return $this->numberVotingFor;
    }
    public function setOffice($office)
    {
        $this->office = $office;
    }
    public function getOffice()
    {
        return $this->office;
    }
    public function setPrimaryParty($primaryParty)
    {
        $this->primaryParty = $primaryParty;
    }
    public function getPrimaryParty()
    {
        return $this->primaryParty;
    }
    public function setReferendumSubtitle($referendumSubtitle)
    {
        $this->referendumSubtitle = $referendumSubtitle;
    }
    public function getReferendumSubtitle()
    {
        return $this->referendumSubtitle;
    }
    public function setReferendumTitle($referendumTitle)
    {
        $this->referendumTitle = $referendumTitle;
    }
    public function getReferendumTitle()
    {
        return $this->referendumTitle;
    }
    public function setReferendumUrl($referendumUrl)
    {
        $this->referendumUrl = $referendumUrl;
    }
    public function getReferendumUrl()
    {
        return $this->referendumUrl;
    }
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }
    public function getRoles()
    {
        return $this->roles;
    }
    public function setSources($sources)
    {
        $this->sources = $sources;
    }
    public function getSources()
    {
        return $this->sources;
    }
    public function setSpecial($special)
    {
        $this->special = $special;
    }
    public function getSpecial()
    {
        return $this->special;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
}
