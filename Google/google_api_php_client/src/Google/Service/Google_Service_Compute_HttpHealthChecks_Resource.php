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
 * The "httpHealthChecks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $httpHealthChecks = $computeService->httpHealthChecks;
 *  </code>
 */
class Google_Service_Compute_HttpHealthChecks_Resource extends Google_Service_Resource
{

    /**
     * Deletes the specified HttpHealthCheck resource. (httpHealthChecks.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $httpHealthCheck Name of the HttpHealthCheck resource to
     * delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $httpHealthCheck, $optParams = array())
    {
        $params = array('project' => $project, 'httpHealthCheck' => $httpHealthCheck);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Returns the specified HttpHealthCheck resource. (httpHealthChecks.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $httpHealthCheck Name of the HttpHealthCheck resource to
     * return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_HttpHealthCheck
     */
    public function get($project, $httpHealthCheck, $optParams = array())
    {
        $params = array('project' => $project, 'httpHealthCheck' => $httpHealthCheck);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Compute_HttpHealthCheck");
    }

    /**
     * Creates a HttpHealthCheck resource in the specified project using the data
     * included in the request. (httpHealthChecks.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param Google_HttpHealthCheck $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, Google_Service_Compute_HttpHealthCheck $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Retrieves the list of HttpHealthCheck resources available to the specified
     * project. (httpHealthChecks.listHttpHealthChecks)
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
     * @return Google_Service_Compute_HttpHealthCheckList
     */
    public function listHttpHealthChecks($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Compute_HttpHealthCheckList");
    }

    /**
     * Updates a HttpHealthCheck resource in the specified project using the data
     * included in the request. This method supports patch semantics.
     * (httpHealthChecks.patch)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $httpHealthCheck Name of the HttpHealthCheck resource to
     * update.
     * @param Google_HttpHealthCheck $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function patch($project, $httpHealthCheck, Google_Service_Compute_HttpHealthCheck $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'httpHealthCheck' => $httpHealthCheck, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Updates a HttpHealthCheck resource in the specified project using the data
     * included in the request. (httpHealthChecks.update)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $httpHealthCheck Name of the HttpHealthCheck resource to
     * update.
     * @param Google_HttpHealthCheck $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function update($project, $httpHealthCheck, Google_Service_Compute_HttpHealthCheck $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'httpHealthCheck' => $httpHealthCheck, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Compute_Operation");
    }
}