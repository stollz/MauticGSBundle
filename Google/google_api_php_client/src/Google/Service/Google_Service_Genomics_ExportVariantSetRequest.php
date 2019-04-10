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



class Google_Service_Genomics_ExportVariantSetRequest extends Google_Collection
{
    protected $collection_key = 'callSetIds';
    protected $internal_gapi_mappings = array(
    );
    public $bigqueryDataset;
    public $bigqueryTable;
    public $callSetIds;
    public $format;
    public $projectNumber;


    public function setBigqueryDataset($bigqueryDataset)
    {
        $this->bigqueryDataset = $bigqueryDataset;
    }
    public function getBigqueryDataset()
    {
        return $this->bigqueryDataset;
    }
    public function setBigqueryTable($bigqueryTable)
    {
        $this->bigqueryTable = $bigqueryTable;
    }
    public function getBigqueryTable()
    {
        return $this->bigqueryTable;
    }
    public function setCallSetIds($callSetIds)
    {
        $this->callSetIds = $callSetIds;
    }
    public function getCallSetIds()
    {
        return $this->callSetIds;
    }
    public function setFormat($format)
    {
        $this->format = $format;
    }
    public function getFormat()
    {
        return $this->format;
    }
    public function setProjectNumber($projectNumber)
    {
        $this->projectNumber = $projectNumber;
    }
    public function getProjectNumber()
    {
        return $this->projectNumber;
    }
}
