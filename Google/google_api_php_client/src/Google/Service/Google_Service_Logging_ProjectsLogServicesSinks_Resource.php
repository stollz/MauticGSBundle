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
 * The "sinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $loggingService = new Google_Service_Logging(...);
 *   $sinks = $loggingService->sinks;
 *  </code>
 */
class Google_Service_Logging_ProjectsLogServicesSinks_Resource extends Google_Service_Resource
{

    /**
     * Creates the specified log service sink resource. (sinks.create)
     *
     * @param string $projectsId Part of `serviceName`. The name of the service in
     * which to create a sink.
     * @param string $logServicesId Part of `serviceName`. See documentation of
     * `projectsId`.
     * @param Google_LogSink $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Logging_LogSink
     */
    public function create($projectsId, $logServicesId, Google_Service_Logging_LogSink $postBody, $optParams = array())
    {
        $params = array('projectsId' => $projectsId, 'logServicesId' => $logServicesId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('create', array($params), "Google_Service_Logging_LogSink");
    }

    /**
     * Deletes the specified log service sink. (sinks.delete)
     *
     * @param string $projectsId Part of `sinkName`. The name of the sink to delete.
     * @param string $logServicesId Part of `sinkName`. See documentation of
     * `projectsId`.
     * @param string $sinksId Part of `sinkName`. See documentation of `projectsId`.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Logging_Empty
     */
    public function delete($projectsId, $logServicesId, $sinksId, $optParams = array())
    {
        $params = array('projectsId' => $projectsId, 'logServicesId' => $logServicesId, 'sinksId' => $sinksId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_Logging_Empty");
    }

    /**
     * Gets the specified log service sink resource. (sinks.get)
     *
     * @param string $projectsId Part of `sinkName`. The name of the sink to return.
     * @param string $logServicesId Part of `sinkName`. See documentation of
     * `projectsId`.
     * @param string $sinksId Part of `sinkName`. See documentation of `projectsId`.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Logging_LogSink
     */
    public function get($projectsId, $logServicesId, $sinksId, $optParams = array())
    {
        $params = array('projectsId' => $projectsId, 'logServicesId' => $logServicesId, 'sinksId' => $sinksId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Logging_LogSink");
    }

    /**
     * Lists log service sinks associated with the specified service.
     * (sinks.listProjectsLogServicesSinks)
     *
     * @param string $projectsId Part of `serviceName`. The name of the service for
     * which to list sinks.
     * @param string $logServicesId Part of `serviceName`. See documentation of
     * `projectsId`.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Logging_ListLogServiceSinksResponse
     */
    public function listProjectsLogServicesSinks($projectsId, $logServicesId, $optParams = array())
    {
        $params = array('projectsId' => $projectsId, 'logServicesId' => $logServicesId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Logging_ListLogServiceSinksResponse");
    }

    /**
     * Creates or update the specified log service sink resource. (sinks.update)
     *
     * @param string $projectsId Part of `sinkName`. The name of the sink to update.
     * @param string $logServicesId Part of `sinkName`. See documentation of
     * `projectsId`.
     * @param string $sinksId Part of `sinkName`. See documentation of `projectsId`.
     * @param Google_LogSink $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Logging_LogSink
     */
    public function update($projectsId, $logServicesId, $sinksId, Google_Service_Logging_LogSink $postBody, $optParams = array())
    {
        $params = array('projectsId' => $projectsId, 'logServicesId' => $logServicesId, 'sinksId' => $sinksId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Logging_LogSink");
    }
}