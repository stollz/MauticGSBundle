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

class Google_Service_Drive_Change extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $deleted;
    protected $fileType = 'Google_Service_Drive_DriveFile';
    protected $fileDataType = '';
    public $fileId;
    public $id;
    public $kind;
    public $modificationDate;
    public $selfLink;


    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }
    public function getDeleted()
    {
        return $this->deleted;
    }
    public function setFile(Google_Service_Drive_DriveFile $file)
    {
        $this->file = $file;
    }
    public function getFile()
    {
        return $this->file;
    }
    public function setFileId($fileId)
    {
        $this->fileId = $fileId;
    }
    public function getFileId()
    {
        return $this->fileId;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setModificationDate($modificationDate)
    {
        $this->modificationDate = $modificationDate;
    }
    public function getModificationDate()
    {
        return $this->modificationDate;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
