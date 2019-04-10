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
 * The "images" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $images = $computeService->images;
 *  </code>
 */
class Google_Service_Compute_Images_Resource extends Google_Service_Resource
{

    /**
     * Deletes the specified image resource. (images.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $image Name of the image resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $image, $optParams = array())
    {
        $params = array('project' => $project, 'image' => $image);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Sets the deprecation status of an image.
     *
     * If an empty request body is given, clears the deprecation status instead.
     * (images.deprecate)
     *
     * @param string $project Project ID for this request.
     * @param string $image Image name.
     * @param Google_DeprecationStatus $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function deprecate($project, $image, Google_Service_Compute_DeprecationStatus $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'image' => $image, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('deprecate', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Returns the specified image resource. (images.get)
     *
     * @param string $project Project ID for this request.
     * @param string $image Name of the image resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Image
     */
    public function get($project, $image, $optParams = array())
    {
        $params = array('project' => $project, 'image' => $image);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Compute_Image");
    }

    /**
     * Creates an image resource in the specified project using the data included in
     * the request. (images.insert)
     *
     * @param string $project Project ID for this request.
     * @param Google_Image $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, Google_Service_Compute_Image $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Retrieves the list of image resources available to the specified project.
     * (images.listImages)
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
     * @return Google_Service_Compute_ImageList
     */
    public function listImages($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Compute_ImageList");
    }
}