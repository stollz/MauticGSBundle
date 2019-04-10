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
 * The "referencesets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $referencesets = $genomicsService->referencesets;
 *  </code>
 */
class Google_Service_Genomics_Referencesets_Resource extends Google_Service_Resource
{

    /**
     * Gets a reference set.
     *
     * Implements GlobalAllianceApi.getReferenceSet. (referencesets.get)
     *
     * @param string $referenceSetId The ID of the reference set.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_ReferenceSet
     */
    public function get($referenceSetId, $optParams = array())
    {
        $params = array('referenceSetId' => $referenceSetId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Genomics_ReferenceSet");
    }

    /**
     * Searches for reference sets which match the given criteria.
     *
     * Implements GlobalAllianceApi.searchReferenceSets. (referencesets.search)
     *
     * @param Google_SearchReferenceSetsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_SearchReferenceSetsResponse
     */
    public function search(Google_Service_Genomics_SearchReferenceSetsRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('search', array($params), "Google_Service_Genomics_SearchReferenceSetsResponse");
    }
}