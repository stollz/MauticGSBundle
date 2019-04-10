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
 * The "products" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $products = $androidenterpriseService->products;
 *  </code>
 */
class Google_Service_AndroidEnterprise_Products_Resource extends Google_Service_Resource
{

    /**
     * Retrieves details of a product for display to an enterprise admin.
     * (products.get)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $productId The ID of the product, e.g.
     * "app:com.google.android.gm".
     * @param array $optParams Optional parameters.
     *
     * @opt_param string language The BCP47 tag for the user's preferred language
     * (e.g. "en-US", "de").
     * @return Google_Service_AndroidEnterprise_Product
     */
    public function get($enterpriseId, $productId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'productId' => $productId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_AndroidEnterprise_Product");
    }

    /**
     * Retrieves the schema defining app restrictions configurable for this product.
     * All products have a schema, but this may be empty if no app restrictions are
     * defined. (products.getAppRestrictionsSchema)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $productId The ID of the product.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string language The BCP47 tag for the user's preferred language
     * (e.g. "en-US", "de").
     * @return Google_Service_AndroidEnterprise_AppRestrictionsSchema
     */
    public function getAppRestrictionsSchema($enterpriseId, $productId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'productId' => $productId);
        $params = array_merge($params, $optParams);
        return $this->call('getAppRestrictionsSchema', array($params), "Google_Service_AndroidEnterprise_AppRestrictionsSchema");
    }

    /**
     * Retrieves the Android app permissions required by this app.
     * (products.getPermissions)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $productId The ID of the product.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_ProductPermissions
     */
    public function getPermissions($enterpriseId, $productId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'productId' => $productId);
        $params = array_merge($params, $optParams);
        return $this->call('getPermissions', array($params), "Google_Service_AndroidEnterprise_ProductPermissions");
    }

    /**
     * Updates the set of Android app permissions for this app that have been
     * accepted by the enterprise. (products.updatePermissions)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $productId The ID of the product.
     * @param Google_ProductPermissions $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_ProductPermissions
     */
    public function updatePermissions($enterpriseId, $productId, Google_Service_AndroidEnterprise_ProductPermissions $postBody, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'productId' => $productId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('updatePermissions', array($params), "Google_Service_AndroidEnterprise_ProductPermissions");
    }
}