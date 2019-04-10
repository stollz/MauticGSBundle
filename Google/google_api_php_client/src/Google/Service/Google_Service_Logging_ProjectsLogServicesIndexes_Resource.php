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
 * The "indexes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $loggingService = new Google_Service_Logging(...);
 *   $indexes = $loggingService->indexes;
 *  </code>
 */
class Google_Service_Logging_ProjectsLogServicesIndexes_Resource extends Google_Service_Resource
{

    /**
     * Lists log service indexes associated with a log service.
     * (indexes.listProjectsLogServicesIndexes)
     *
     * @param string $projectsId Part of `serviceName`. A log service resource of
     * the form `/projects/logServices`. The service indexes of the log service are
     * returned. Example: `"/projects/myProj/logServices/appengine.googleapis.com"`.
     * @param string $logServicesId Part of `serviceName`. See documentation of
     * `projectsId`.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string log A log resource like
     * `/projects/project_id/logs/log_name`, identifying the log for which to list
     * service indexes.
     * @opt_param int pageSize The maximum number of log service index resources to
     * return in one operation.
     * @opt_param string pageToken An opaque token, returned as `nextPageToken` by a
     * prior `ListLogServiceIndexes` operation. If `pageToken` is supplied, then the
     * other fields of this request are ignored, and instead the previous
     * `ListLogServiceIndexes` operation is continued.
     * @opt_param int depth A limit to the number of levels of the index hierarchy
     * that are expanded. If `depth` is 0, it defaults to the level specified by the
     * prefix field (the number of slash separators). The default empty prefix
     * implies a `depth` of 1. It is an error for `depth` to be any non-zero value
     * less than the number of components in `indexPrefix`.
     * @opt_param string indexPrefix Restricts the indexes returned to be those with
     * a specified prefix. The prefix has the form `"/label_value/label_value/..."`,
     * in order corresponding to the [`LogService
     * indexKeys`][google.logging.v1.LogService.index_keys]. Non-empty prefixes must
     * begin with `/` . Example prefixes: + `"/myModule/"` retrieves App Engine
     * versions associated with `myModule`. The trailing slash terminates the value.
     * + `"/myModule"` retrieves App Engine modules with names beginning with
     * `myModule`. + `""` retrieves all indexes.
     * @return Google_Service_Logging_ListLogServiceIndexesResponse
     */
    public function listProjectsLogServicesIndexes($projectsId, $logServicesId, $optParams = array())
    {
        $params = array('projectsId' => $projectsId, 'logServicesId' => $logServicesId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Logging_ListLogServiceIndexesResponse");
    }
}