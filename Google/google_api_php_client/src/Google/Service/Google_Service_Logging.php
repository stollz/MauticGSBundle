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
 * Service definition for Logging (v1beta3).
 *
 * <p>
 * Google Cloud Logging API lets you create logs, ingest log entries, and manage
 * log sinks.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Logging extends Google_Service
{
    /** View and manage your data across Google Cloud Platform services. */
    const CLOUD_PLATFORM =
        "https://www.googleapis.com/auth/cloud-platform";

    public $projects_logServices;
    public $projects_logServices_indexes;
    public $projects_logServices_sinks;
    public $projects_logs;
    public $projects_logs_entries;
    public $projects_logs_sinks;


    /**
     * Constructs the internal representation of the Logging service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->servicePath = '';
        $this->version = 'v1beta3';
        $this->serviceName = 'logging';

        $this->projects_logServices = new Google_Service_Logging_ProjectsLogServices_Resource(
            $this,
            $this->serviceName,
            'logServices',
            array(
                'methods' => array(
                    'list' => array(
                        'path' => 'v1beta3/projects/{projectsId}/logServices',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'projectsId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'log' => array(
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
        $this->projects_logServices_indexes = new Google_Service_Logging_ProjectsLogServicesIndexes_Resource(
            $this,
            $this->serviceName,
            'indexes',
            array(
                'methods' => array(
                    'list' => array(
                        'path' => 'v1beta3/projects/{projectsId}/logServices/{logServicesId}/indexes',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'projectsId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'logServicesId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'log' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'pageSize' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'depth' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'indexPrefix' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ),
                )
            )
        );
        $this->projects_logServices_sinks = new Google_Service_Logging_ProjectsLogServicesSinks_Resource(
            $this,
            $this->serviceName,
            'sinks',
            array(
                'methods' => array(
                    'create' => array(
                        'path' => 'v1beta3/projects/{projectsId}/logServices/{logServicesId}/sinks',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'projectsId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'logServicesId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'delete' => array(
                        'path' => 'v1beta3/projects/{projectsId}/logServices/{logServicesId}/sinks/{sinksId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'projectsId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'logServicesId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'sinksId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'v1beta3/projects/{projectsId}/logServices/{logServicesId}/sinks/{sinksId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'projectsId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'logServicesId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'sinksId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'list' => array(
                        'path' => 'v1beta3/projects/{projectsId}/logServices/{logServicesId}/sinks',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'projectsId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'logServicesId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'v1beta3/projects/{projectsId}/logServices/{logServicesId}/sinks/{sinksId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'projectsId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'logServicesId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'sinksId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->projects_logs = new Google_Service_Logging_ProjectsLogs_Resource(
            $this,
            $this->serviceName,
            'logs',
            array(
                'methods' => array(
                    'delete' => array(
                        'path' => 'v1beta3/projects/{projectsId}/logs/{logsId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'projectsId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'logsId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'list' => array(
                        'path' => 'v1beta3/projects/{projectsId}/logs',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'projectsId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'serviceName' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'serviceIndexPrefix' => array(
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
        $this->projects_logs_entries = new Google_Service_Logging_ProjectsLogsEntries_Resource(
            $this,
            $this->serviceName,
            'entries',
            array(
                'methods' => array(
                    'write' => array(
                        'path' => 'v1beta3/projects/{projectsId}/logs/{logsId}/entries:write',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'projectsId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'logsId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->projects_logs_sinks = new Google_Service_Logging_ProjectsLogsSinks_Resource(
            $this,
            $this->serviceName,
            'sinks',
            array(
                'methods' => array(
                    'create' => array(
                        'path' => 'v1beta3/projects/{projectsId}/logs/{logsId}/sinks',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'projectsId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'logsId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'delete' => array(
                        'path' => 'v1beta3/projects/{projectsId}/logs/{logsId}/sinks/{sinksId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'projectsId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'logsId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'sinksId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'v1beta3/projects/{projectsId}/logs/{logsId}/sinks/{sinksId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'projectsId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'logsId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'sinksId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'list' => array(
                        'path' => 'v1beta3/projects/{projectsId}/logs/{logsId}/sinks',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'projectsId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'logsId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'v1beta3/projects/{projectsId}/logs/{logsId}/sinks/{sinksId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'projectsId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'logsId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'sinksId' => array(
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













