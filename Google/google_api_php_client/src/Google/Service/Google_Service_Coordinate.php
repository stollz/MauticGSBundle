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
 * Service definition for Coordinate (v1).
 *
 * <p>
 * Lets you view and manage jobs in a Coordinate team.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/coordinate/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Coordinate extends Google_Service
{
  /** View and manage your Google Maps Coordinate jobs. */
  const COORDINATE =
      "https://www.googleapis.com/auth/coordinate";
  /** View your Google Coordinate jobs. */
  const COORDINATE_READONLY =
      "https://www.googleapis.com/auth/coordinate.readonly";

  public $customFieldDef;
  public $jobs;
  public $location;
  public $schedule;
  public $team;
  public $worker;
  

  /**
   * Constructs the internal representation of the Coordinate service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'coordinate/v1/';
    $this->version = 'v1';
    $this->serviceName = 'coordinate';

    $this->customFieldDef = new Google_Service_Coordinate_CustomFieldDef_Resource(
        $this,
        $this->serviceName,
        'customFieldDef',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'teams/{teamId}/custom_fields',
              'httpMethod' => 'GET',
              'parameters' => array(
                'teamId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->jobs = new Google_Service_Coordinate_Jobs_Resource(
        $this,
        $this->serviceName,
        'jobs',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'teams/{teamId}/jobs/{jobId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'teamId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'jobId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'teams/{teamId}/jobs',
              'httpMethod' => 'POST',
              'parameters' => array(
                'teamId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'address' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'lat' => array(
                  'location' => 'query',
                  'type' => 'number',
                  'required' => true,
                ),
                'lng' => array(
                  'location' => 'query',
                  'type' => 'number',
                  'required' => true,
                ),
                'title' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'customerName' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'note' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'assignee' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'customerPhoneNumber' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'customField' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'teams/{teamId}/jobs',
              'httpMethod' => 'GET',
              'parameters' => array(
                'teamId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'minModifiedTimestampMs' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'teams/{teamId}/jobs/{jobId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'teamId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'jobId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'customerName' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'title' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'note' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'assignee' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'customerPhoneNumber' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'address' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'lat' => array(
                  'location' => 'query',
                  'type' => 'number',
                ),
                'progress' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'lng' => array(
                  'location' => 'query',
                  'type' => 'number',
                ),
                'customField' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'teams/{teamId}/jobs/{jobId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'teamId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'jobId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'customerName' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'title' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'note' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'assignee' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'customerPhoneNumber' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'address' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'lat' => array(
                  'location' => 'query',
                  'type' => 'number',
                ),
                'progress' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'lng' => array(
                  'location' => 'query',
                  'type' => 'number',
                ),
                'customField' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->location = new Google_Service_Coordinate_Location_Resource(
        $this,
        $this->serviceName,
        'location',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'teams/{teamId}/workers/{workerEmail}/locations',
              'httpMethod' => 'GET',
              'parameters' => array(
                'teamId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'workerEmail' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'startTimestampMs' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->schedule = new Google_Service_Coordinate_Schedule_Resource(
        $this,
        $this->serviceName,
        'schedule',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'teams/{teamId}/jobs/{jobId}/schedule',
              'httpMethod' => 'GET',
              'parameters' => array(
                'teamId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'jobId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'teams/{teamId}/jobs/{jobId}/schedule',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'teamId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'jobId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'allDay' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'startTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'duration' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'endTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'update' => array(
              'path' => 'teams/{teamId}/jobs/{jobId}/schedule',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'teamId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'jobId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'allDay' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'startTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'duration' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'endTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->team = new Google_Service_Coordinate_Team_Resource(
        $this,
        $this->serviceName,
        'team',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'teams',
              'httpMethod' => 'GET',
              'parameters' => array(
                'admin' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'worker' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'dispatcher' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->worker = new Google_Service_Coordinate_Worker_Resource(
        $this,
        $this->serviceName,
        'worker',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'teams/{teamId}/workers',
              'httpMethod' => 'GET',
              'parameters' => array(
                'teamId' => array(
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




