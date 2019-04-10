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
 * The "callsets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $callsets = $genomicsService->callsets;
 *  </code>
 */
class Google_Service_Genomics_Callsets_Resource extends Google_Service_Resource
{

    /**
     * Creates a new call set. (callsets.create)
     *
     * @param Google_CallSet $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_CallSet
     */
    public function create(Google_Service_Genomics_CallSet $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('create', array($params), "Google_Service_Genomics_CallSet");
    }

    /**
     * Deletes a call set. (callsets.delete)
     *
     * @param string $callSetId The ID of the call set to be deleted.
     * @param array $optParams Optional parameters.
     */
    public function delete($callSetId, $optParams = array())
    {
        $params = array('callSetId' => $callSetId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Gets a call set by ID. (callsets.get)
     *
     * @param string $callSetId The ID of the call set.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_CallSet
     */
    public function get($callSetId, $optParams = array())
    {
        $params = array('callSetId' => $callSetId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Genomics_CallSet");
    }

    /**
     * Updates a call set. This method supports patch semantics. (callsets.patch)
     *
     * @param string $callSetId The ID of the call set to be updated.
     * @param Google_CallSet $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_CallSet
     */
    public function patch($callSetId, Google_Service_Genomics_CallSet $postBody, $optParams = array())
    {
        $params = array('callSetId' => $callSetId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Genomics_CallSet");
    }

    /**
     * Gets a list of call sets matching the criteria.
     *
     * Implements GlobalAllianceApi.searchCallSets. (callsets.search)
     *
     * @param Google_SearchCallSetsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_SearchCallSetsResponse
     */
    public function search(Google_Service_Genomics_SearchCallSetsRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('search', array($params), "Google_Service_Genomics_SearchCallSetsResponse");
    }

    /**
     * Updates a call set. (callsets.update)
     *
     * @param string $callSetId The ID of the call set to be updated.
     * @param Google_CallSet $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_CallSet
     */
    public function update($callSetId, Google_Service_Genomics_CallSet $postBody, $optParams = array())
    {
        $params = array('callSetId' => $callSetId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Genomics_CallSet");
    }
}