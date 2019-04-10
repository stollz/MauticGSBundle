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
 * The "targetVpnGateways" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $targetVpnGateways = $computeService->targetVpnGateways;
 *  </code>
 */
class Google_Service_Compute_TargetVpnGateways_Resource extends Google_Service_Resource
{

    /**
     * Retrieves the list of target VPN gateways grouped by scope.
     * (targetVpnGateways.aggregatedList)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed
     * resources.
     * @opt_param string pageToken Optional. Tag returned by a previous list request
     * truncated by maxResults. Used to continue a previous list request.
     * @opt_param string maxResults Optional. Maximum count of results to be
     * returned. Maximum value is 500 and default value is 500.
     * @return Google_Service_Compute_TargetVpnGatewayAggregatedList
     */
    public function aggregatedList($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = array_merge($params, $optParams);
        return $this->call('aggregatedList', array($params), "Google_Service_Compute_TargetVpnGatewayAggregatedList");
    }

    /**
     * Deletes the specified TargetVpnGateway resource. (targetVpnGateways.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $region The name of the region for this request.
     * @param string $targetVpnGateway Name of the TargetVpnGateway resource to
     * delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $region, $targetVpnGateway, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'targetVpnGateway' => $targetVpnGateway);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Returns the specified TargetVpnGateway resource. (targetVpnGateways.get)
     *
     * @param string $project Project ID for this request.
     * @param string $region The name of the region for this request.
     * @param string $targetVpnGateway Name of the TargetVpnGateway resource to
     * return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_TargetVpnGateway
     */
    public function get($project, $region, $targetVpnGateway, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'targetVpnGateway' => $targetVpnGateway);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Compute_TargetVpnGateway");
    }

    /**
     * Creates a TargetVpnGateway resource in the specified project and region using
     * the data included in the request. (targetVpnGateways.insert)
     *
     * @param string $project Project ID for this request.
     * @param string $region The name of the region for this request.
     * @param Google_TargetVpnGateway $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, $region, Google_Service_Compute_TargetVpnGateway $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Retrieves the list of TargetVpnGateway resources available to the specified
     * project and region. (targetVpnGateways.listTargetVpnGateways)
     *
     * @param string $project Project ID for this request.
     * @param string $region The name of the region for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed
     * resources.
     * @opt_param string pageToken Optional. Tag returned by a previous list request
     * truncated by maxResults. Used to continue a previous list request.
     * @opt_param string maxResults Optional. Maximum count of results to be
     * returned. Maximum value is 500 and default value is 500.
     * @return Google_Service_Compute_TargetVpnGatewayList
     */
    public function listTargetVpnGateways($project, $region, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Compute_TargetVpnGatewayList");
    }
}
