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
 * The "forwardingRules" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $forwardingRules = $computeService->forwardingRules;
 *  </code>
 */
class Google_Service_Compute_ForwardingRules_Resource extends Google_Service_Resource
{

    /**
     * Retrieves the list of forwarding rules grouped by scope.
     * (forwardingRules.aggregatedList)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed
     * resources.
     * @opt_param string pageToken Optional. Tag returned by a previous list request
     * truncated by maxResults. Used to continue a previous list request.
     * @opt_param string maxResults Optional. Maximum count of results to be
     * returned. Maximum value is 500 and default value is 500.
     * @return Google_Service_Compute_ForwardingRuleAggregatedList
     */
    public function aggregatedList($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = array_merge($params, $optParams);
        return $this->call('aggregatedList', array($params), "Google_Service_Compute_ForwardingRuleAggregatedList");
    }

    /**
     * Deletes the specified ForwardingRule resource. (forwardingRules.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param string $forwardingRule Name of the ForwardingRule resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $region, $forwardingRule, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'forwardingRule' => $forwardingRule);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Returns the specified ForwardingRule resource. (forwardingRules.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param string $forwardingRule Name of the ForwardingRule resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_ForwardingRule
     */
    public function get($project, $region, $forwardingRule, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'forwardingRule' => $forwardingRule);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Compute_ForwardingRule");
    }

    /**
     * Creates a ForwardingRule resource in the specified project and region using
     * the data included in the request. (forwardingRules.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param Google_ForwardingRule $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, $region, Google_Service_Compute_ForwardingRule $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Retrieves the list of ForwardingRule resources available to the specified
     * project and region. (forwardingRules.listForwardingRules)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed
     * resources.
     * @opt_param string pageToken Optional. Tag returned by a previous list request
     * truncated by maxResults. Used to continue a previous list request.
     * @opt_param string maxResults Optional. Maximum count of results to be
     * returned. Maximum value is 500 and default value is 500.
     * @return Google_Service_Compute_ForwardingRuleList
     */
    public function listForwardingRules($project, $region, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Compute_ForwardingRuleList");
    }

    /**
     * Changes target url for forwarding rule. (forwardingRules.setTarget)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param string $forwardingRule Name of the ForwardingRule resource in which
     * target is to be set.
     * @param Google_TargetReference $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function setTarget($project, $region, $forwardingRule, Google_Service_Compute_TargetReference $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'forwardingRule' => $forwardingRule, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('setTarget', array($params), "Google_Service_Compute_Operation");
    }
}