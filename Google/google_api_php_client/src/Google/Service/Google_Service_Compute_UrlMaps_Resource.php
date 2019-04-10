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
 * The "urlMaps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $urlMaps = $computeService->urlMaps;
 *  </code>
 */
class Google_Service_Compute_UrlMaps_Resource extends Google_Service_Resource
{

    /**
     * Deletes the specified UrlMap resource. (urlMaps.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $urlMap Name of the UrlMap resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $urlMap, $optParams = array())
    {
        $params = array('project' => $project, 'urlMap' => $urlMap);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Returns the specified UrlMap resource. (urlMaps.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $urlMap Name of the UrlMap resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_UrlMap
     */
    public function get($project, $urlMap, $optParams = array())
    {
        $params = array('project' => $project, 'urlMap' => $urlMap);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Compute_UrlMap");
    }

    /**
     * Creates a UrlMap resource in the specified project using the data included in
     * the request. (urlMaps.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param Google_UrlMap $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, Google_Service_Compute_UrlMap $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Retrieves the list of UrlMap resources available to the specified project.
     * (urlMaps.listUrlMaps)
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
     * @return Google_Service_Compute_UrlMapList
     */
    public function listUrlMaps($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Compute_UrlMapList");
    }

    /**
     * Update the entire content of the UrlMap resource. This method supports patch
     * semantics. (urlMaps.patch)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $urlMap Name of the UrlMap resource to update.
     * @param Google_UrlMap $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function patch($project, $urlMap, Google_Service_Compute_UrlMap $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'urlMap' => $urlMap, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Update the entire content of the UrlMap resource. (urlMaps.update)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $urlMap Name of the UrlMap resource to update.
     * @param Google_UrlMap $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function update($project, $urlMap, Google_Service_Compute_UrlMap $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'urlMap' => $urlMap, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Run static validation for the UrlMap. In particular, the tests of the
     * provided UrlMap will be run. Calling this method does NOT create the UrlMap.
     * (urlMaps.validate)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $urlMap Name of the UrlMap resource to be validated as.
     * @param Google_UrlMapsValidateRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_UrlMapsValidateResponse
     */
    public function validate($project, $urlMap, Google_Service_Compute_UrlMapsValidateRequest $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'urlMap' => $urlMap, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('validate', array($params), "Google_Service_Compute_UrlMapsValidateResponse");
    }
}