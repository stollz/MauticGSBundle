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
 * The "logServices" collection of methods.
 * Typical usage is:
 *  <code>
 *   $loggingService = new Google_Service_Logging(...);
 *   $logServices = $loggingService->logServices;
 *  </code>
 */
class Google_Service_Logging_ProjectsLogServices_Resource extends Google_Service_Resource
{

    /**
     * Lists log services associated with log entries ingested for a project.
     * (logServices.listProjectsLogServices)
     *
     * @param string $projectsId Part of `projectName`. The project resource whose
     * services are to be listed.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken An opaque token, returned as `nextPageToken` by a
     * prior `ListLogServices` operation. If `pageToken` is supplied, then the other
     * fields of this request are ignored, and instead the previous
     * `ListLogServices` operation is continued.
     * @opt_param string log The name of the log resource whose services are to be
     * listed. log for which to list services. When empty, all services are listed.
     * @opt_param int pageSize The maximum number of `LogService` objects to return
     * in one operation.
     * @return Google_Service_Logging_ListLogServicesResponse
     */
    public function listProjectsLogServices($projectsId, $optParams = array())
    {
        $params = array('projectsId' => $projectsId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Logging_ListLogServicesResponse");
    }
}