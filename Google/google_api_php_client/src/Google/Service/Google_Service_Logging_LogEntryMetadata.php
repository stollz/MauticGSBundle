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

class Google_Service_Logging_LogEntryMetadata extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $labels;
    public $projectId;
    public $region;
    public $serviceName;
    public $severity;
    public $timestamp;
    public $userId;
    public $zone;


    public function setLabels($labels)
    {
        $this->labels = $labels;
    }
    public function getLabels()
    {
        return $this->labels;
    }
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }
    public function getProjectId()
    {
        return $this->projectId;
    }
    public function setRegion($region)
    {
        $this->region = $region;
    }
    public function getRegion()
    {
        return $this->region;
    }
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;
    }
    public function getServiceName()
    {
        return $this->serviceName;
    }
    public function setSeverity($severity)
    {
        $this->severity = $severity;
    }
    public function getSeverity()
    {
        return $this->severity;
    }
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
    public function getUserId()
    {
        return $this->userId;
    }
    public function setZone($zone)
    {
        $this->zone = $zone;
    }
    public function getZone()
    {
        return $this->zone;
    }
}
