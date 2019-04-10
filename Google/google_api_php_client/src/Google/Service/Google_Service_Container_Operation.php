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



class Google_Service_Container_Operation extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $errorMessage;
    public $name;
    public $operationType;
    public $selfLink;
    public $status;
    public $target;
    public $targetLink;
    public $zone;


    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;
    }
    public function getOperationType()
    {
        return $this->operationType;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setTarget($target)
    {
        $this->target = $target;
    }
    public function getTarget()
    {
        return $this->target;
    }
    public function setTargetLink($targetLink)
    {
        $this->targetLink = $targetLink;
    }
    public function getTargetLink()
    {
        return $this->targetLink;
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