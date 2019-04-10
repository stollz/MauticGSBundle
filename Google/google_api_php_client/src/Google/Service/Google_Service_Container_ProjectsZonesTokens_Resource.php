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
 * The "tokens" collection of methods.
 * Typical usage is:
 *  <code>
 *   $containerService = new Google_Service_Container(...);
 *   $tokens = $containerService->tokens;
 *  </code>
 */
class Google_Service_Container_ProjectsZonesTokens_Resource extends Google_Service_Resource
{

    /**
     * Gets a compute-rw scoped OAuth2 access token for . Authentication is
     * performed to ensure that the caller is a member of  and that the request is
     * coming from the expected master VM for the specified cluster. See go/gke-
     * cross-project-auth for more details. (tokens.get)
     *
     * @param string $masterProjectId The hosted master project from which this
     * request is coming.
     * @param string $zoneId The zone of the specified cluster.
     * @param string $projectNumber The project number for which the access token is
     * being requested.
     * @param string $clusterName The name of the specified cluster.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Container_Token
     */
    public function get($masterProjectId, $zoneId, $projectNumber, $clusterName, $optParams = array())
    {
        $params = array('masterProjectId' => $masterProjectId, 'zoneId' => $zoneId, 'projectNumber' => $projectNumber, 'clusterName' => $clusterName);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Container_Token");
    }
}

