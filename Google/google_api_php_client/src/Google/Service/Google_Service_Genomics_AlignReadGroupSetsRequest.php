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


class Google_Service_Genomics_AlignReadGroupSetsRequest extends Google_Collection
{
    protected $collection_key = 'bamSourceUris';
    protected $internal_gapi_mappings = array(
    );
    public $bamSourceUris;
    public $datasetId;
    protected $interleavedFastqSourceType = 'Google_Service_Genomics_InterleavedFastqSource';
    protected $interleavedFastqSourceDataType = '';
    protected $pairedFastqSourceType = 'Google_Service_Genomics_PairedFastqSource';
    protected $pairedFastqSourceDataType = '';
    public $readGroupSetId;


    public function setBamSourceUris($bamSourceUris)
    {
        $this->bamSourceUris = $bamSourceUris;
    }
    public function getBamSourceUris()
    {
        return $this->bamSourceUris;
    }
    public function setDatasetId($datasetId)
    {
        $this->datasetId = $datasetId;
    }
    public function getDatasetId()
    {
        return $this->datasetId;
    }
    public function setInterleavedFastqSource(Google_Service_Genomics_InterleavedFastqSource $interleavedFastqSource)
    {
        $this->interleavedFastqSource = $interleavedFastqSource;
    }
    public function getInterleavedFastqSource()
    {
        return $this->interleavedFastqSource;
    }
    public function setPairedFastqSource(Google_Service_Genomics_PairedFastqSource $pairedFastqSource)
    {
        $this->pairedFastqSource = $pairedFastqSource;
    }
    public function getPairedFastqSource()
    {
        return $this->pairedFastqSource;
    }
    public function setReadGroupSetId($readGroupSetId)
    {
        $this->readGroupSetId = $readGroupSetId;
    }
    public function getReadGroupSetId()
    {
        return $this->readGroupSetId;
    }
}
