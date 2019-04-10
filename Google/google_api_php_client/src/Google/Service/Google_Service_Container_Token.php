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


class Google_Service_Container_Token extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $accessToken;
    public $expiryTimeSeconds;


    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
    }
    public function getAccessToken()
    {
        return $this->accessToken;
    }
    public function setExpiryTimeSeconds($expiryTimeSeconds)
    {
        $this->expiryTimeSeconds = $expiryTimeSeconds;
    }
    public function getExpiryTimeSeconds()
    {
        return $this->expiryTimeSeconds;
    }
}
