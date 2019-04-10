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
 * The "firewalls" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $firewalls = $computeService->firewalls;
 *  </code>
 */
class Google_Service_Compute_Firewalls_Resource extends Google_Service_Resource
{

    /**
     * Deletes the specified firewall resource. (firewalls.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $firewall Name of the firewall resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $firewall, $optParams = array())
    {
        $params = array('project' => $project, 'firewall' => $firewall);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Returns the specified firewall resource. (firewalls.get)
     *
     * @param string $project Project ID for this request.
     * @param string $firewall Name of the firewall resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Firewall
     */
    public function get($project, $firewall, $optParams = array())
    {
        $params = array('project' => $project, 'firewall' => $firewall);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Compute_Firewall");
    }

    /**
     * Creates a firewall resource in the specified project using the data included
     * in the request. (firewalls.insert)
     *
     * @param string $project Project ID for this request.
     * @param Google_Firewall $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, Google_Service_Compute_Firewall $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Retrieves the list of firewall resources available to the specified project.
     * (firewalls.listFirewalls)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed
     * resources.
     * @opt_param string pageToken Optional. Tag returned by a previous list request
     * truncated by maxResults. Used to continue a previous list request.
     * @opt_param string maxResults Optional. Maximum count of results to be
     * returned. Maximum value is 500 and default value is 500.
     * @return Google_Service_Compute_FirewallList
     */
    public function listFirewalls($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Compute_FirewallList");
    }

    /**
     * Updates the specified firewall resource with the data included in the
     * request. This method supports patch semantics. (firewalls.patch)
     *
     * @param string $project Project ID for this request.
     * @param string $firewall Name of the firewall resource to update.
     * @param Google_Firewall $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function patch($project, $firewall, Google_Service_Compute_Firewall $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'firewall' => $firewall, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Updates the specified firewall resource with the data included in the
     * request. (firewalls.update)
     *
     * @param string $project Project ID for this request.
     * @param string $firewall Name of the firewall resource to update.
     * @param Google_Firewall $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function update($project, $firewall, Google_Service_Compute_Firewall $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'firewall' => $firewall, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Compute_Operation");
    }
}
