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

class Google_Service_Drive_User extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $displayName;
    public $emailAddress;
    public $isAuthenticatedUser;
    public $kind;
    public $permissionId;
    protected $pictureType = 'Google_Service_Drive_UserPicture';
    protected $pictureDataType = '';


    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
    public function getDisplayName()
    {
        return $this->displayName;
    }
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }
    public function setIsAuthenticatedUser($isAuthenticatedUser)
    {
        $this->isAuthenticatedUser = $isAuthenticatedUser;
    }
    public function getIsAuthenticatedUser()
    {
        return $this->isAuthenticatedUser;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setPermissionId($permissionId)
    {
        $this->permissionId = $permissionId;
    }
    public function getPermissionId()
    {
        return $this->permissionId;
    }
    public function setPicture(Google_Service_Drive_UserPicture $picture)
    {
        $this->picture = $picture;
    }
    public function getPicture()
    {
        return $this->picture;
    }
}
