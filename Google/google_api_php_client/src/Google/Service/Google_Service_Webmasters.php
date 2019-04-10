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
 * Service definition for Webmasters (v3).
 *
 * <p>
 * Lets you view Google Webmaster Tools data for your verified sites.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/webmaster-tools/v3/welcome" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Webmasters extends Google_Service
{
  /** View and modify Webmaster Tools data for your verified sites. */
  const WEBMASTERS =
      "https://www.googleapis.com/auth/webmasters";
  /** View Webmaster Tools data for your verified sites. */
  const WEBMASTERS_READONLY =
      "https://www.googleapis.com/auth/webmasters.readonly";

  public $sitemaps;
  public $sites;
  public $urlcrawlerrorscounts;
  public $urlcrawlerrorssamples;
  

  /**
   * Constructs the internal representation of the Webmasters service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'webmasters/v3/';
    $this->version = 'v3';
    $this->serviceName = 'webmasters';

    $this->sitemaps = new Google_Service_Webmasters_Sitemaps_Resource(
        $this,
        $this->serviceName,
        'sitemaps',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'sites/{siteUrl}/sitemaps/{feedpath}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'siteUrl' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'feedpath' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'sites/{siteUrl}/sitemaps/{feedpath}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'siteUrl' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'feedpath' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'sites/{siteUrl}/sitemaps',
              'httpMethod' => 'GET',
              'parameters' => array(
                'siteUrl' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'sitemapIndex' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'submit' => array(
              'path' => 'sites/{siteUrl}/sitemaps/{feedpath}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'siteUrl' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'feedpath' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->sites = new Google_Service_Webmasters_Sites_Resource(
        $this,
        $this->serviceName,
        'sites',
        array(
          'methods' => array(
            'add' => array(
              'path' => 'sites/{siteUrl}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'siteUrl' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'sites/{siteUrl}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'siteUrl' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'sites/{siteUrl}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'siteUrl' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'sites',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->urlcrawlerrorscounts = new Google_Service_Webmasters_Urlcrawlerrorscounts_Resource(
        $this,
        $this->serviceName,
        'urlcrawlerrorscounts',
        array(
          'methods' => array(
            'query' => array(
              'path' => 'sites/{siteUrl}/urlCrawlErrorsCounts/query',
              'httpMethod' => 'GET',
              'parameters' => array(
                'siteUrl' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'category' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'platform' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'latestCountsOnly' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->urlcrawlerrorssamples = new Google_Service_Webmasters_Urlcrawlerrorssamples_Resource(
        $this,
        $this->serviceName,
        'urlcrawlerrorssamples',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'sites/{siteUrl}/urlCrawlErrorsSamples/{url}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'siteUrl' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'url' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'category' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'platform' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'sites/{siteUrl}/urlCrawlErrorsSamples',
              'httpMethod' => 'GET',
              'parameters' => array(
                'siteUrl' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'category' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'platform' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'markAsFixed' => array(
              'path' => 'sites/{siteUrl}/urlCrawlErrorsSamples/{url}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'siteUrl' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'url' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'category' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'platform' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}




