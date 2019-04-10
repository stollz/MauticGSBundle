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
 * The "clusters" collection of methods.
 * Typical usage is:
 *  <code>
 *   $containerService = new Google_Service_Container(...);
 *   $clusters = $containerService->clusters;
 *  </code>
 */
class Google_Service_Container_ProjectsClusters_Resource extends Google_Service_Resource
{

    /**
     * Lists all clusters owned by a project across all zones.
     * (clusters.listProjectsClusters)
     *
     * @param string $projectId The Google Developers Console project ID or  project
     * number.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Container_ListAggregatedClustersResponse
     */
    public function listProjectsClusters($projectId, $optParams = array())
    {
        $params = array('projectId' => $projectId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Container_ListAggregatedClustersResponse");
    }
}