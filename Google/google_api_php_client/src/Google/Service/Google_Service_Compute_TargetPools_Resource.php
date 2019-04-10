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
 * The "targetPools" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $targetPools = $computeService->targetPools;
 *  </code>
 */
class Google_Service_Compute_TargetPools_Resource extends Google_Service_Resource
{

    /**
     * Adds health check URL to targetPool. (targetPools.addHealthCheck)
     *
     * @param string $project
     * @param string $region Name of the region scoping this request.
     * @param string $targetPool Name of the TargetPool resource to which
     * health_check_url is to be added.
     * @param Google_TargetPoolsAddHealthCheckRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function addHealthCheck($project, $region, $targetPool, Google_Service_Compute_TargetPoolsAddHealthCheckRequest $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('addHealthCheck', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Adds instance url to targetPool. (targetPools.addInstance)
     *
     * @param string $project
     * @param string $region Name of the region scoping this request.
     * @param string $targetPool Name of the TargetPool resource to which
     * instance_url is to be added.
     * @param Google_TargetPoolsAddInstanceRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function addInstance($project, $region, $targetPool, Google_Service_Compute_TargetPoolsAddInstanceRequest $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('addInstance', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Retrieves the list of target pools grouped by scope.
     * (targetPools.aggregatedList)
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
     * @return Google_Service_Compute_TargetPoolAggregatedList
     */
    public function aggregatedList($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = array_merge($params, $optParams);
        return $this->call('aggregatedList', array($params), "Google_Service_Compute_TargetPoolAggregatedList");
    }

    /**
     * Deletes the specified TargetPool resource. (targetPools.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param string $targetPool Name of the TargetPool resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $region, $targetPool, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Returns the specified TargetPool resource. (targetPools.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param string $targetPool Name of the TargetPool resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_TargetPool
     */
    public function get($project, $region, $targetPool, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Compute_TargetPool");
    }

    /**
     * Gets the most recent health check results for each IP for the given instance
     * that is referenced by given TargetPool. (targetPools.getHealth)
     *
     * @param string $project
     * @param string $region Name of the region scoping this request.
     * @param string $targetPool Name of the TargetPool resource to which the
     * queried instance belongs.
     * @param Google_InstanceReference $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_TargetPoolInstanceHealth
     */
    public function getHealth($project, $region, $targetPool, Google_Service_Compute_InstanceReference $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('getHealth', array($params), "Google_Service_Compute_TargetPoolInstanceHealth");
    }

    /**
     * Creates a TargetPool resource in the specified project and region using the
     * data included in the request. (targetPools.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param Google_TargetPool $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, $region, Google_Service_Compute_TargetPool $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Retrieves the list of TargetPool resources available to the specified project
     * and region. (targetPools.listTargetPools)
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
     * @return Google_Service_Compute_TargetPoolList
     */
    public function listTargetPools($project, $region, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Compute_TargetPoolList");
    }

    /**
     * Removes health check URL from targetPool. (targetPools.removeHealthCheck)
     *
     * @param string $project
     * @param string $region Name of the region scoping this request.
     * @param string $targetPool Name of the TargetPool resource to which
     * health_check_url is to be removed.
     * @param Google_TargetPoolsRemoveHealthCheckRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function removeHealthCheck($project, $region, $targetPool, Google_Service_Compute_TargetPoolsRemoveHealthCheckRequest $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('removeHealthCheck', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Removes instance URL from targetPool. (targetPools.removeInstance)
     *
     * @param string $project
     * @param string $region Name of the region scoping this request.
     * @param string $targetPool Name of the TargetPool resource to which
     * instance_url is to be removed.
     * @param Google_TargetPoolsRemoveInstanceRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function removeInstance($project, $region, $targetPool, Google_Service_Compute_TargetPoolsRemoveInstanceRequest $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('removeInstance', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Changes backup pool configurations. (targetPools.setBackup)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param string $targetPool Name of the TargetPool resource for which the
     * backup is to be set.
     * @param Google_TargetReference $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param float failoverRatio New failoverRatio value for the containing
     * target pool.
     * @return Google_Service_Compute_Operation
     */
    public function setBackup($project, $region, $targetPool, Google_Service_Compute_TargetReference $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('setBackup', array($params), "Google_Service_Compute_Operation");
    }
}