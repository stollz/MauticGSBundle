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
class Google_Service_AdExchangeBuyer_PerformanceReport extends Google_Collection
{
    protected $collection_key = 'hostedMatchStatusRate';
    protected $internal_gapi_mappings = array(
    );
    public $calloutStatusRate;
    public $cookieMatcherStatusRate;
    public $creativeStatusRate;
    public $hostedMatchStatusRate;
    public $kind;
    public $latency50thPercentile;
    public $latency85thPercentile;
    public $latency95thPercentile;
    public $noQuotaInRegion;
    public $outOfQuota;
    public $pixelMatchRequests;
    public $pixelMatchResponses;
    public $quotaConfiguredLimit;
    public $quotaThrottledLimit;
    public $region;
    public $timestamp;


    public function setCalloutStatusRate($calloutStatusRate)
    {
        $this->calloutStatusRate = $calloutStatusRate;
    }
    public function getCalloutStatusRate()
    {
        return $this->calloutStatusRate;
    }
    public function setCookieMatcherStatusRate($cookieMatcherStatusRate)
    {
        $this->cookieMatcherStatusRate = $cookieMatcherStatusRate;
    }
    public function getCookieMatcherStatusRate()
    {
        return $this->cookieMatcherStatusRate;
    }
    public function setCreativeStatusRate($creativeStatusRate)
    {
        $this->creativeStatusRate = $creativeStatusRate;
    }
    public function getCreativeStatusRate()
    {
        return $this->creativeStatusRate;
    }
    public function setHostedMatchStatusRate($hostedMatchStatusRate)
    {
        $this->hostedMatchStatusRate = $hostedMatchStatusRate;
    }
    public function getHostedMatchStatusRate()
    {
        return $this->hostedMatchStatusRate;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setLatency50thPercentile($latency50thPercentile)
    {
        $this->latency50thPercentile = $latency50thPercentile;
    }
    public function getLatency50thPercentile()
    {
        return $this->latency50thPercentile;
    }
    public function setLatency85thPercentile($latency85thPercentile)
    {
        $this->latency85thPercentile = $latency85thPercentile;
    }
    public function getLatency85thPercentile()
    {
        return $this->latency85thPercentile;
    }
    public function setLatency95thPercentile($latency95thPercentile)
    {
        $this->latency95thPercentile = $latency95thPercentile;
    }
    public function getLatency95thPercentile()
    {
        return $this->latency95thPercentile;
    }
    public function setNoQuotaInRegion($noQuotaInRegion)
    {
        $this->noQuotaInRegion = $noQuotaInRegion;
    }
    public function getNoQuotaInRegion()
    {
        return $this->noQuotaInRegion;
    }
    public function setOutOfQuota($outOfQuota)
    {
        $this->outOfQuota = $outOfQuota;
    }
    public function getOutOfQuota()
    {
        return $this->outOfQuota;
    }
    public function setPixelMatchRequests($pixelMatchRequests)
    {
        $this->pixelMatchRequests = $pixelMatchRequests;
    }
    public function getPixelMatchRequests()
    {
        return $this->pixelMatchRequests;
    }
    public function setPixelMatchResponses($pixelMatchResponses)
    {
        $this->pixelMatchResponses = $pixelMatchResponses;
    }
    public function getPixelMatchResponses()
    {
        return $this->pixelMatchResponses;
    }
    public function setQuotaConfiguredLimit($quotaConfiguredLimit)
    {
        $this->quotaConfiguredLimit = $quotaConfiguredLimit;
    }
    public function getQuotaConfiguredLimit()
    {
        return $this->quotaConfiguredLimit;
    }
    public function setQuotaThrottledLimit($quotaThrottledLimit)
    {
        $this->quotaThrottledLimit = $quotaThrottledLimit;
    }
    public function getQuotaThrottledLimit()
    {
        return $this->quotaThrottledLimit;
    }
    public function setRegion($region)
    {
        $this->region = $region;
    }
    public function getRegion()
    {
        return $this->region;
    }
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }
    public function getTimestamp()
    {
        return $this->timestamp;
    }
}