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
 * The "replies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $replies = $driveService->replies;
 *  </code>
 */
class Google_Service_Drive_Replies_Resource extends Google_Service_Resource
{

    /**
     * Deletes a reply. (replies.delete)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param string $replyId The ID of the reply.
     * @param array $optParams Optional parameters.
     */
    public function delete($fileId, $commentId, $replyId, $optParams = array())
    {
        $params = array('fileId' => $fileId, 'commentId' => $commentId, 'replyId' => $replyId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Gets a reply. (replies.get)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param string $replyId The ID of the reply.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeDeleted If set, this will succeed when retrieving a
     * deleted reply.
     * @return Google_Service_Drive_CommentReply
     */
    public function get($fileId, $commentId, $replyId, $optParams = array())
    {
        $params = array('fileId' => $fileId, 'commentId' => $commentId, 'replyId' => $replyId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Drive_CommentReply");
    }

    /**
     * Creates a new reply to the given comment. (replies.insert)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param Google_CommentReply $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_CommentReply
     */
    public function insert($fileId, $commentId, Google_Service_Drive_CommentReply $postBody, $optParams = array())
    {
        $params = array('fileId' => $fileId, 'commentId' => $commentId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Drive_CommentReply");
    }

    /**
     * Lists all of the replies to a comment. (replies.listReplies)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken The continuation token, used to page through
     * large result sets. To get the next page of results, set this parameter to the
     * value of "nextPageToken" from the previous response.
     * @opt_param bool includeDeleted If set, all replies, including deleted replies
     * (with content stripped) will be returned.
     * @opt_param int maxResults The maximum number of replies to include in the
     * response, used for paging.
     * @return Google_Service_Drive_CommentReplyList
     */
    public function listReplies($fileId, $commentId, $optParams = array())
    {
        $params = array('fileId' => $fileId, 'commentId' => $commentId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Drive_CommentReplyList");
    }

    /**
     * Updates an existing reply. This method supports patch semantics.
     * (replies.patch)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param string $replyId The ID of the reply.
     * @param Google_CommentReply $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_CommentReply
     */
    public function patch($fileId, $commentId, $replyId, Google_Service_Drive_CommentReply $postBody, $optParams = array())
    {
        $params = array('fileId' => $fileId, 'commentId' => $commentId, 'replyId' => $replyId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Drive_CommentReply");
    }

    /**
     * Updates an existing reply. (replies.update)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param string $replyId The ID of the reply.
     * @param Google_CommentReply $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_CommentReply
     */
    public function update($fileId, $commentId, $replyId, Google_Service_Drive_CommentReply $postBody, $optParams = array())
    {
        $params = array('fileId' => $fileId, 'commentId' => $commentId, 'replyId' => $replyId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Drive_CommentReply");
    }
}
