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
 * The "datasets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $datasets = $genomicsService->datasets;
 *  </code>
 */
class Google_Service_Genomics_Datasets_Resource extends Google_Service_Resource
{

    /**
     * Creates a new dataset. (datasets.create)
     *
     * @param Google_Dataset $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Dataset
     */
    public function create(Google_Service_Genomics_Dataset $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('create', array($params), "Google_Service_Genomics_Dataset");
    }

    /**
     * Deletes a dataset. (datasets.delete)
     *
     * @param string $datasetId The ID of the dataset to be deleted.
     * @param array $optParams Optional parameters.
     */
    public function delete($datasetId, $optParams = array())
    {
        $params = array('datasetId' => $datasetId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Gets a dataset by ID. (datasets.get)
     *
     * @param string $datasetId The ID of the dataset.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Dataset
     */
    public function get($datasetId, $optParams = array())
    {
        $params = array('datasetId' => $datasetId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Genomics_Dataset");
    }

    /**
     * Lists datasets within a project. (datasets.listDatasets)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken The continuation token, which is used to page
     * through large result sets. To get the next page of results, set this
     * parameter to the value of nextPageToken from the previous response.
     * @opt_param string projectNumber The project to list datasets for.
     * @opt_param int pageSize The maximum number of results returned by this
     * request. If unspecified, defaults to 50.
     * @return Google_Service_Genomics_ListDatasetsResponse
     */
    public function listDatasets($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Genomics_ListDatasetsResponse");
    }

    /**
     * Updates a dataset. This method supports patch semantics. (datasets.patch)
     *
     * @param string $datasetId The ID of the dataset to be updated.
     * @param Google_Dataset $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Dataset
     */
    public function patch($datasetId, Google_Service_Genomics_Dataset $postBody, $optParams = array())
    {
        $params = array('datasetId' => $datasetId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Genomics_Dataset");
    }

    /**
     * Undeletes a dataset by restoring a dataset which was deleted via this API.
     * This operation is only possible for a week after the deletion occurred.
     * (datasets.undelete)
     *
     * @param string $datasetId The ID of the dataset to be undeleted.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Dataset
     */
    public function undelete($datasetId, $optParams = array())
    {
        $params = array('datasetId' => $datasetId);
        $params = array_merge($params, $optParams);
        return $this->call('undelete', array($params), "Google_Service_Genomics_Dataset");
    }

    /**
     * Updates a dataset. (datasets.update)
     *
     * @param string $datasetId The ID of the dataset to be updated.
     * @param Google_Dataset $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Dataset
     */
    public function update($datasetId, Google_Service_Genomics_Dataset $postBody, $optParams = array())
    {
        $params = array('datasetId' => $datasetId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Genomics_Dataset");
    }
}
