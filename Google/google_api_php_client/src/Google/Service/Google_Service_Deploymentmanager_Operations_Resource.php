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
 * The "operations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $deploymentmanagerService = new Google_Service_Deploymentmanager(...);
 *   $operations = $deploymentmanagerService->operations;
 *  </code>
 */
class Google_Service_Deploymentmanager_Operations_Resource extends Google_Service_Resource
{

    /**
     * ! Gets information about a specific Operation. (operations.get)
     *
     * @param string $project ! The project ID for this request.
     * @param string $operation ! The name of the operation for this request.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Deploymentmanager_Operation
     */
    public function get($project, $operation, $optParams = array())
    {
        $params = array('project' => $project, 'operation' => $operation);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Deploymentmanager_Operation");
    }

    /**
     * ! Lists all Operations for a project. (operations.listOperations)
     *
     * @param string $project ! The project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken ! Specifies a nextPageToken returned by a
     * previous list request. This ! token can be used to request the next page of
     * results from a previous ! list request.
     * @opt_param int maxResults ! Maximum count of results to be returned. !
     * Acceptable values are 0 to 100, inclusive. (Default: 50)
     * @return Google_Service_Deploymentmanager_OperationsListResponse
     */
    public function listOperations($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Deploymentmanager_OperationsListResponse");
    }
}
