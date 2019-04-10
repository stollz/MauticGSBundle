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
 * The "variantsets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $variantsets = $genomicsService->variantsets;
 *  </code>
 */
class Google_Service_Genomics_Variantsets_Resource extends Google_Service_Resource
{

    /**
     * Deletes the contents of a variant set. The variant set object is not deleted.
     * (variantsets.delete)
     *
     * @param string $variantSetId The ID of the variant set to be deleted.
     * @param array $optParams Optional parameters.
     */
    public function delete($variantSetId, $optParams = array())
    {
        $params = array('variantSetId' => $variantSetId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Exports variant set data to an external destination. (variantsets.export)
     *
     * @param string $variantSetId Required. The ID of the variant set that contains
     * variant data which should be exported. The caller must have READ access to
     * this variant set.
     * @param Google_ExportVariantSetRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_ExportVariantSetResponse
     */
    public function export($variantSetId, Google_Service_Genomics_ExportVariantSetRequest $postBody, $optParams = array())
    {
        $params = array('variantSetId' => $variantSetId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('export', array($params), "Google_Service_Genomics_ExportVariantSetResponse");
    }

    /**
     * Gets a variant set by ID. (variantsets.get)
     *
     * @param string $variantSetId Required. The ID of the variant set.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_VariantSet
     */
    public function get($variantSetId, $optParams = array())
    {
        $params = array('variantSetId' => $variantSetId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Genomics_VariantSet");
    }

    /**
     * Creates variant data by asynchronously importing the provided information.
     *
     * The variants for import will be merged with any existing data and each other
     * according to the behavior of mergeVariants. In particular, this means for
     * merged VCF variants that have conflicting INFO fields, some data will be
     * arbitrarily discarded. As a special case, for single-sample VCF files, QUAL
     * and FILTER fields will be moved to the call level; these are sometimes
     * interpreted in a call-specific context. Imported VCF headers are appended to
     * the metadata already in a variant set. (variantsets.importVariants)
     *
     * @param string $variantSetId Required. The variant set to which variant data
     * should be imported.
     * @param Google_ImportVariantsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_ImportVariantsResponse
     */
    public function importVariants($variantSetId, Google_Service_Genomics_ImportVariantsRequest $postBody, $optParams = array())
    {
        $params = array('variantSetId' => $variantSetId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('importVariants', array($params), "Google_Service_Genomics_ImportVariantsResponse");
    }

    /**
     * Merges the given variants with existing variants. Each variant will be merged
     * with an existing variant that matches its reference sequence, start, end,
     * reference bases, and alternative bases. If no such variant exists, a new one
     * will be created.
     *
     * When variants are merged, the call information from the new variant is added
     * to the existing variant, and other fields (such as key/value pairs) are
     * discarded. (variantsets.mergeVariants)
     *
     * @param string $variantSetId The destination variant set.
     * @param Google_MergeVariantsRequest $postBody
     * @param array $optParams Optional parameters.
     */
    public function mergeVariants($variantSetId, Google_Service_Genomics_MergeVariantsRequest $postBody, $optParams = array())
    {
        $params = array('variantSetId' => $variantSetId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('mergeVariants', array($params));
    }

    /**
     * Updates a variant set's metadata. All other modifications are silently
     * ignored. This method supports patch semantics. (variantsets.patch)
     *
     * @param string $variantSetId The ID of the variant to be updated.
     * @param Google_VariantSet $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_VariantSet
     */
    public function patch($variantSetId, Google_Service_Genomics_VariantSet $postBody, $optParams = array())
    {
        $params = array('variantSetId' => $variantSetId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Genomics_VariantSet");
    }

    /**
     * Returns a list of all variant sets matching search criteria.
     *
     * Implements GlobalAllianceApi.searchVariantSets. (variantsets.search)
     *
     * @param Google_SearchVariantSetsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_SearchVariantSetsResponse
     */
    public function search(Google_Service_Genomics_SearchVariantSetsRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('search', array($params), "Google_Service_Genomics_SearchVariantSetsResponse");
    }

    /**
     * Updates a variant set's metadata. All other modifications are silently
     * ignored. (variantsets.update)
     *
     * @param string $variantSetId The ID of the variant to be updated.
     * @param Google_VariantSet $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_VariantSet
     */
    public function update($variantSetId, Google_Service_Genomics_VariantSet $postBody, $optParams = array())
    {
        $params = array('variantSetId' => $variantSetId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Genomics_VariantSet");
    }
}

