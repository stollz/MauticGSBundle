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


/**
 * The "relyingparty" collection of methods.
 * Typical usage is:
 *  <code>
 *   $identitytoolkitService = new Google_Service_IdentityToolkit(...);
 *   $relyingparty = $identitytoolkitService->relyingparty;
 *  </code>
 */
class Google_Service_IdentityToolkit_Relyingparty_Resource extends Google_Service_Resource
{

    /**
     * Creates the URI used by the IdP to authenticate the user.
     * (relyingparty.createAuthUri)
     *
     * @param Google_IdentitytoolkitRelyingpartyCreateAuthUriRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_IdentityToolkit_CreateAuthUriResponse
     */
    public function createAuthUri(Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyCreateAuthUriRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('createAuthUri', array($params), "Google_Service_IdentityToolkit_CreateAuthUriResponse");
    }

    /**
     * Delete user account. (relyingparty.deleteAccount)
     *
     * @param Google_IdentitytoolkitRelyingpartyDeleteAccountRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_IdentityToolkit_DeleteAccountResponse
     */
    public function deleteAccount(Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyDeleteAccountRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('deleteAccount', array($params), "Google_Service_IdentityToolkit_DeleteAccountResponse");
    }

    /**
     * Batch download user accounts. (relyingparty.downloadAccount)
     *
     * @param Google_IdentitytoolkitRelyingpartyDownloadAccountRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_IdentityToolkit_DownloadAccountResponse
     */
    public function downloadAccount(Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyDownloadAccountRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('downloadAccount', array($params), "Google_Service_IdentityToolkit_DownloadAccountResponse");
    }

    /**
     * Returns the account info. (relyingparty.getAccountInfo)
     *
     * @param Google_IdentitytoolkitRelyingpartyGetAccountInfoRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_IdentityToolkit_GetAccountInfoResponse
     */
    public function getAccountInfo(Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyGetAccountInfoRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('getAccountInfo', array($params), "Google_Service_IdentityToolkit_GetAccountInfoResponse");
    }

    /**
     * Get a code for user action confirmation.
     * (relyingparty.getOobConfirmationCode)
     *
     * @param Google_Relyingparty $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_IdentityToolkit_GetOobConfirmationCodeResponse
     */
    public function getOobConfirmationCode(Google_Service_IdentityToolkit_Relyingparty $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('getOobConfirmationCode', array($params), "Google_Service_IdentityToolkit_GetOobConfirmationCodeResponse");
    }

    /**
     * Get token signing public key. (relyingparty.getPublicKeys)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyGetPublicKeysResponse
     */
    public function getPublicKeys($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('getPublicKeys', array($params), "Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyGetPublicKeysResponse");
    }

    /**
     * Get recaptcha secure param. (relyingparty.getRecaptchaParam)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Service_IdentityToolkit_GetRecaptchaParamResponse
     */
    public function getRecaptchaParam($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('getRecaptchaParam', array($params), "Google_Service_IdentityToolkit_GetRecaptchaParamResponse");
    }

    /**
     * Reset password for a user. (relyingparty.resetPassword)
     *
     * @param Google_IdentitytoolkitRelyingpartyResetPasswordRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_IdentityToolkit_ResetPasswordResponse
     */
    public function resetPassword(Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyResetPasswordRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('resetPassword', array($params), "Google_Service_IdentityToolkit_ResetPasswordResponse");
    }

    /**
     * Set account info for a user. (relyingparty.setAccountInfo)
     *
     * @param Google_IdentitytoolkitRelyingpartySetAccountInfoRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_IdentityToolkit_SetAccountInfoResponse
     */
    public function setAccountInfo(Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartySetAccountInfoRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('setAccountInfo', array($params), "Google_Service_IdentityToolkit_SetAccountInfoResponse");
    }

    /**
     * Batch upload existing user accounts. (relyingparty.uploadAccount)
     *
     * @param Google_IdentitytoolkitRelyingpartyUploadAccountRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_IdentityToolkit_UploadAccountResponse
     */
    public function uploadAccount(Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyUploadAccountRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('uploadAccount', array($params), "Google_Service_IdentityToolkit_UploadAccountResponse");
    }

    /**
     * Verifies the assertion returned by the IdP. (relyingparty.verifyAssertion)
     *
     * @param Google_IdentitytoolkitRelyingpartyVerifyAssertionRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_IdentityToolkit_VerifyAssertionResponse
     */
    public function verifyAssertion(Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyVerifyAssertionRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('verifyAssertion', array($params), "Google_Service_IdentityToolkit_VerifyAssertionResponse");
    }

    /**
     * Verifies the user entered password. (relyingparty.verifyPassword)
     *
     * @param Google_IdentitytoolkitRelyingpartyVerifyPasswordRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_IdentityToolkit_VerifyPasswordResponse
     */
    public function verifyPassword(Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyVerifyPasswordRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('verifyPassword', array($params), "Google_Service_IdentityToolkit_VerifyPasswordResponse");
    }
}


