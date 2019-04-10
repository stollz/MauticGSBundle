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
 * The "targetHttpProxies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $targetHttpProxies = $computeService->targetHttpProxies;
 *  </code>
 */
class Google_Service_Compute_TargetHttpProxies_Resource extends Google_Service_Resource
{

    /**
     * Deletes the specified TargetHttpProxy resource. (targetHttpProxies.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $targetHttpProxy Name of the TargetHttpProxy resource to
     * delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $targetHttpProxy, $optParams = array())
    {
        $params = array('project' => $project, 'targetHttpProxy' => $targetHttpProxy);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Returns the specified TargetHttpProxy resource. (targetHttpProxies.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $targetHttpProxy Name of the TargetHttpProxy resource to
     * return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_TargetHttpProxy
     */
    public function get($project, $targetHttpProxy, $optParams = array())
    {
        $params = array('project' => $project, 'targetHttpProxy' => $targetHttpProxy);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Compute_TargetHttpProxy");
    }

    /**
     * Creates a TargetHttpProxy resource in the specified project using the data
     * included in the request. (targetHttpProxies.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param Google_TargetHttpProxy $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, Google_Service_Compute_TargetHttpProxy $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Retrieves the list of TargetHttpProxy resources available to the specified
     * project. (targetHttpProxies.listTargetHttpProxies)
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
     * @return Google_Service_Compute_TargetHttpProxyList
     */
    public function listTargetHttpProxies($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Compute_TargetHttpProxyList");
    }

    /**
     * Changes the URL map for TargetHttpProxy. (targetHttpProxies.setUrlMap)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $targetHttpProxy Name of the TargetHttpProxy resource whose URL
     * map is to be set.
     * @param Google_UrlMapReference $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function setUrlMap($project, $targetHttpProxy, Google_Service_Compute_UrlMapReference $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'targetHttpProxy' => $targetHttpProxy, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('setUrlMap', array($params), "Google_Service_Compute_Operation");
    }
}