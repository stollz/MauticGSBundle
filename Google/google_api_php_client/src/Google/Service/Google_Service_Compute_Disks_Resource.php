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
 * The "disks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $disks = $computeService->disks;
 *  </code>
 */
class Google_Service_Compute_Disks_Resource extends Google_Service_Resource
{

    /**
     * Retrieves the list of disks grouped by scope. (disks.aggregatedList)
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
     * @return Google_Service_Compute_DiskAggregatedList
     */
    public function aggregatedList($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = array_merge($params, $optParams);
        return $this->call('aggregatedList', array($params), "Google_Service_Compute_DiskAggregatedList");
    }

    /**
     * Creates a snapshot of this disk. (disks.createSnapshot)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $disk Name of the persistent disk to snapshot.
     * @param Google_Snapshot $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function createSnapshot($project, $zone, $disk, Google_Service_Compute_Snapshot $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'disk' => $disk, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('createSnapshot', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Deletes the specified persistent disk. (disks.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $disk Name of the persistent disk to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $zone, $disk, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'disk' => $disk);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Returns a specified persistent disk. (disks.get)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $disk Name of the persistent disk to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Disk
     */
    public function get($project, $zone, $disk, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'disk' => $disk);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Compute_Disk");
    }

    /**
     * Creates a persistent disk in the specified project using the data included in
     * the request. (disks.insert)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param Google_Disk $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string sourceImage Optional. Source image to restore onto a disk.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, $zone, Google_Service_Compute_Disk $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Retrieves the list of persistent disks contained within the specified zone.
     * (disks.listDisks)
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
     * @return Google_Service_Compute_DiskList
     */
    public function listDisks($project, $zone, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Compute_DiskList");
    }
}