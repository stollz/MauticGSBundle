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
 * The "mail" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_Service_Admin(...);
 *   $mail = $adminService->mail;
 *  </code>
 */
class Google_Service_Admin_Mail_Resource extends Google_Service_Resource
{

    /**
     * Insert Mail into Google's Gmail backends (mail.insert)
     *
     * @param string $userKey The email or immutable id of the user
     * @param Google_MailItem $postBody
     * @param array $optParams Optional parameters.
     */
    public function insert($userKey, Google_Service_Admin_MailItem $postBody, $optParams = array())
    {
        $params = array('userKey' => $userKey, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params));
    }
}