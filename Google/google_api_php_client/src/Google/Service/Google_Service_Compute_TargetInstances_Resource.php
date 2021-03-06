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
 * The "targetInstances" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $targetInstances = $computeService->targetInstances;
 *  </code>
 */
class Google_Service_Compute_TargetInstances_Resource extends Google_Service_Resource
{

    /**
     * Retrieves the list of target instances grouped by scope.
     * (targetInstances.aggregatedList)
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
     * @return Google_Service_Compute_TargetInstanceAggregatedList
     */
    public function aggregatedList($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = array_merge($params, $optParams);
        return $this->call('aggregatedList', array($params), "Google_Service_Compute_TargetInstanceAggregatedList");
    }

    /**
     * Deletes the specified TargetInstance resource. (targetInstances.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $targetInstance Name of the TargetInstance resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $zone, $targetInstance, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'targetInstance' => $targetInstance);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Returns the specified TargetInstance resource. (targetInstances.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $targetInstance Name of the TargetInstance resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_TargetInstance
     */
    public function get($project, $zone, $targetInstance, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'targetInstance' => $targetInstance);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Compute_TargetInstance");
    }

    /**
     * Creates a TargetInstance resource in the specified project and zone using the
     * data included in the request. (targetInstances.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param Google_TargetInstance $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, $zone, Google_Service_Compute_TargetInstance $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Retrieves the list of TargetInstance resources available to the specified
     * project and zone. (targetInstances.listTargetInstances)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed
     * resources.
     * @opt_param string pageToken Optional. Tag returned by a previous list request
     * truncated by maxResults. Used to continue a previous list request.
     * @opt_param string maxResults Optional. Maximum count of results to be
     * returned. Maximum value is 500 and default value is 500.
     * @return Google_Service_Compute_TargetInstanceList
     */
    public function listTargetInstances($project, $zone, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Compute_TargetInstanceList");
    }
}
