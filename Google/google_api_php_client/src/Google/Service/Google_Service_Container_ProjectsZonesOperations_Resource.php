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
 *   $containerService = new Google_Service_Container(...);
 *   $operations = $containerService->operations;
 *  </code>
 */
class Google_Service_Container_ProjectsZonesOperations_Resource extends Google_Service_Resource
{

    /**
     * Gets the specified operation. (operations.get)
     *
     * @param string $projectId The Google Developers Console project ID or  project
     * number.
     * @param string $zoneId The name of the Google Compute Engine zone in which the
     * operation resides. This is always the same zone as the cluster with which the
     * operation is associated.
     * @param string $operationId The server-assigned name of the operation.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Container_Operation
     */
    public function get($projectId, $zoneId, $operationId, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'zoneId' => $zoneId, 'operationId' => $operationId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Container_Operation");
    }

    /**
     * Lists all operations in a project in a specific zone.
     * (operations.listProjectsZonesOperations)
     *
     * @param string $projectId The Google Developers Console project ID or  project
     * number.
     * @param string $zoneId The name of the Google Compute Engine zone to return
     * operations for.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Container_ListOperationsResponse
     */
    public function listProjectsZonesOperations($projectId, $zoneId, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'zoneId' => $zoneId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Container_ListOperationsResponse");
    }
}