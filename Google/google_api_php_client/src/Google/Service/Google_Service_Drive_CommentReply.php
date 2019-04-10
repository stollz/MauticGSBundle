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

class Google_Service_Drive_CommentReply extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $authorType = 'Google_Service_Drive_User';
    protected $authorDataType = '';
    public $content;
    public $createdDate;
    public $deleted;
    public $htmlContent;
    public $kind;
    public $modifiedDate;
    public $replyId;
    public $verb;


    public function setAuthor(Google_Service_Drive_User $author)
    {
        $this->author = $author;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }
    public function getContent()
    {
        return $this->content;
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
    public function setReplyId($replyId)
    {
        $this->replyId = $replyId;
    }
    public function getReplyId()
    {
        return $this->replyId;
    }
    public function setVerb($verb)
    {
        $this->verb = $verb;
    }
    public function getVerb()
    {
        return $this->verb;
    }
}
