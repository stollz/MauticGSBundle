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
 * The "rasters" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new Google_Service_MapsEngine(...);
 *   $rasters = $mapsengineService->rasters;
 *  </code>
 */
class Google_Service_MapsEngine_Rasters_Resource extends Google_Service_Resource
{

    /**
     * Delete a raster. (rasters.delete)
     *
     * @param string $id The ID of the raster. Only the raster creator or project
     * owner are permitted to delete. If the raster is included in a layer or
     * mosaic, the request will fail. Remove it from all parents prior to deleting.
     * @param array $optParams Optional parameters.
     */
    public function delete($id, $optParams = array())
    {
        $params = array('id' => $id);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Return metadata for a single raster. (rasters.get)
     *
     * @param string $id The ID of the raster.
     * @param array $optParams Optional parameters.
     * @return Google_Service_MapsEngine_Raster
     */
    public function get($id, $optParams = array())
    {
        $params = array('id' => $id);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_MapsEngine_Raster");
    }

    /**
     * Return all rasters readable by the current user. (rasters.listRasters)
     *
     * @param string $projectId The ID of a Maps Engine project, used to filter the
     * response. To list all available projects with their IDs, send a Projects:
     * list request. You can also find your project ID as the value of the
     * DashboardPlace:cid URL parameter when signed in to mapsengine.google.com.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string modifiedAfter An RFC 3339 formatted date-time value (e.g.
     * 1970-01-01T00:00:00Z). Returned assets will have been modified at or after
     * this time.
     * @opt_param string createdAfter An RFC 3339 formatted date-time value (e.g.
     * 1970-01-01T00:00:00Z). Returned assets will have been created at or after
     * this time.
     * @opt_param string processingStatus
     * @opt_param string tags A comma separated list of tags. Returned assets will
     * contain all the tags from the list.
     * @opt_param string search An unstructured search string used to filter the set
     * of results based on asset metadata.
     * @opt_param string maxResults The maximum number of items to include in a
     * single response page. The maximum supported value is 100.
     * @opt_param string pageToken The continuation token, used to page through
     * large result sets. To get the next page of results, set this parameter to the
     * value of nextPageToken from the previous response.
     * @opt_param string creatorEmail An email address representing a user. Returned
     * assets that have been created by the user associated with the provided email
     * address.
     * @opt_param string bbox A bounding box, expressed as "west,south,east,north".
     * If set, only assets which intersect this bounding box will be returned.
     * @opt_param string modifiedBefore An RFC 3339 formatted date-time value (e.g.
     * 1970-01-01T00:00:00Z). Returned assets will have been modified at or before
     * this time.
     * @opt_param string createdBefore An RFC 3339 formatted date-time value (e.g.
     * 1970-01-01T00:00:00Z). Returned assets will have been created at or before
     * this time.
     * @opt_param string role The role parameter indicates that the response should
     * only contain assets where the current user has the specified level of access.
     * @return Google_Service_MapsEngine_RastersListResponse
     */
    public function listRasters($projectId, $optParams = array())
    {
        $params = array('projectId' => $projectId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_MapsEngine_RastersListResponse");
    }

    /**
     * Mutate a raster asset. (rasters.patch)
     *
     * @param string $id The ID of the raster.
     * @param Google_Raster $postBody
     * @param array $optParams Optional parameters.
     */
    public function patch($id, Google_Service_MapsEngine_Raster $postBody, $optParams = array())
    {
        $params = array('id' => $id, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params));
    }

    /**
     * Process a raster asset. (rasters.process)
     *
     * @param string $id The ID of the raster.
     * @param array $optParams Optional parameters.
     * @return Google_Service_MapsEngine_ProcessResponse
     */
    public function process($id, $optParams = array())
    {
        $params = array('id' => $id);
        $params = array_merge($params, $optParams);
        return $this->call('process', array($params), "Google_Service_MapsEngine_ProcessResponse");
    }

    /**
     * Create a skeleton raster asset for upload. (rasters.upload)
     *
     * @param Google_Raster $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_MapsEngine_Raster
     */
    public function upload(Google_Service_MapsEngine_Raster $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('upload', array($params), "Google_Service_MapsEngine_Raster");
    }
}
