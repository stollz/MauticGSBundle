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
 * The "linux" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeaccountsService = new Google_Service_Computeaccounts(...);
 *   $linux = $computeaccountsService->linux;
 *  </code>
 */
class Google_Service_Computeaccounts_Linux_Resource extends Google_Service_Resource
{

    /**
     * Returns the AuthorizedKeysView of the specified user.
     * (linux.getAuthorizedKeysView)
     *
     * @param string $project Project ID for this request.
     * @param string $zone Name of the zone for this request.
     * @param string $user Username of the AuthorizedKeysView to return.
     * @param string $instance The fully-qualified URL of the instance requesting
     * the view.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Computeaccounts_LinuxGetAuthorizedKeysViewResponse
     */
    public function getAuthorizedKeysView($project, $zone, $user, $instance, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'user' => $user, 'instance' => $instance);
        $params = array_merge($params, $optParams);
        return $this->call('getAuthorizedKeysView', array($params), "Google_Service_Computeaccounts_LinuxGetAuthorizedKeysViewResponse");
    }

    /**
     * Retrieves the Linux views for an instance contained within the specified
     * project. (linux.getLinuxAccountViews)
     *
     * @param string $project Project ID for this request.
     * @param string $zone Name of the zone for this request.
     * @param string $instance The fully-qualified URL of the instance requesting
     * the views.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken Optional. Tag returned by a previous list request
     * truncated by maxResults. Used to continue a previous list request.
     * @opt_param string maxResults Optional. Maximum count of results to be
     * returned. Maximum value is 500 and default value is 500.
     * @opt_param string filter Optional. Filter expression for filtering listed
     * resources.
     * @opt_param string user If provided, the user whose login is triggering an
     * immediate refresh of the views.
     * @return Google_Service_Computeaccounts_LinuxGetLinuxAccountViewsResponse
     */
    public function getLinuxAccountViews($project, $zone, $instance, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
        $params = array_merge($params, $optParams);
        return $this->call('getLinuxAccountViews', array($params), "Google_Service_Computeaccounts_LinuxGetLinuxAccountViewsResponse");
    }
}