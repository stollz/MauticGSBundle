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


class Google_Service_Bigquery_ExternalDataConfiguration extends Google_Collection
{
    protected $collection_key = 'sourceUris';
    protected $internal_gapi_mappings = array(
    );
    public $compression;
    protected $csvOptionsType = 'Google_Service_Bigquery_CsvOptions';
    protected $csvOptionsDataType = '';
    public $ignoreUnknownValues;
    public $maxBadRecords;
    protected $schemaType = 'Google_Service_Bigquery_TableSchema';
    protected $schemaDataType = '';
    public $sourceFormat;
    public $sourceUris;


    public function setCompression($compression)
    {
        $this->compression = $compression;
    }
    public function getCompression()
    {
        return $this->compression;
    }
    public function setCsvOptions(Google_Service_Bigquery_CsvOptions $csvOptions)
    {
        $this->csvOptions = $csvOptions;
    }
    public function getCsvOptions()
    {
        return $this->csvOptions;
    }
    public function setIgnoreUnknownValues($ignoreUnknownValues)
    {
        $this->ignoreUnknownValues = $ignoreUnknownValues;
    }
    public function getIgnoreUnknownValues()
    {
        return $this->ignoreUnknownValues;
    }
    public function setMaxBadRecords($maxBadRecords)
    {
        $this->maxBadRecords = $maxBadRecords;
    }
    public function getMaxBadRecords()
    {
        return $this->maxBadRecords;
    }
    public function setSchema(Google_Service_Bigquery_TableSchema $schema)
    {
        $this->schema = $schema;
    }
    public function getSchema()
    {
        return $this->schema;
    }
    public function setSourceFormat($sourceFormat)
    {
        $this->sourceFormat = $sourceFormat;
    }
    public function getSourceFormat()
    {
        return $this->sourceFormat;
    }
    public function setSourceUris($sourceUris)
    {
        $this->sourceUris = $sourceUris;
    }
    public function getSourceUris()
    {
        return $this->sourceUris;
    }
}