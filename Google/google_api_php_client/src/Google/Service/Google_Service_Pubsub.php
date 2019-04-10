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
 * Service definition for Pubsub (v1beta2).
 *
 * <p>
 * Provides reliable, many-to-many, asynchronous messaging between applications.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Pubsub extends Google_Service
{
  /** View and manage your data across Google Cloud Platform services. */
  const CLOUD_PLATFORM =
      "https://www.googleapis.com/auth/cloud-platform";
  /** View and manage Pub/Sub topics and subscriptions. */
  const PUBSUB =
      "https://www.googleapis.com/auth/pubsub";

  public $projects_subscriptions;
  public $projects_topics;
  public $projects_topics_subscriptions;
  

  /**
   * Constructs the internal representation of the Pubsub service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'v1beta2/';
    $this->version = 'v1beta2';
    $this->serviceName = 'pubsub';

    $this->projects_subscriptions = new Google_Service_Pubsub_ProjectsSubscriptions_Resource(
        $this,
        $this->serviceName,
        'subscriptions',
        array(
          'methods' => array(
            'acknowledge' => array(
              'path' => '{+subscription}:acknowledge',
              'httpMethod' => 'POST',
              'parameters' => array(
                'subscription' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'create' => array(
              'path' => '{+name}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => '{+subscription}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'subscription' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => '{+subscription}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'subscription' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => '{+project}/subscriptions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'modifyAckDeadline' => array(
              'path' => '{+subscription}:modifyAckDeadline',
              'httpMethod' => 'POST',
              'parameters' => array(
                'subscription' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'modifyPushConfig' => array(
              'path' => '{+subscription}:modifyPushConfig',
              'httpMethod' => 'POST',
              'parameters' => array(
                'subscription' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'pull' => array(
              'path' => '{+subscription}:pull',
              'httpMethod' => 'POST',
              'parameters' => array(
                'subscription' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->projects_topics = new Google_Service_Pubsub_ProjectsTopics_Resource(
        $this,
        $this->serviceName,
        'topics',
        array(
          'methods' => array(
            'create' => array(
              'path' => '{+name}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => '{+topic}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'topic' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => '{+topic}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'topic' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => '{+project}/topics',
              'httpMethod' => 'GET',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'publish' => array(
              'path' => '{+topic}:publish',
              'httpMethod' => 'POST',
              'parameters' => array(
                'topic' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->projects_topics_subscriptions = new Google_Service_Pubsub_ProjectsTopicsSubscriptions_Resource(
        $this,
        $this->serviceName,
        'subscriptions',
        array(
          'methods' => array(
            'list' => array(
              'path' => '{+topic}/subscriptions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'topic' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
  }
}












