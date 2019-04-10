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

class Google_Service_Admin_MailItem extends Google_Collection
{
    protected $collection_key = 'labels';
    protected $internal_gapi_mappings = array(
    );
    public $isDeleted;
    public $isDraft;
    public $isInbox;
    public $isSent;
    public $isStarred;
    public $isTrash;
    public $isUnread;
    public $kind;
    public $labels;


    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
    }
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }
    public function setIsDraft($isDraft)
    {
        $this->isDraft = $isDraft;
    }
    public function getIsDraft()
    {
        return $this->isDraft;
    }
    public function setIsInbox($isInbox)
    {
        $this->isInbox = $isInbox;
    }
    public function getIsInbox()
    {
        return $this->isInbox;
    }
    public function setIsSent($isSent)
    {
        $this->isSent = $isSent;
    }
    public function getIsSent()
    {
        return $this->isSent;
    }
    public function setIsStarred($isStarred)
    {
        $this->isStarred = $isStarred;
    }
    public function getIsStarred()
    {
        return $this->isStarred;
    }
    public function setIsTrash($isTrash)
    {
        $this->isTrash = $isTrash;
    }
    public function getIsTrash()
    {
        return $this->isTrash;
    }
    public function setIsUnread($isUnread)
    {
        $this->isUnread = $isUnread;
    }
    public function getIsUnread()
    {
        return $this->isUnread;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setLabels($labels)
    {
        $this->labels = $labels;
    }
    public function getLabels()
    {
        return $this->labels;
    }
}