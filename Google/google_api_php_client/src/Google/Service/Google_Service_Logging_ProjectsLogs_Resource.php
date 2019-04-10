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
 * The "logs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $loggingService = new Google_Service_Logging(...);
 *   $logs = $loggingService->logs;
 *  </code>
 */
class Google_Service_Logging_ProjectsLogs_Resource extends Google_Service_Resource
{

    /**
     * Deletes the specified log resource and all log entries contained in it.
     * (logs.delete)
     *
     * @param string $projectsId Part of `logName`. The log resource to delete.
     * @param string $logsId Part of `logName`. See documentation of `projectsId`.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Logging_Empty
     */
    public function delete($projectsId, $logsId, $optParams = array())
    {
        $params = array('projectsId' => $projectsId, 'logsId' => $logsId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_Logging_Empty");
    }

    /**
     * Lists log resources belonging to the specified project.
     * (logs.listProjectsLogs)
     *
     * @param string $projectsId Part of `projectName`. The project name for which
     * to list the log resources.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken An opaque token, returned as `nextPageToken` by a
     * prior `ListLogs` operation. If `pageToken` is supplied, then the other fields
     * of this request are ignored, and instead the previous `ListLogs` operation is
     * continued.
     * @opt_param string serviceName A service name for which to list logs. Only
     * logs containing entries whose metadata includes this service name are
     * returned. If `serviceName` and `serviceIndexPrefix` are both empty, then all
     * log names are returned. To list all log names, regardless of service, leave
     * both the `serviceName` and `serviceIndexPrefix` empty. To list log names
     * containing entries with a particular service name (or explicitly empty
     * service name) set `serviceName` to the desired value and `serviceIndexPrefix`
     * to `"/"`.
     * @opt_param string serviceIndexPrefix A log service index prefix for which to
     * list logs. Only logs containing entries whose metadata that includes these
     * label values (associated with index keys) are returned. The prefix is a slash
     * separated list of values, and need not specify all index labels. An empty
     * index (or a single slash) matches all log service indexes.
     * @opt_param int pageSize The maximum number of results to return.
     * @return Google_Service_Logging_ListLogsResponse
     */
    public function listProjectsLogs($projectsId, $optParams = array())
    {
        $params = array('projectsId' => $projectsId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Logging_ListLogsResponse");
    }
}