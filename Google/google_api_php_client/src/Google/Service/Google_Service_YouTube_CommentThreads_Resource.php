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
 * The "commentThreads" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_Service_YouTube(...);
 *   $commentThreads = $youtubeService->commentThreads;
 *  </code>
 */
class Google_Service_YouTube_CommentThreads_Resource extends Google_Service_Resource
{

    /**
     * Creates a new comment thread and top level comment. (commentThreads.insert)
     *
     * @param string $part The part parameter serves two purposes in this operation.
     * It identifies the properties that the write operation will set as well as the
     * properties that the API response will include.
     *
     * The part names that you can include in the parameter value are id and
     * snippet. However only snippet contains properties that can be set.
     * @param Google_CommentThread $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool shareOnGooglePlus The shareOnGooglePlus determines whether
     * this thread should also be posted on Google+.
     * @return Google_Service_YouTube_CommentThread
     */
    public function insert($part, Google_Service_YouTube_CommentThread $postBody, $optParams = array())
    {
        $params = array('part' => $part, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_YouTube_CommentThread");
    }

    /**
     * Returns a list of comment threads that match the API request parameters.
     * (commentThreads.listCommentThreads)
     *
     * @param string $part The part parameter specifies the commentThread resource
     * parts that the API response will include. Supported values are id, snippet
     * and replies.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string searchTerms The searchTerms parameter instructs the API to
     * limit the returned comments to those which contain the specified search
     * terms.
     *
     * Note: This parameter is not supported for use in conjunction with the id
     * parameter.
     * @opt_param string allThreadsRelatedToChannelId The
     * allThreadsRelatedToChannelId parameter instructs the API to return the
     * comment threads of all videos of the channel and the channel comments as
     * well.
     * @opt_param string channelId The channelId parameter instructs the API to
     * return the comment threads for all the channel comments (not including
     * comments left on videos).
     * @opt_param string videoId The videoId parameter instructs the API to return
     * the comment threads for the video specified by the video id.
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
     * @opt_param string moderationStatus Set this parameter to limit the returned
     * comment threads to a particular moderation state.
     *
     * Note: This parameter is not supported for use in conjunction with the id
     * parameter.
     * @opt_param string textFormat Set this parameter's value to html or plainText
     * to instruct the API to return the comments left by users in html formatted or
     * in plain text.
     * @opt_param string id The id parameter specifies a comma-separated list of
     * comment thread IDs for the resources that should be retrieved.
     * @return Google_Service_YouTube_CommentThreadListResponse
     */
    public function listCommentThreads($part, $optParams = array())
    {
        $params = array('part' => $part);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_YouTube_CommentThreadListResponse");
    }

    /**
     * Modifies an existing comment. (commentThreads.update)
     *
     * @param string $part The part parameter serves two purposes in this operation.
     * It identifies the properties that the write operation will set as well as the
     * properties that the API response will include.
     *
     * The part names that you can include in the parameter value are id, snippet
     * and replies. However only snippet contains properties that can be updated.
     * @param Google_CommentThread $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_YouTube_CommentThread
     */
    public function update($part, Google_Service_YouTube_CommentThread $postBody, $optParams = array())
    {
        $params = array('part' => $part, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_YouTube_CommentThread");
    }
}