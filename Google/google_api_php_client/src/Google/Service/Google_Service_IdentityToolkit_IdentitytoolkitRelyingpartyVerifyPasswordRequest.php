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

class Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyVerifyPasswordRequest extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $captchaChallenge;
    public $captchaResponse;
    public $email;
    public $password;
    public $pendingIdToken;


    public function setCaptchaChallenge($captchaChallenge)
    {
        $this->captchaChallenge = $captchaChallenge;
    }
    public function getCaptchaChallenge()
    {
        return $this->captchaChallenge;
    }
    public function setCaptchaResponse($captchaResponse)
    {
        $this->captchaResponse = $captchaResponse;
    }
    public function getCaptchaResponse()
    {
        return $this->captchaResponse;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPendingIdToken($pendingIdToken)
    {
        $this->pendingIdToken = $pendingIdToken;
    }
    public function getPendingIdToken()
    {
        return $this->pendingIdToken;
    }
}
