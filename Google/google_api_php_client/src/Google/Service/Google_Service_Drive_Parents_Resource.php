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
 *   $driveService = new Google_Service_Drive(...);
 *   $parents = $driveService->parents;
 *  </code>
 */
class Google_Service_Drive_Parents_Resource extends Google_Service_Resource
{

    /**
     * Removes a parent from a file. (parents.delete)
     *
     * @param string $fileId The ID of the file.
     * @param string $parentId The ID of the parent.
     * @param array $optParams Optional parameters.
     */
    public function delete($fileId, $parentId, $optParams = array())
    {
        $params = array('fileId' => $fileId, 'parentId' => $parentId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Gets a specific parent reference. (parents.get)
     *
     * @param string $fileId The ID of the file.
     * @param string $parentId The ID of the parent.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_ParentReference
     */
    public function get($fileId, $parentId, $optParams = array())
    {
        $params = array('fileId' => $fileId, 'parentId' => $parentId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Drive_ParentReference");
    }

    /**
     * Adds a parent folder for a file. (parents.insert)
     *
     * @param string $fileId The ID of the file.
     * @param Google_ParentReference $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_ParentReference
     */
    public function insert($fileId, Google_Service_Drive_ParentReference $postBody, $optParams = array())
    {
        $params = array('fileId' => $fileId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Drive_ParentReference");
    }

    /**
     * Lists a file's parents. (parents.listParents)
     *
     * @param string $fileId The ID of the file.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_ParentList
     */
    public function listParents($fileId, $optParams = array())
    {
        $params = array('fileId' => $fileId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Drive_ParentList");
    }
}