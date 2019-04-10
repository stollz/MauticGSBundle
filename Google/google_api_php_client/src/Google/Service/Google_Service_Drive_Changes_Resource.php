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
 * The "changes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $changes = $driveService->changes;
 *  </code>
 */
class Google_Service_Drive_Changes_Resource extends Google_Service_Resource
{

    /**
     * Gets a specific change. (changes.get)
     *
     * @param string $changeId The ID of the change.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_Change
     */
    public function get($changeId, $optParams = array())
    {
        $params = array('changeId' => $changeId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Drive_Change");
    }

    /**
     * Lists the changes for a user. (changes.listChanges)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeSubscribed Whether to include public files the user
     * has opened and shared files. When set to false, the list only includes owned
     * files plus any shared or public files the user has explicitly added to a
     * folder they own.
     * @opt_param string startChangeId Change ID to start listing changes from.
     * @opt_param bool includeDeleted Whether to include deleted items.
     * @opt_param int maxResults Maximum number of changes to return.
     * @opt_param string pageToken Page token for changes.
     * @return Google_Service_Drive_ChangeList
     */
    public function listChanges($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Drive_ChangeList");
    }

    /**
     * Subscribe to changes for a user. (changes.watch)
     *
     * @param Google_Channel $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeSubscribed Whether to include public files the user
     * has opened and shared files. When set to false, the list only includes owned
     * files plus any shared or public files the user has explicitly added to a
     * folder they own.
     * @opt_param string startChangeId Change ID to start listing changes from.
     * @opt_param bool includeDeleted Whether to include deleted items.
     * @opt_param int maxResults Maximum number of changes to return.
     * @opt_param string pageToken Page token for changes.
     * @return Google_Service_Drive_Channel
     */
    public function watch(Google_Service_Drive_Channel $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('watch', array($params), "Google_Service_Drive_Channel");
    }
}