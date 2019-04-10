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
 * The "comments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_Service_YouTube(...);
 *   $comments = $youtubeService->comments;
 *  </code>
 */
class Google_Service_YouTube_Comments_Resource extends Google_Service_Resource
{

    /**
     * Deletes a comment. (comments.delete)
     *
     * @param string $id The id parameter specifies the comment ID for the resource
     * that should be deleted.
     * @param array $optParams Optional parameters.
     */
    public function delete($id, $optParams = array())
    {
        $params = array('id' => $id);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Creates a new comment.
     *
     * Note: to create a top level comment it is also necessary to create a comment
     * thread. Both are accomplished through the commentThreads resource.
     * (comments.insert)
     *
     * @param string $part The part parameter serves two purposes in this operation.
     * It identifies the properties that the write operation will set as well as the
     * properties that the API response will include.
     *
     * The part names that you can include in the parameter value are id and
     * snippet. However only snippet contains properties that can be set.
     * @param Google_Comment $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_YouTube_Comment
     */
    public function insert($part, Google_Service_YouTube_Comment $postBody, $optParams = array())
    {
        $params = array('part' => $part, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_YouTube_Comment");
    }

    /**
     * Returns a list of comments that match the API request parameters.
     * (comments.listComments)
     *
     * @param string $part The part parameter specifies the comment resource parts
     * that the API response will include. Supported values are id and snippet.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults The maxResults parameter specifies the maximum
     * number of items that should be returned in the result set.
     *
     * Note: This parameter is not supported for use in conjunction with the id
     * parameter.
     * @opt_param string pageToken The pageToken parameter identifies a specific
     * page in the result set that should be returned. In an API response, the
     * nextPageToken property identifies the next page of the result that can be
     * retrieved.
     *
     * Note: This parameter is not supported for use in conjunction with the id
     * parameter.
     * @opt_param string parentId The parentId parameter specifies the ID of the
     * comment for which replies should be retrieved.
     *
     * Note: Currently YouTube features only one level of replies (ie replies to top
     * level comments). However replies to replies may be supported in the future.
     * @opt_param string textFormat Set this parameter's value to html or plainText
     * to instruct the API to return the comments left by users formatted as HTML or
     * as plain text.
     * @opt_param string id The id parameter specifies a comma-separated list of
     * comment IDs for the resources that should be retrieved.
     * @return Google_Service_YouTube_CommentListResponse
     */
    public function listComments($part, $optParams = array())
    {
        $params = array('part' => $part);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_YouTube_CommentListResponse");
    }

    /**
     * Expresses the caller's opinion that a comment is spam. (comments.markAsSpam)
     *
     * @param string $id The id parameter specifies a comma-separated list of IDs of
     * comments which should get flagged as spam.
     * @param array $optParams Optional parameters.
     */
    public function markAsSpam($id, $optParams = array())
    {
        $params = array('id' => $id);
        $params = array_merge($params, $optParams);
        return $this->call('markAsSpam', array($params));
    }

    /**
     * Sets the moderation status of one or more comments.
     * (comments.setModerationStatus)
     *
     * @param string $id The id parameter specifies a comma-separated list of IDs of
     * comments whose moderation status should be updated.
     * @param string $moderationStatus Determines the new moderation status of the
     * specified comments.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool banAuthor The banAuthor paramter, if set to true, adds the
     * author of the comment to the ban list. This means all future comments of the
     * author will autmomatically be rejected.
     *
     * Note: This parameter is only valid in combination with moderationStatus
     * 'rejected'.
     */
    public function setModerationStatus($id, $moderationStatus, $optParams = array())
    {
        $params = array('id' => $id, 'moderationStatus' => $moderationStatus);
        $params = array_merge($params, $optParams);
        return $this->call('setModerationStatus', array($params));
    }

    /**
     * Modifies an existing comment. (comments.update)
     *
     * @param string $part The part parameter serves two purposes in this operation.
     * It identifies the properties that the write operation will set as well as the
     * properties that the API response will include.
     *
     * The part names that you can include in the parameter value are id and
     * snippet. However only snippet contains properties that can be updated.
     * @param Google_Comment $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_YouTube_Comment
     */
    public function update($part, Google_Service_YouTube_Comment $postBody, $optParams = array())
    {
        $params = array('part' => $part, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_YouTube_Comment");
    }
}