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
 * The "references" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $references = $genomicsService->references;
 *  </code>
 */
class Google_Service_Genomics_References_Resource extends Google_Service_Resource
{

    /**
     * Gets a reference.
     *
     * Implements GlobalAllianceApi.getReference. (references.get)
     *
     * @param string $referenceId The ID of the reference.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Reference
     */
    public function get($referenceId, $optParams = array())
    {
        $params = array('referenceId' => $referenceId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Genomics_Reference");
    }

    /**
     * Searches for references which match the given criteria.
     *
     * Implements GlobalAllianceApi.searchReferences. (references.search)
     *
     * @param Google_SearchReferencesRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_SearchReferencesResponse
     */
    public function search(Google_Service_Genomics_SearchReferencesRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('search', array($params), "Google_Service_Genomics_SearchReferencesResponse");
    }
}