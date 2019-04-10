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
 * The "parents" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new Google_Service_MapsEngine(...);
 *   $parents = $mapsengineService->parents;
 *  </code>
 */
class Google_Service_MapsEngine_RastersParents_Resource extends Google_Service_Resource
{

    /**
     * Return all parent ids of the specified rasters. (parents.listRastersParents)
     *
     * @param string $id The ID of the rasters whose parents will be listed.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken The continuation token, used to page through
     * large result sets. To get the next page of results, set this parameter to the
     * value of nextPageToken from the previous response.
     * @opt_param string maxResults The maximum number of items to include in a
     * single response page. The maximum supported value is 50.
     * @return Google_Service_MapsEngine_ParentsListResponse
     */
    public function listRastersParents($id, $optParams = array())
    {
        $params = array('id' => $id);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_MapsEngine_ParentsListResponse");
    }
}