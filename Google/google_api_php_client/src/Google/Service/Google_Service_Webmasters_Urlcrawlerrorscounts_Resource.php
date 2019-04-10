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
 * The "urlcrawlerrorscounts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $webmastersService = new Google_Service_Webmasters(...);
 *   $urlcrawlerrorscounts = $webmastersService->urlcrawlerrorscounts;
 *  </code>
 */
class Google_Service_Webmasters_Urlcrawlerrorscounts_Resource extends Google_Service_Resource
{

    /**
     * Retrieves a time series of the number of URL crawl errors per error category
     * and platform. (urlcrawlerrorscounts.query)
     *
     * @param string $siteUrl The site's URL, including protocol, for example
     * 'http://www.example.com/'
     * @param array $optParams Optional parameters.
     *
     * @opt_param string category The crawl error category, for example
     * 'serverError'. If not specified, we return results for all categories.
     * @opt_param string platform The user agent type (platform) that made the
     * request, for example 'web'. If not specified, we return results for all
     * platforms.
     * @opt_param bool latestCountsOnly If true, returns only the latest crawl error
     * counts.
     * @return Google_Service_Webmasters_UrlCrawlErrorsCountsQueryResponse
     */
    public function query($siteUrl, $optParams = array())
    {
        $params = array('siteUrl' => $siteUrl);
        $params = array_merge($params, $optParams);
        return $this->call('query', array($params), "Google_Service_Webmasters_UrlCrawlErrorsCountsQueryResponse");
    }
}