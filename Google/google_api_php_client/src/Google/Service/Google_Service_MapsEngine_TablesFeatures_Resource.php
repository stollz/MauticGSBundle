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
 * The "features" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new Google_Service_MapsEngine(...);
 *   $features = $mapsengineService->features;
 *  </code>
 */
class Google_Service_MapsEngine_TablesFeatures_Resource extends Google_Service_Resource
{

    /**
     * Delete all features matching the given IDs. (features.batchDelete)
     *
     * @param string $id The ID of the table that contains the features to be
     * deleted.
     * @param Google_FeaturesBatchDeleteRequest $postBody
     * @param array $optParams Optional parameters.
     */
    public function batchDelete($id, Google_Service_MapsEngine_FeaturesBatchDeleteRequest $postBody, $optParams = array())
    {
        $params = array('id' => $id, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('batchDelete', array($params));
    }

    /**
     * Append features to an existing table.
     *
     * A single batchInsert request can create:
     *
     * - Up to 50 features. - A combined total of 10 000 vertices. Feature limits
     * are documented in the Supported data formats and limits article of the Google
     * Maps Engine help center. Note that free and paid accounts have different
     * limits.
     *
     * For more information about inserting features, read Creating features in the
     * Google Maps Engine developer's guide. (features.batchInsert)
     *
     * @param string $id The ID of the table to append the features to.
     * @param Google_FeaturesBatchInsertRequest $postBody
     * @param array $optParams Optional parameters.
     */
    public function batchInsert($id, Google_Service_MapsEngine_FeaturesBatchInsertRequest $postBody, $optParams = array())
    {
        $params = array('id' => $id, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('batchInsert', array($params));
    }

    /**
     * Update the supplied features.
     *
     * A single batchPatch request can update:
     *
     * - Up to 50 features. - A combined total of 10 000 vertices. Feature limits
     * are documented in the Supported data formats and limits article of the Google
     * Maps Engine help center. Note that free and paid accounts have different
     * limits.
     *
     * Feature updates use HTTP PATCH semantics:
     *
     * - A supplied value replaces an existing value (if any) in that field. -
     * Omitted fields remain unchanged. - Complex values in geometries and
     * properties must be replaced as atomic units. For example, providing just the
     * coordinates of a geometry is not allowed; the complete geometry, including
     * type, must be supplied. - Setting a property's value to null deletes that
     * property. For more information about updating features, read Updating
     * features in the Google Maps Engine developer's guide. (features.batchPatch)
     *
     * @param string $id The ID of the table containing the features to be patched.
     * @param Google_FeaturesBatchPatchRequest $postBody
     * @param array $optParams Optional parameters.
     */
    public function batchPatch($id, Google_Service_MapsEngine_FeaturesBatchPatchRequest $postBody, $optParams = array())
    {
        $params = array('id' => $id, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('batchPatch', array($params));
    }

    /**
     * Return a single feature, given its ID. (features.get)
     *
     * @param string $tableId The ID of the table.
     * @param string $id The ID of the feature to get.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string version The table version to access. See Accessing Public
     * Data for information.
     * @opt_param string select A SQL-like projection clause used to specify
     * returned properties. If this parameter is not included, all properties are
     * returned.
     * @return Google_Service_MapsEngine_Feature
     */
    public function get($tableId, $id, $optParams = array())
    {
        $params = array('tableId' => $tableId, 'id' => $id);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_MapsEngine_Feature");
    }

    /**
     * Return all features readable by the current user.
     * (features.listTablesFeatures)
     *
     * @param string $id The ID of the table to which these features belong.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string orderBy An SQL-like order by clause used to sort results.
     * If this parameter is not included, the order of features is undefined.
     * @opt_param string intersects A geometry literal that specifies the spatial
     * restriction of the query.
     * @opt_param string maxResults The maximum number of items to include in the
     * response, used for paging. The maximum supported value is 1000.
     * @opt_param string pageToken The continuation token, used to page through
     * large result sets. To get the next page of results, set this parameter to the
     * value of nextPageToken from the previous response.
     * @opt_param string version The table version to access. See Accessing Public
     * Data for information.
     * @opt_param string limit The total number of features to return from the
     * query, irrespective of the number of pages.
     * @opt_param string include A comma separated list of optional data to include.
     * Optional data available: schema.
     * @opt_param string where An SQL-like predicate used to filter results.
     * @opt_param string select A SQL-like projection clause used to specify
     * returned properties. If this parameter is not included, all properties are
     * returned.
     * @return Google_Service_MapsEngine_FeaturesListResponse
     */
    public function listTablesFeatures($id, $optParams = array())
    {
        $params = array('id' => $id);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_MapsEngine_FeaturesListResponse");
    }
}