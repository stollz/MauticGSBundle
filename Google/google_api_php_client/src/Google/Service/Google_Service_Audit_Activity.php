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



class Google_Service_Audit_Activity extends Google_Collection
{
    protected $collection_key = 'events';
    protected $internal_gapi_mappings = array(
    );
    protected $actorType = 'Google_Service_Audit_ActivityActor';
    protected $actorDataType = '';
    protected $eventsType = 'Google_Service_Audit_ActivityEvents';
    protected $eventsDataType = 'array';
    protected $idType = 'Google_Service_Audit_ActivityId';
    protected $idDataType = '';
    public $ipAddress;
    public $kind;
    public $ownerDomain;


    public function setActor(Google_Service_Audit_ActivityActor $actor)
    {
        $this->actor = $actor;
    }
    public function getActor()
    {
        return $this->actor;
    }
    public function setEvents($events)
    {
        $this->events = $events;
    }
    public function getEvents()
    {
        return $this->events;
    }
    public function setId(Google_Service_Audit_ActivityId $id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }
    public function getIpAddress()
    {
        return $this->ipAddress;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setOwnerDomain($ownerDomain)
    {
        $this->ownerDomain = $ownerDomain;
    }
    public function getOwnerDomain()
    {
        return $this->ownerDomain;
    }
}