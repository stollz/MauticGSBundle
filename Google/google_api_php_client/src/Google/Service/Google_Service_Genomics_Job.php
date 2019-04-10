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


class Google_Service_Genomics_Job extends Google_Collection
{
    protected $collection_key = 'warnings';
    protected $internal_gapi_mappings = array(
    );
    public $created;
    public $detailedStatus;
    public $errors;
    public $id;
    public $importedIds;
    public $projectNumber;
    protected $requestType = 'Google_Service_Genomics_JobRequest';
    protected $requestDataType = '';
    public $status;
    public $warnings;


    public function setCreated($created)
    {
        $this->created = $created;
    }
    public function getCreated()
    {
        return $this->created;
    }
    public function setDetailedStatus($detailedStatus)
    {
        $this->detailedStatus = $detailedStatus;
    }
    public function getDetailedStatus()
    {
        return $this->detailedStatus;
    }
    public function setErrors($errors)
    {
        $this->errors = $errors;
    }
    public function getErrors()
    {
        return $this->errors;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setImportedIds($importedIds)
    {
        $this->importedIds = $importedIds;
    }
    public function getImportedIds()
    {
        return $this->importedIds;
    }
    public function setProjectNumber($projectNumber)
    {
        $this->projectNumber = $projectNumber;
    }
    public function getProjectNumber()
    {
        return $this->projectNumber;
    }
    public function setRequest(Google_Service_Genomics_JobRequest $request)
    {
        $this->request = $request;
    }
    public function getRequest()
    {
        return $this->request;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setWarnings($warnings)
    {
        $this->warnings = $warnings;
    }
    public function getWarnings()
    {
        return $this->warnings;
    }
}