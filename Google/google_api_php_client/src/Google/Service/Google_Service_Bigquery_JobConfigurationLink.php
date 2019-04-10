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


class Google_Service_Bigquery_JobConfigurationLink extends Google_Collection
{
    protected $collection_key = 'sourceUri';
    protected $internal_gapi_mappings = array(
    );
    public $createDisposition;
    protected $destinationTableType = 'Google_Service_Bigquery_TableReference';
    protected $destinationTableDataType = '';
    public $sourceUri;
    public $writeDisposition;


    public function setCreateDisposition($createDisposition)
    {
        $this->createDisposition = $createDisposition;
    }
    public function getCreateDisposition()
    {
        return $this->createDisposition;
    }
    public function setDestinationTable(Google_Service_Bigquery_TableReference $destinationTable)
    {
        $this->destinationTable = $destinationTable;
    }
    public function getDestinationTable()
    {
        return $this->destinationTable;
    }
    public function setSourceUri($sourceUri)
    {
        $this->sourceUri = $sourceUri;
    }
    public function getSourceUri()
    {
        return $this->sourceUri;
    }
    public function setWriteDisposition($writeDisposition)
    {
        $this->writeDisposition = $writeDisposition;
    }
    public function getWriteDisposition()
    {
        return $this->writeDisposition;
    }
}