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
 * The "diskTypes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $diskTypes = $computeService->diskTypes;
 *  </code>
 */
class Google_Service_Compute_DiskTypes_Resource extends Google_Service_Resource
{

    /**
     * Retrieves the list of disk type resources grouped by scope.
     * (diskTypes.aggregatedList)
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
     * @return Google_Service_Compute_DiskTypeAggregatedList
     */
    public function aggregatedList($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = array_merge($params, $optParams);
        return $this->call('aggregatedList', array($params), "Google_Service_Compute_DiskTypeAggregatedList");
    }

    /**
     * Returns the specified disk type resource. (diskTypes.get)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $diskType Name of the disk type resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_DiskType
     */
    public function get($project, $zone, $diskType, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'diskType' => $diskType);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Compute_DiskType");
    }

    /**
     * Retrieves the list of disk type resources available to the specified project.
     * (diskTypes.listDiskTypes)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed
     * resources.
     * @opt_param string pageToken Optional. Tag returned by a previous list request
     * truncated by maxResults. Used to continue a previous list request.
     * @opt_param string maxResults Optional. Maximum count of results to be
     * returned. Maximum value is 500 and default value is 500.
     * @return Google_Service_Compute_DiskTypeList
     */
    public function listDiskTypes($project, $zone, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Compute_DiskTypeList");
    }
}