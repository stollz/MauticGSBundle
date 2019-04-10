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
 * The "properties" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $properties = $driveService->properties;
 *  </code>
 */
class Google_Service_Drive_Properties_Resource extends Google_Service_Resource
{

    /**
     * Deletes a property. (properties.delete)
     *
     * @param string $fileId The ID of the file.
     * @param string $propertyKey The key of the property.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string visibility The visibility of the property.
     */
    public function delete($fileId, $propertyKey, $optParams = array())
    {
        $params = array('fileId' => $fileId, 'propertyKey' => $propertyKey);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Gets a property by its key. (properties.get)
     *
     * @param string $fileId The ID of the file.
     * @param string $propertyKey The key of the property.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string visibility The visibility of the property.
     * @return Google_Service_Drive_Property
     */
    public function get($fileId, $propertyKey, $optParams = array())
    {
        $params = array('fileId' => $fileId, 'propertyKey' => $propertyKey);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Drive_Property");
    }

    /**
     * Adds a property to a file. (properties.insert)
     *
     * @param string $fileId The ID of the file.
     * @param Google_Property $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_Property
     */
    public function insert($fileId, Google_Service_Drive_Property $postBody, $optParams = array())
    {
        $params = array('fileId' => $fileId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Drive_Property");
    }

    /**
     * Lists a file's properties. (properties.listProperties)
     *
     * @param string $fileId The ID of the file.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_PropertyList
     */
    public function listProperties($fileId, $optParams = array())
    {
        $params = array('fileId' => $fileId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Drive_PropertyList");
    }

    /**
     * Updates a property. This method supports patch semantics. (properties.patch)
     *
     * @param string $fileId The ID of the file.
     * @param string $propertyKey The key of the property.
     * @param Google_Property $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string visibility The visibility of the property.
     * @return Google_Service_Drive_Property
     */
    public function patch($fileId, $propertyKey, Google_Service_Drive_Property $postBody, $optParams = array())
    {
        $params = array('fileId' => $fileId, 'propertyKey' => $propertyKey, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Drive_Property");
    }

    /**
     * Updates a property. (properties.update)
     *
     * @param string $fileId The ID of the file.
     * @param string $propertyKey The key of the property.
     * @param Google_Property $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string visibility The visibility of the property.
     * @return Google_Service_Drive_Property
     */
    public function update($fileId, $propertyKey, Google_Service_Drive_Property $postBody, $optParams = array())
    {
        $params = array('fileId' => $fileId, 'propertyKey' => $propertyKey, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Drive_Property");
    }
}