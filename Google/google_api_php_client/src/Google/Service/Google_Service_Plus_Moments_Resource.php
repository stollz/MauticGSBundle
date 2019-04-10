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
 * The "moments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusService = new Google_Service_Plus(...);
 *   $moments = $plusService->moments;
 *  </code>
 */
class Google_Service_Plus_Moments_Resource extends Google_Service_Resource
{

    /**
     * Record a moment representing a user's action such as making a purchase or
     * commenting on a blog. (moments.insert)
     *
     * @param string $userId The ID of the user to record actions for. The only
     * valid values are "me" and the ID of the authenticated user.
     * @param string $collection The collection to which to write moments.
     * @param Google_Moment $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool debug Return the moment as written. Should be used only for
     * debugging.
     * @return Google_Service_Plus_Moment
     */
    public function insert($userId, $collection, Google_Service_Plus_Moment $postBody, $optParams = array())
    {
        $params = array('userId' => $userId, 'collection' => $collection, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Plus_Moment");
    }

    /**
     * List all of the moments for a particular user. (moments.listMoments)
     *
     * @param string $userId The ID of the user to get moments for. The special
     * value "me" can be used to indicate the authenticated user.
     * @param string $collection The collection of moments to list.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults The maximum number of moments to include in the
     * response, which is used for paging. For any response, the actual number
     * returned might be less than the specified maxResults.
     * @opt_param string pageToken The continuation token, which is used to page
     * through large result sets. To get the next page of results, set this
     * parameter to the value of "nextPageToken" from the previous response.
     * @opt_param string targetUrl Only moments containing this targetUrl will be
     * returned.
     * @opt_param string type Only moments of this type will be returned.
     * @return Google_Service_Plus_MomentsFeed
     */
    public function listMoments($userId, $collection, $optParams = array())
    {
        $params = array('userId' => $userId, 'collection' => $collection);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Plus_MomentsFeed");
    }

    /**
     * Delete a moment. (moments.remove)
     *
     * @param string $id The ID of the moment to delete.
     * @param array $optParams Optional parameters.
     */
    public function remove($id, $optParams = array())
    {
        $params = array('id' => $id);
        $params = array_merge($params, $optParams);
        return $this->call('remove', array($params));
    }
}