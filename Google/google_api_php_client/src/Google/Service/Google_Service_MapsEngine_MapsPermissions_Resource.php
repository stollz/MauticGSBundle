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
 * The "permissions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mapsengineService = new Google_Service_MapsEngine(...);
 *   $permissions = $mapsengineService->permissions;
 *  </code>
 */
class Google_Service_MapsEngine_MapsPermissions_Resource extends Google_Service_Resource
{

    /**
     * Remove permission entries from an already existing asset.
     * (permissions.batchDelete)
     *
     * @param string $id The ID of the asset from which permissions will be removed.
     * @param Google_PermissionsBatchDeleteRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_MapsEngine_PermissionsBatchDeleteResponse
     */
    public function batchDelete($id, Google_Service_MapsEngine_PermissionsBatchDeleteRequest $postBody, $optParams = array())
    {
        $params = array('id' => $id, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('batchDelete', array($params), "Google_Service_MapsEngine_PermissionsBatchDeleteResponse");
    }

    /**
     * Add or update permission entries to an already existing asset.
     *
     * An asset can hold up to 20 different permission entries. Each batchInsert
     * request is atomic. (permissions.batchUpdate)
     *
     * @param string $id The ID of the asset to which permissions will be added.
     * @param Google_PermissionsBatchUpdateRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_MapsEngine_PermissionsBatchUpdateResponse
     */
    public function batchUpdate($id, Google_Service_MapsEngine_PermissionsBatchUpdateRequest $postBody, $optParams = array())
    {
        $params = array('id' => $id, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('batchUpdate', array($params), "Google_Service_MapsEngine_PermissionsBatchUpdateResponse");
    }

    /**
     * Return all of the permissions for the specified asset.
     * (permissions.listMapsPermissions)
     *
     * @param string $id The ID of the asset whose permissions will be listed.
     * @param array $optParams Optional parameters.
     * @return Google_Service_MapsEngine_PermissionsListResponse
     */
    public function listMapsPermissions($id, $optParams = array())
    {
        $params = array('id' => $id);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_MapsEngine_PermissionsListResponse");
    }
}