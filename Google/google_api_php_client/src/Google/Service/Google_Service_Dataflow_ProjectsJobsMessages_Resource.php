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
 * The "messages" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dataflowService = new Google_Service_Dataflow(...);
 *   $messages = $dataflowService->messages;
 *  </code>
 */
class Google_Service_Dataflow_ProjectsJobsMessages_Resource extends Google_Service_Resource
{

    /**
     * Request the job status. (messages.listProjectsJobsMessages)
     *
     * @param string $projectId
     * @param string $jobId
     * @param array $optParams Optional parameters.
     *
     * @opt_param int pageSize
     * @opt_param string pageToken
     * @opt_param string startTime
     * @opt_param string endTime
     * @opt_param string minimumImportance
     * @return Google_Service_Dataflow_ListJobMessagesResponse
     */
    public function listProjectsJobsMessages($projectId, $jobId, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'jobId' => $jobId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Dataflow_ListJobMessagesResponse");
    }
}