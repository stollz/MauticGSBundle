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

class Google_Service_TagManager_Tag extends Google_Collection
{
    protected $collection_key = 'parameter';
    protected $internal_gapi_mappings = array(
    );
    public $accountId;
    public $blockingRuleId;
    public $blockingTriggerId;
    public $containerId;
    public $fingerprint;
    public $firingRuleId;
    public $firingTriggerId;
    public $liveOnly;
    public $name;
    public $notes;
    protected $parameterType = 'Google_Service_TagManager_Parameter';
    protected $parameterDataType = 'array';
    protected $priorityType = 'Google_Service_TagManager_Parameter';
    protected $priorityDataType = '';
    public $scheduleEndMs;
    public $scheduleStartMs;
    public $tagId;
    public $type;


    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }
    public function getAccountId()
    {
        return $this->accountId;
    }
    public function setBlockingRuleId($blockingRuleId)
    {
        $this->blockingRuleId = $blockingRuleId;
    }
    public function getBlockingRuleId()
    {
        return $this->blockingRuleId;
    }
    public function setBlockingTriggerId($blockingTriggerId)
    {
        $this->blockingTriggerId = $blockingTriggerId;
    }
    public function getBlockingTriggerId()
    {
        return $this->blockingTriggerId;
    }
    public function setContainerId($containerId)
    {
        $this->containerId = $containerId;
    }
    public function getContainerId()
    {
        return $this->containerId;
    }
    public function setFingerprint($fingerprint)
    {
        $this->fingerprint = $fingerprint;
    }
    public function getFingerprint()
    {
        return $this->fingerprint;
    }
    public function setFiringRuleId($firingRuleId)
    {
        $this->firingRuleId = $firingRuleId;
    }
    public function getFiringRuleId()
    {
        return $this->firingRuleId;
    }
    public function setFiringTriggerId($firingTriggerId)
    {
        $this->firingTriggerId = $firingTriggerId;
    }
    public function getFiringTriggerId()
    {
        return $this->firingTriggerId;
    }
    public function setLiveOnly($liveOnly)
    {
        $this->liveOnly = $liveOnly;
    }
    public function getLiveOnly()
    {
        return $this->liveOnly;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }
    public function getNotes()
    {
        return $this->notes;
    }
    public function setParameter($parameter)
    {
        $this->parameter = $parameter;
    }
    public function getParameter()
    {
        return $this->parameter;
    }
    public function setPriority(Google_Service_TagManager_Parameter $priority)
    {
        $this->priority = $priority;
    }
    public function getPriority()
    {
        return $this->priority;
    }
    public function setScheduleEndMs($scheduleEndMs)
    {
        $this->scheduleEndMs = $scheduleEndMs;
    }
    public function getScheduleEndMs()
    {
        return $this->scheduleEndMs;
    }
    public function setScheduleStartMs($scheduleStartMs)
    {
        $this->scheduleStartMs = $scheduleStartMs;
    }
    public function getScheduleStartMs()
    {
        return $this->scheduleStartMs;
    }
    public function setTagId($tagId)
    {
        $this->tagId = $tagId;
    }
    public function getTagId()
    {
        return $this->tagId;
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
