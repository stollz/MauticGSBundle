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
 * The "backendServices" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $backendServices = $computeService->backendServices;
 *  </code>
 */
class Google_Service_Compute_BackendServices_Resource extends Google_Service_Resource
{

    /**
     * Deletes the specified BackendService resource. (backendServices.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $backendService Name of the BackendService resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $backendService, $optParams = array())
    {
        $params = array('project' => $project, 'backendService' => $backendService);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Returns the specified BackendService resource. (backendServices.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $backendService Name of the BackendService resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_BackendService
     */
    public function get($project, $backendService, $optParams = array())
    {
        $params = array('project' => $project, 'backendService' => $backendService);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Compute_BackendService");
    }

    /**
     * Gets the most recent health check results for this BackendService.
     * (backendServices.getHealth)
     *
     * @param string $project
     * @param string $backendService Name of the BackendService resource to which
     * the queried instance belongs.
     * @param Google_ResourceGroupReference $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_BackendServiceGroupHealth
     */
    public function getHealth($project, $backendService, Google_Service_Compute_ResourceGroupReference $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'backendService' => $backendService, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('getHealth', array($params), "Google_Service_Compute_BackendServiceGroupHealth");
    }

    /**
     * Creates a BackendService resource in the specified project using the data
     * included in the request. (backendServices.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param Google_BackendService $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, Google_Service_Compute_BackendService $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Retrieves the list of BackendService resources available to the specified
     * project. (backendServices.listBackendServices)
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
     * @return Google_Service_Compute_BackendServiceList
     */
    public function listBackendServices($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Compute_BackendServiceList");
    }

    /**
     * Update the entire content of the BackendService resource. This method
     * supports patch semantics. (backendServices.patch)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $backendService Name of the BackendService resource to update.
     * @param Google_BackendService $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function patch($project, $backendService, Google_Service_Compute_BackendService $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'backendService' => $backendService, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Update the entire content of the BackendService resource.
     * (backendServices.update)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $backendService Name of the BackendService resource to update.
     * @param Google_BackendService $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function update($project, $backendService, Google_Service_Compute_BackendService $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'backendService' => $backendService, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Compute_Operation");
    }
}