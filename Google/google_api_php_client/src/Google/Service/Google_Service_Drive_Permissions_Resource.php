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
 *   $driveService = new Google_Service_Drive(...);
 *   $permissions = $driveService->permissions;
 *  </code>
 */
class Google_Service_Drive_Permissions_Resource extends Google_Service_Resource
{

    /**
     * Deletes a permission from a file. (permissions.delete)
     *
     * @param string $fileId The ID for the file.
     * @param string $permissionId The ID for the permission.
     * @param array $optParams Optional parameters.
     */
    public function delete($fileId, $permissionId, $optParams = array())
    {
        $params = array('fileId' => $fileId, 'permissionId' => $permissionId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Gets a permission by ID. (permissions.get)
     *
     * @param string $fileId The ID for the file.
     * @param string $permissionId The ID for the permission.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_Permission
     */
    public function get($fileId, $permissionId, $optParams = array())
    {
        $params = array('fileId' => $fileId, 'permissionId' => $permissionId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Drive_Permission");
    }

    /**
     * Returns the permission ID for an email address. (permissions.getIdForEmail)
     *
     * @param string $email The email address for which to return a permission ID
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_PermissionId
     */
    public function getIdForEmail($email, $optParams = array())
    {
        $params = array('email' => $email);
        $params = array_merge($params, $optParams);
        return $this->call('getIdForEmail', array($params), "Google_Service_Drive_PermissionId");
    }

    /**
     * Inserts a permission for a file. (permissions.insert)
     *
     * @param string $fileId The ID for the file.
     * @param Google_Permission $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string emailMessage A custom message to include in notification
     * emails.
     * @opt_param bool sendNotificationEmails Whether to send notification emails
     * when sharing to users or groups. This parameter is ignored and an email is
     * sent if the role is owner.
     * @return Google_Service_Drive_Permission
     */
    public function insert($fileId, Google_Service_Drive_Permission $postBody, $optParams = array())
    {
        $params = array('fileId' => $fileId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Drive_Permission");
    }

    /**
     * Lists a file's permissions. (permissions.listPermissions)
     *
     * @param string $fileId The ID for the file.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_PermissionList
     */
    public function listPermissions($fileId, $optParams = array())
    {
        $params = array('fileId' => $fileId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Drive_PermissionList");
    }

    /**
     * Updates a permission. This method supports patch semantics.
     * (permissions.patch)
     *
     * @param string $fileId The ID for the file.
     * @param string $permissionId The ID for the permission.
     * @param Google_Permission $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool transferOwnership Whether changing a role to 'owner'
     * downgrades the current owners to writers. Does nothing if the specified role
     * is not 'owner'.
     * @return Google_Service_Drive_Permission
     */
    public function patch($fileId, $permissionId, Google_Service_Drive_Permission $postBody, $optParams = array())
    {
        $params = array('fileId' => $fileId, 'permissionId' => $permissionId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Drive_Permission");
    }

    /**
     * Updates a permission. (permissions.update)
     *
     * @param string $fileId The ID for the file.
     * @param string $permissionId The ID for the permission.
     * @param Google_Permission $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool transferOwnership Whether changing a role to 'owner'
     * downgrades the current owners to writers. Does nothing if the specified role
     * is not 'owner'.
     * @return Google_Service_Drive_Permission
     */
    public function update($fileId, $permissionId, Google_Service_Drive_Permission $postBody, $optParams = array())
    {
        $params = array('fileId' => $fileId, 'permissionId' => $permissionId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Drive_Permission");
    }
}
