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

class Google_Service_Dfareporting_ProgrammaticSetting extends Google_Collection
{
    protected $collection_key = 'traffickerEmails';
    protected $internal_gapi_mappings = array(
    );
    public $adxDealIds;
    public $insertionOrderId;
    public $insertionOrderIdStatus;
    public $mediaCostNanos;
    public $programmatic;
    public $traffickerEmails;


    public function setAdxDealIds($adxDealIds)
    {
        $this->adxDealIds = $adxDealIds;
    }
    public function getAdxDealIds()
    {
        return $this->adxDealIds;
    }
    public function setInsertionOrderId($insertionOrderId)
    {
        $this->insertionOrderId = $insertionOrderId;
    }
    public function getInsertionOrderId()
    {
        return $this->insertionOrderId;
    }
    public function setInsertionOrderIdStatus($insertionOrderIdStatus)
    {
        $this->insertionOrderIdStatus = $insertionOrderIdStatus;
    }
    public function getInsertionOrderIdStatus()
    {
        return $this->insertionOrderIdStatus;
    }
    public function setMediaCostNanos($mediaCostNanos)
    {
        $this->mediaCostNanos = $mediaCostNanos;
    }
    public function getMediaCostNanos()
    {
        return $this->mediaCostNanos;
    }
    public function setProgrammatic($programmatic)
    {
        $this->programmatic = $programmatic;
    }
    public function getProgrammatic()
    {
        return $this->programmatic;
    }
    public function setTraffickerEmails($traffickerEmails)
    {
        $this->traffickerEmails = $traffickerEmails;
    }
    public function getTraffickerEmails()
    {
        return $this->traffickerEmails;
    }
}
