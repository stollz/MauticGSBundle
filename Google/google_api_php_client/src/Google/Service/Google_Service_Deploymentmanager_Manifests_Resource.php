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
 * The "manifests" collection of methods.
 * Typical usage is:
 *  <code>
 *   $deploymentmanagerService = new Google_Service_Deploymentmanager(...);
 *   $manifests = $deploymentmanagerService->manifests;
 *  </code>
 */
class Google_Service_Deploymentmanager_Manifests_Resource extends Google_Service_Resource
{

    /**
     * ! Gets information about a specific manifest. (manifests.get)
     *
     * @param string $project ! The project ID for this request.
     * @param string $deployment ! The name of the deployment for this request.
     * @param string $manifest ! The name of the manifest for this request.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Deploymentmanager_Manifest
     */
    public function get($project, $deployment, $manifest, $optParams = array())
    {
        $params = array('project' => $project, 'deployment' => $deployment, 'manifest' => $manifest);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Deploymentmanager_Manifest");
    }

    /**
     * ! Lists all manifests for a given deployment. (manifests.listManifests)
     *
     * @param string $project ! The project ID for this request.
     * @param string $deployment ! The name of the deployment for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken ! Specifies a nextPageToken returned by a
     * previous list request. This ! token can be used to request the next page of
     * results from a previous ! list request.
     * @opt_param int maxResults ! Maximum count of results to be returned. !
     * Acceptable values are 0 to 100, inclusive. (Default: 50)
     * @return Google_Service_Deploymentmanager_ManifestsListResponse
     */
    public function listManifests($project, $deployment, $optParams = array())
    {
        $params = array('project' => $project, 'deployment' => $deployment);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Deploymentmanager_ManifestsListResponse");
    }
}