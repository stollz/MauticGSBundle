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
 * The "entries" collection of methods.
 * Typical usage is:
 *  <code>
 *   $loggingService = new Google_Service_Logging(...);
 *   $entries = $loggingService->entries;
 *  </code>
 */
class Google_Service_Logging_ProjectsLogsEntries_Resource extends Google_Service_Resource
{

    /**
     * Creates one or more log entries in a log. You must supply a list of
     * `LogEntry` objects, named `entries`. Each `LogEntry` object must contain a
     * payload object and a `LogEntryMetadata` object that describes the entry. You
     * must fill in all the fields of the entry, metadata, and payload. You can also
     * supply a map, `commonLabels`, that supplies default (key, value) data for the
     * `entries[].metadata.labels` maps, saving you the trouble of creating
     * identical copies for each entry. (entries.write)
     *
     * @param string $projectsId Part of `logName`. The name of the log resource
     * into which to insert the log entries.
     * @param string $logsId Part of `logName`. See documentation of `projectsId`.
     * @param Google_WriteLogEntriesRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Logging_WriteLogEntriesResponse
     */
    public function write($projectsId, $logsId, Google_Service_Logging_WriteLogEntriesRequest $postBody, $optParams = array())
    {
        $params = array('projectsId' => $projectsId, 'logsId' => $logsId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('write', array($params), "Google_Service_Logging_WriteLogEntriesResponse");
    }
}