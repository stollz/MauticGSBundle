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
 * The "readgroupsets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $readgroupsets = $genomicsService->readgroupsets;
 *  </code>
 */
class Google_Service_Genomics_Readgroupsets_Resource extends Google_Service_Resource
{

    /**
     * Aligns read data from existing read group sets or files from Google Cloud
     * Storage. See the  alignment and variant calling documentation for more
     * details. (readgroupsets.align)
     *
     * @param Google_AlignReadGroupSetsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_AlignReadGroupSetsResponse
     */
    public function align(Google_Service_Genomics_AlignReadGroupSetsRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('align', array($params), "Google_Service_Genomics_AlignReadGroupSetsResponse");
    }

    /**
     * Calls variants on read data from existing read group sets or files from
     * Google Cloud Storage. See the  alignment and variant calling documentation
     * for more details. (readgroupsets.callReadgroupsets)
     *
     * @param Google_CallReadGroupSetsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_CallReadGroupSetsResponse
     */
    public function callReadgroupsets(Google_Service_Genomics_CallReadGroupSetsRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('call', array($params), "Google_Service_Genomics_CallReadGroupSetsResponse");
    }

    /**
     * Deletes a read group set. (readgroupsets.delete)
     *
     * @param string $readGroupSetId The ID of the read group set to be deleted. The
     * caller must have WRITE permissions to the dataset associated with this read
     * group set.
     * @param array $optParams Optional parameters.
     */
    public function delete($readGroupSetId, $optParams = array())
    {
        $params = array('readGroupSetId' => $readGroupSetId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Exports read group sets to a BAM file in Google Cloud Storage.
     *
     * Note that currently there may be some differences between exported BAM files
     * and the original BAM file at the time of import. In particular, comments in
     * the input file header will not be preserved, some custom tags will be
     * converted to strings, and original reference sequence order is not
     * necessarily preserved. (readgroupsets.export)
     *
     * @param Google_ExportReadGroupSetsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_ExportReadGroupSetsResponse
     */
    public function export(Google_Service_Genomics_ExportReadGroupSetsRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('export', array($params), "Google_Service_Genomics_ExportReadGroupSetsResponse");
    }

    /**
     * Gets a read group set by ID. (readgroupsets.get)
     *
     * @param string $readGroupSetId The ID of the read group set.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_ReadGroupSet
     */
    public function get($readGroupSetId, $optParams = array())
    {
        $params = array('readGroupSetId' => $readGroupSetId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Genomics_ReadGroupSet");
    }

    /**
     * Creates read group sets by asynchronously importing the provided information.
     *
     * Note that currently comments in the input file header are not imported and
     * some custom tags will be converted to strings, rather than preserving tag
     * types. The caller must have WRITE permissions to the dataset.
     * (readgroupsets.import)
     *
     * @param Google_ImportReadGroupSetsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_ImportReadGroupSetsResponse
     */
    public function import(Google_Service_Genomics_ImportReadGroupSetsRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('import', array($params), "Google_Service_Genomics_ImportReadGroupSetsResponse");
    }

    /**
     * Updates a read group set. This method supports patch semantics.
     * (readgroupsets.patch)
     *
     * @param string $readGroupSetId The ID of the read group set to be updated. The
     * caller must have WRITE permissions to the dataset associated with this read
     * group set.
     * @param Google_ReadGroupSet $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_ReadGroupSet
     */
    public function patch($readGroupSetId, Google_Service_Genomics_ReadGroupSet $postBody, $optParams = array())
    {
        $params = array('readGroupSetId' => $readGroupSetId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Genomics_ReadGroupSet");
    }

    /**
     * Searches for read group sets matching the criteria.
     *
     * Implements GlobalAllianceApi.searchReadGroupSets. (readgroupsets.search)
     *
     * @param Google_SearchReadGroupSetsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_SearchReadGroupSetsResponse
     */
    public function search(Google_Service_Genomics_SearchReadGroupSetsRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('search', array($params), "Google_Service_Genomics_SearchReadGroupSetsResponse");
    }

    /**
     * Updates a read group set. (readgroupsets.update)
     *
     * @param string $readGroupSetId The ID of the read group set to be updated. The
     * caller must have WRITE permissions to the dataset associated with this read
     * group set.
     * @param Google_ReadGroupSet $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_ReadGroupSet
     */
    public function update($readGroupSetId, Google_Service_Genomics_ReadGroupSet $postBody, $optParams = array())
    {
        $params = array('readGroupSetId' => $readGroupSetId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Genomics_ReadGroupSet");
    }
}