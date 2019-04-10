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
 * The "rules" collection of methods.
 * Typical usage is:
 *  <code>
 *   $tagmanagerService = new Google_Service_TagManager(...);
 *   $rules = $tagmanagerService->rules;
 *  </code>
 */
class Google_Service_TagManager_AccountsContainersRules_Resource extends Google_Service_Resource
{

    /**
     * Creates a GTM Rule. (rules.create)
     *
     * @param string $accountId The GTM Account ID.
     * @param string $containerId The GTM Container ID.
     * @param Google_Rule $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_TagManager_Rule
     */
    public function create($accountId, $containerId, Google_Service_TagManager_Rule $postBody, $optParams = array())
    {
        $params = array('accountId' => $accountId, 'containerId' => $containerId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('create', array($params), "Google_Service_TagManager_Rule");
    }

    /**
     * Deletes a GTM Rule. (rules.delete)
     *
     * @param string $accountId The GTM Account ID.
     * @param string $containerId The GTM Container ID.
     * @param string $ruleId The GTM Rule ID.
     * @param array $optParams Optional parameters.
     */
    public function delete($accountId, $containerId, $ruleId, $optParams = array())
    {
        $params = array('accountId' => $accountId, 'containerId' => $containerId, 'ruleId' => $ruleId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Gets a GTM Rule. (rules.get)
     *
     * @param string $accountId The GTM Account ID.
     * @param string $containerId The GTM Container ID.
     * @param string $ruleId The GTM Rule ID.
     * @param array $optParams Optional parameters.
     * @return Google_Service_TagManager_Rule
     */
    public function get($accountId, $containerId, $ruleId, $optParams = array())
    {
        $params = array('accountId' => $accountId, 'containerId' => $containerId, 'ruleId' => $ruleId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_TagManager_Rule");
    }

    /**
     * Lists all GTM Rules of a Container. (rules.listAccountsContainersRules)
     *
     * @param string $accountId The GTM Account ID.
     * @param string $containerId The GTM Container ID.
     * @param array $optParams Optional parameters.
     * @return Google_Service_TagManager_ListRulesResponse
     */
    public function listAccountsContainersRules($accountId, $containerId, $optParams = array())
    {
        $params = array('accountId' => $accountId, 'containerId' => $containerId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_TagManager_ListRulesResponse");
    }

    /**
     * Updates a GTM Rule. (rules.update)
     *
     * @param string $accountId The GTM Account ID.
     * @param string $containerId The GTM Container ID.
     * @param string $ruleId The GTM Rule ID.
     * @param Google_Rule $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string fingerprint When provided, this fingerprint must match the
     * fingerprint of the rule in storage.
     * @return Google_Service_TagManager_Rule
     */
    public function update($accountId, $containerId, $ruleId, Google_Service_TagManager_Rule $postBody, $optParams = array())
    {
        $params = array('accountId' => $accountId, 'containerId' => $containerId, 'ruleId' => $ruleId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_TagManager_Rule");
    }
}