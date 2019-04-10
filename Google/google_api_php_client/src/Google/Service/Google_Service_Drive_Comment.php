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

class Google_Service_Drive_Comment extends Google_Collection
{
    protected $collection_key = 'replies';
    protected $internal_gapi_mappings = array(
    );
    public $anchor;
    protected $authorType = 'Google_Service_Drive_User';
    protected $authorDataType = '';
    public $commentId;
    public $content;
    protected $contextType = 'Google_Service_Drive_CommentContext';
    protected $contextDataType = '';
    public $createdDate;
    public $deleted;
    public $fileId;
    public $fileTitle;
    public $htmlContent;
    public $kind;
    public $modifiedDate;
    protected $repliesType = 'Google_Service_Drive_CommentReply';
    protected $repliesDataType = 'array';
    public $selfLink;
    public $status;


    public function setAnchor($anchor)
    {
        $this->anchor = $anchor;
    }
    public function getAnchor()
    {
        return $this->anchor;
    }
    public function setAuthor(Google_Service_Drive_User $author)
    {
        $this->author = $author;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function setCommentId($commentId)
    {
        $this->commentId = $commentId;
    }
    public function getCommentId()
    {
        return $this->commentId;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }
    public function getContent()
    {
        return $this->content;
    }
    public function setContext(Google_Service_Drive_CommentContext $context)
    {
        $this->context = $context;
    }
    public function getContext()
    {
        return $this->context;
    }
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
    }
    public function getCreatedDate()
    {
        return $this->createdDate;
    }
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }
    public function getDeleted()
    {
        return $this->deleted;
    }
    public function setFileId($fileId)
    {
        $this->fileId = $fileId;
    }
    public function getFileId()
    {
        return $this->fileId;
    }
    public function setFileTitle($fileTitle)
    {
        $this->fileTitle = $fileTitle;
    }
    public function getFileTitle()
    {
        return $this->fileTitle;
    }
    public function setHtmlContent($htmlContent)
    {
        $this->htmlContent = $htmlContent;
    }
    public function getHtmlContent()
    {
        return $this->htmlContent;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setModifiedDate($modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;
    }
    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }
    public function setReplies($replies)
    {
        $this->replies = $replies;
    }
    public function getReplies()
    {
        return $this->replies;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }
}
