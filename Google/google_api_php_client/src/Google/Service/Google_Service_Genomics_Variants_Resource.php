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
 * The "variants" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $variants = $genomicsService->variants;
 *  </code>
 */
class Google_Service_Genomics_Variants_Resource extends Google_Service_Resource
{

    /**
     * Creates a new variant. (variants.create)
     *
     * @param Google_Variant $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Variant
     */
    public function create(Google_Service_Genomics_Variant $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('create', array($params), "Google_Service_Genomics_Variant");
    }

    /**
     * Deletes a variant. (variants.delete)
     *
     * @param string $variantId The ID of the variant to be deleted.
     * @param array $optParams Optional parameters.
     */
    public function delete($variantId, $optParams = array())
    {
        $params = array('variantId' => $variantId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Gets a variant by ID. (variants.get)
     *
     * @param string $variantId The ID of the variant.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Variant
     */
    public function get($variantId, $optParams = array())
    {
        $params = array('variantId' => $variantId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Genomics_Variant");
    }

    /**
     * Gets a list of variants matching the criteria.
     *
     * Implements GlobalAllianceApi.searchVariants. (variants.search)
     *
     * @param Google_SearchVariantsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_SearchVariantsResponse
     */
    public function search(Google_Service_Genomics_SearchVariantsRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('search', array($params), "Google_Service_Genomics_SearchVariantsResponse");
    }

    /**
     * Updates a variant's names and info fields. All other modifications are
     * silently ignored. Returns the modified variant without its calls.
     * (variants.update)
     *
     * @param string $variantId The ID of the variant to be updated.
     * @param Google_Variant $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Variant
     */
    public function update($variantId, Google_Service_Genomics_Variant $postBody, $optParams = array())
    {
        $params = array('variantId' => $variantId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Genomics_Variant");
    }
}
