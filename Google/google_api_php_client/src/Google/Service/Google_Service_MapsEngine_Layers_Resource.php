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
 * The "layers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new Google_Service_MapsEngine(...);
 *   $layers = $mapsengineService->layers;
 *  </code>
 */
class Google_Service_MapsEngine_Layers_Resource extends Google_Service_Resource
{

    /**
     * Cancel processing on a layer asset. (layers.cancelProcessing)
     *
     * @param string $id The ID of the layer.
     * @param array $optParams Optional parameters.
     * @return Google_Service_MapsEngine_ProcessResponse
     */
    public function cancelProcessing($id, $optParams = array())
    {
        $params = array('id' => $id);
        $params = array_merge($params, $optParams);
        return $this->call('cancelProcessing', array($params), "Google_Service_MapsEngine_ProcessResponse");
    }

    /**
     * Create a layer asset. (layers.create)
     *
     * @param Google_Layer $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool process Whether to queue the created layer for processing.
     * @return Google_Service_MapsEngine_Layer
     */
    public function create(Google_Service_MapsEngine_Layer $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('create', array($params), "Google_Service_MapsEngine_Layer");
    }

    /**
     * Delete a layer. (layers.delete)
     *
     * @param string $id The ID of the layer. Only the layer creator or project
     * owner are permitted to delete. If the layer is published, or included in a
     * map, the request will fail. Unpublish the layer, and remove it from all maps
     * prior to deleting.
     * @param array $optParams Optional parameters.
     */
    public function delete($id, $optParams = array())
    {
        $params = array('id' => $id);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Return metadata for a particular layer. (layers.get)
     *
     * @param string $id The ID of the layer.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string version Deprecated: The version parameter indicates which
     * version of the layer should be returned. When version is set to published,
     * the published version of the layer will be returned. Please use the
     * layers.getPublished endpoint instead.
     * @return Google_Service_MapsEngine_Layer
     */
    public function get($id, $optParams = array())
    {
        $params = array('id' => $id);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_MapsEngine_Layer");
    }

    /**
     * Return the published metadata for a particular layer. (layers.getPublished)
     *
     * @param string $id The ID of the layer.
     * @param array $optParams Optional parameters.
     * @return Google_Service_MapsEngine_PublishedLayer
     */
    public function getPublished($id, $optParams = array())
    {
        $params = array('id' => $id);
        $params = array_merge($params, $optParams);
        return $this->call('getPublished', array($params), "Google_Service_MapsEngine_PublishedLayer");
    }

    /**
     * Return all layers readable by the current user. (layers.listLayers)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string modifiedAfter An RFC 3339 formatted date-time value (e.g.
     * 1970-01-01T00:00:00Z). Returned assets will have been modified at or after
     * this time.
     * @opt_param string createdAfter An RFC 3339 formatted date-time value (e.g.
     * 1970-01-01T00:00:00Z). Returned assets will have been created at or after
     * this time.
     * @opt_param string processingStatus
     * @opt_param string projectId The ID of a Maps Engine project, used to filter
     * the response. To list all available projects with their IDs, send a Projects:
     * list request. You can also find your project ID as the value of the
     * DashboardPlace:cid URL parameter when signed in to mapsengine.google.com.
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
     * @return Google_Service_MapsEngine_LayersListResponse
     */
    public function listLayers($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_MapsEngine_LayersListResponse");
    }

    /**
     * Return all published layers readable by the current user.
     * (layers.listPublished)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken The continuation token, used to page through
     * large result sets. To get the next page of results, set this parameter to the
     * value of nextPageToken from the previous response.
     * @opt_param string maxResults The maximum number of items to include in a
     * single response page. The maximum supported value is 100.
     * @opt_param string projectId The ID of a Maps Engine project, used to filter
     * the response. To list all available projects with their IDs, send a Projects:
     * list request. You can also find your project ID as the value of the
     * DashboardPlace:cid URL parameter when signed in to mapsengine.google.com.
     * @return Google_Service_MapsEngine_PublishedLayersListResponse
     */
    public function listPublished($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('listPublished', array($params), "Google_Service_MapsEngine_PublishedLayersListResponse");
    }

    /**
     * Mutate a layer asset. (layers.patch)
     *
     * @param string $id The ID of the layer.
     * @param Google_Layer $postBody
     * @param array $optParams Optional parameters.
     */
    public function patch($id, Google_Service_MapsEngine_Layer $postBody, $optParams = array())
    {
        $params = array('id' => $id, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params));
    }

    /**
     * Process a layer asset. (layers.process)
     *
     * @param string $id The ID of the layer.
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
     * Publish a layer asset. (layers.publish)
     *
     * @param string $id The ID of the layer.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool force If set to true, the API will allow publication of the
     * layer even if it's out of date. If not true, you'll need to reprocess any
     * out-of-date layer before publishing.
     * @return Google_Service_MapsEngine_PublishResponse
     */
    public function publish($id, $optParams = array())
    {
        $params = array('id' => $id);
        $params = array_merge($params, $optParams);
        return $this->call('publish', array($params), "Google_Service_MapsEngine_PublishResponse");
    }

    /**
     * Unpublish a layer asset. (layers.unpublish)
     *
     * @param string $id The ID of the layer.
     * @param array $optParams Optional parameters.
     * @return Google_Service_MapsEngine_PublishResponse
     */
    public function unpublish($id, $optParams = array())
    {
        $params = array('id' => $id);
        $params = array_merge($params, $optParams);
        return $this->call('unpublish', array($params), "Google_Service_MapsEngine_PublishResponse");
    }
}