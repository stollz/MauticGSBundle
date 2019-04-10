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
class Google_Service_MapsEngine_RasterCollectionsRasters_Resource extends Google_Service_Resource
{

    /**
     * Remove rasters from an existing raster collection.
     *
     * Up to 50 rasters can be included in a single batchDelete request. Each
     * batchDelete request is atomic. (rasters.batchDelete)
     *
     * @param string $id The ID of the raster collection to which these rasters
     * belong.
     * @param Google_RasterCollectionsRasterBatchDeleteRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_MapsEngine_RasterCollectionsRastersBatchDeleteResponse
     */
    public function batchDelete($id, Google_Service_MapsEngine_RasterCollectionsRasterBatchDeleteRequest $postBody, $optParams = array())
    {
        $params = array('id' => $id, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('batchDelete', array($params), "Google_Service_MapsEngine_RasterCollectionsRastersBatchDeleteResponse");
    }

    /**
     * Add rasters to an existing raster collection. Rasters must be successfully
     * processed in order to be added to a raster collection.
     *
     * Up to 50 rasters can be included in a single batchInsert request. Each
     * batchInsert request is atomic. (rasters.batchInsert)
     *
     * @param string $id The ID of the raster collection to which these rasters
     * belong.
     * @param Google_RasterCollectionsRastersBatchInsertRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_MapsEngine_RasterCollectionsRastersBatchInsertResponse
     */
    public function batchInsert($id, Google_Service_MapsEngine_RasterCollectionsRastersBatchInsertRequest $postBody, $optParams = array())
    {
        $params = array('id' => $id, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('batchInsert', array($params), "Google_Service_MapsEngine_RasterCollectionsRastersBatchInsertResponse");
    }

    /**
     * Return all rasters within a raster collection.
     * (rasters.listRasterCollectionsRasters)
     *
     * @param string $id The ID of the raster collection to which these rasters
     * belong.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string modifiedAfter An RFC 3339 formatted date-time value (e.g.
     * 1970-01-01T00:00:00Z). Returned assets will have been modified at or after
     * this time.
     * @opt_param string createdAfter An RFC 3339 formatted date-time value (e.g.
     * 1970-01-01T00:00:00Z). Returned assets will have been created at or after
     * this time.
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
     * @return Google_Service_MapsEngine_RasterCollectionsRastersListResponse
     */
    public function listRasterCollectionsRasters($id, $optParams = array())
    {
        $params = array('id' => $id);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_MapsEngine_RasterCollectionsRastersListResponse");
    }
}