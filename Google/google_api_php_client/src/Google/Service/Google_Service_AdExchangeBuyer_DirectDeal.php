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
class Google_Service_AdExchangeBuyer_DirectDeal extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $accountId;
    public $advertiser;
    public $currencyCode;
    public $endTime;
    public $fixedCpm;
    public $id;
    public $kind;
    public $name;
    public $privateExchangeMinCpm;
    public $publisherBlocksOverriden;
    public $sellerNetwork;
    public $startTime;


    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }
    public function getAccountId()
    {
        return $this->accountId;
    }
    public function setAdvertiser($advertiser)
    {
        $this->advertiser = $advertiser;
    }
    public function getAdvertiser()
    {
        return $this->advertiser;
    }
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }
    public function getEndTime()
    {
        return $this->endTime;
    }
    public function setFixedCpm($fixedCpm)
    {
        $this->fixedCpm = $fixedCpm;
    }
    public function getFixedCpm()
    {
        return $this->fixedCpm;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setPrivateExchangeMinCpm($privateExchangeMinCpm)
    {
        $this->privateExchangeMinCpm = $privateExchangeMinCpm;
    }
    public function getPrivateExchangeMinCpm()
    {
        return $this->privateExchangeMinCpm;
    }
    public function setPublisherBlocksOverriden($publisherBlocksOverriden)
    {
        $this->publisherBlocksOverriden = $publisherBlocksOverriden;
    }
    public function getPublisherBlocksOverriden()
    {
        return $this->publisherBlocksOverriden;
    }
    public function setSellerNetwork($sellerNetwork)
    {
        $this->sellerNetwork = $sellerNetwork;
    }
    public function getSellerNetwork()
    {
        return $this->sellerNetwork;
    }
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }
    public function getStartTime()
    {
        return $this->startTime;
    }
}