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
 * Service definition for Container (v1beta1).
 *
 * <p>
 * The Google Container Engine API is used for building and managing container
 * based applications, powered by the open source Kubernetes technology.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/container-engine/docs/v1beta1/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Container extends Google_Service
{
  /** View and manage your data across Google Cloud Platform services. */
  const CLOUD_PLATFORM =
      "https://www.googleapis.com/auth/cloud-platform";

  public $projects_clusters;
  public $projects_operations;
  public $projects_zones_clusters;
  public $projects_zones_operations;
  public $projects_zones_tokens;
  

  /**
   * Constructs the internal representation of the Container service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'container/v1beta1/projects/';
    $this->version = 'v1beta1';
    $this->serviceName = 'container';

    $this->projects_clusters = new Google_Service_Container_ProjectsClusters_Resource(
        $this,
        $this->serviceName,
        'clusters',
        array(
          'methods' => array(
            'list' => array(
              'path' => '{projectId}/clusters',
              'httpMethod' => 'GET',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->projects_operations = new Google_Service_Container_ProjectsOperations_Resource(
        $this,
        $this->serviceName,
        'operations',
        array(
          'methods' => array(
            'list' => array(
              'path' => '{projectId}/operations',
              'httpMethod' => 'GET',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->projects_zones_clusters = new Google_Service_Container_ProjectsZonesClusters_Resource(
        $this,
        $this->serviceName,
        'clusters',
        array(
          'methods' => array(
            'create' => array(
              'path' => '{projectId}/zones/{zoneId}/clusters',
              'httpMethod' => 'POST',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'zoneId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => '{projectId}/zones/{zoneId}/clusters/{clusterId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'zoneId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'clusterId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => '{projectId}/zones/{zoneId}/clusters/{clusterId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'zoneId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'clusterId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => '{projectId}/zones/{zoneId}/clusters',
              'httpMethod' => 'GET',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'zoneId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->projects_zones_operations = new Google_Service_Container_ProjectsZonesOperations_Resource(
        $this,
        $this->serviceName,
        'operations',
        array(
          'methods' => array(
            'get' => array(
              'path' => '{projectId}/zones/{zoneId}/operations/{operationId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'zoneId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'operationId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => '{projectId}/zones/{zoneId}/operations',
              'httpMethod' => 'GET',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'zoneId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->projects_zones_tokens = new Google_Service_Container_ProjectsZonesTokens_Resource(
        $this,
        $this->serviceName,
        'tokens',
        array(
          'methods' => array(
            'get' => array(
              'path' => '{masterProjectId}/zones/{zoneId}/tokens/{projectNumber}/{clusterName}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'masterProjectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'zoneId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'projectNumber' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'clusterName' => array(
                  'location' => 'path',
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





