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

class Google_Service_Logging_LogEntry extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $insertId;
    public $log;
    protected $metadataType = 'Google_Service_Logging_LogEntryMetadata';
    protected $metadataDataType = '';
    public $protoPayload;
    public $structPayload;
    public $textPayload;


    public function setInsertId($insertId)
    {
        $this->insertId = $insertId;
    }
    public function getInsertId()
    {
        return $this->insertId;
    }
    public function setLog($log)
    {
        $this->log = $log;
    }
    public function getLog()
    {
        return $this->log;
    }
    public function setMetadata(Google_Service_Logging_LogEntryMetadata $metadata)
    {
        $this->metadata = $metadata;
    }
    public function getMetadata()
    {
        return $this->metadata;
    }
    public function setProtoPayload($protoPayload)
    {
        $this->protoPayload = $protoPayload;
    }
    public function getProtoPayload()
    {
        return $this->protoPayload;
    }
    public function setStructPayload($structPayload)
    {
        $this->structPayload = $structPayload;
    }
    public function getStructPayload()
    {
        return $this->structPayload;
    }
    public function setTextPayload($textPayload)
    {
        $this->textPayload = $textPayload;
    }
    public function getTextPayload()
    {
        return $this->textPayload;
    }
}
