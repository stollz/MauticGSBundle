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
 * The "macros" collection of methods.
 * Typical usage is:
 *  <code>
 *   $tagmanagerService = new Google_Service_TagManager(...);
 *   $macros = $tagmanagerService->macros;
 *  </code>
 */
class Google_Service_TagManager_AccountsContainersMacros_Resource extends Google_Service_Resource
{

    /**
     * Creates a GTM Macro. (macros.create)
     *
     * @param string $accountId The GTM Account ID.
     * @param string $containerId The GTM Container ID.
     * @param Google_Macro $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_TagManager_Macro
     */
    public function create($accountId, $containerId, Google_Service_TagManager_Macro $postBody, $optParams = array())
    {
        $params = array('accountId' => $accountId, 'containerId' => $containerId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('create', array($params), "Google_Service_TagManager_Macro");
    }

    /**
     * Deletes a GTM Macro. (macros.delete)
     *
     * @param string $accountId The GTM Account ID.
     * @param string $containerId The GTM Container ID.
     * @param string $macroId The GTM Macro ID.
     * @param array $optParams Optional parameters.
     */
    public function delete($accountId, $containerId, $macroId, $optParams = array())
    {
        $params = array('accountId' => $accountId, 'containerId' => $containerId, 'macroId' => $macroId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Gets a GTM Macro. (macros.get)
     *
     * @param string $accountId The GTM Account ID.
     * @param string $containerId The GTM Container ID.
     * @param string $macroId The GTM Macro ID.
     * @param array $optParams Optional parameters.
     * @return Google_Service_TagManager_Macro
     */
    public function get($accountId, $containerId, $macroId, $optParams = array())
    {
        $params = array('accountId' => $accountId, 'containerId' => $containerId, 'macroId' => $macroId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_TagManager_Macro");
    }

    /**
     * Lists all GTM Macros of a Container. (macros.listAccountsContainersMacros)
     *
     * @param string $accountId The GTM Account ID.
     * @param string $containerId The GTM Container ID.
     * @param array $optParams Optional parameters.
     * @return Google_Service_TagManager_ListMacrosResponse
     */
    public function listAccountsContainersMacros($accountId, $containerId, $optParams = array())
    {
        $params = array('accountId' => $accountId, 'containerId' => $containerId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_TagManager_ListMacrosResponse");
    }

    /**
     * Updates a GTM Macro. (macros.update)
     *
     * @param string $accountId The GTM Account ID.
     * @param string $containerId The GTM Container ID.
     * @param string $macroId The GTM Macro ID.
     * @param Google_Macro $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string fingerprint When provided, this fingerprint must match the
     * fingerprint of the macro in storage.
     * @return Google_Service_TagManager_Macro
     */
    public function update($accountId, $containerId, $macroId, Google_Service_TagManager_Macro $postBody, $optParams = array())
    {
        $params = array('accountId' => $accountId, 'containerId' => $containerId, 'macroId' => $macroId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_TagManager_Macro");
    }
}