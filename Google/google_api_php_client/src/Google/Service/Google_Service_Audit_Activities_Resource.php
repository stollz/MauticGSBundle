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
 * The "activities" collection of methods.
 * Typical usage is:
 *  <code>
 *   $auditService = new Google_Service_Audit(...);
 *   $activities = $auditService->activities;
 *  </code>
 */
class Google_Service_Audit_Activities_Resource extends Google_Service_Resource
{

    /**
     * Retrieves a list of activities for a specific customer and application.
     * (activities.listActivities)
     *
     * @param string $customerId Represents the customer who is the owner of target
     * object on which action was performed.
     * @param string $applicationId Application ID of the application on which the
     * event was performed.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string actorEmail Email address of the user who performed the
     * action.
     * @opt_param string actorApplicationId Application ID of the application which
     * interacted on behalf of the user while performing the event.
     * @opt_param string actorIpAddress IP Address of host where the event was
     * performed. Supports both IPv4 and IPv6 addresses.
     * @opt_param string caller Type of the caller.
     * @opt_param int maxResults Number of activity records to be shown in each
     * page.
     * @opt_param string eventName Name of the event being queried.
     * @opt_param string startTime Return events which occured at or after this
     * time.
     * @opt_param string endTime Return events which occured at or before this time.
     * @opt_param string continuationToken Next page URL.
     * @return Google_Service_Audit_Activities
     */
    public function listActivities($customerId, $applicationId, $optParams = array())
    {
        $params = array('customerId' => $customerId, 'applicationId' => $applicationId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Audit_Activities");
    }
}
