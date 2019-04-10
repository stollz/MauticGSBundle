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

class Google_Service_Drive_Permission extends Google_Collection
{
    protected $collection_key = 'additionalRoles';
    protected $internal_gapi_mappings = array(
    );
    public $additionalRoles;
    public $authKey;
    public $domain;
    public $emailAddress;
    public $etag;
    public $id;
    public $kind;
    public $name;
    public $photoLink;
    public $role;
    public $selfLink;
    public $type;
    public $value;
    public $withLink;


    public function setAdditionalRoles($additionalRoles)
    {
        $this->additionalRoles = $additionalRoles;
    }
    public function getAdditionalRoles()
    {
        return $this->additionalRoles;
    }
    public function setAuthKey($authKey)
    {
        $this->authKey = $authKey;
    }
    public function getAuthKey()
    {
        return $this->authKey;
    }
    public function setDomain($domain)
    {
        $this->domain = $domain;
    }
    public function getDomain()
    {
        return $this->domain;
    }
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
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
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setPhotoLink($photoLink)
    {
        $this->photoLink = $photoLink;
    }
    public function getPhotoLink()
    {
        return $this->photoLink;
    }
    public function setRole($role)
    {
        $this->role = $role;
    }
    public function getRole()
    {
        return $this->role;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
    public function setWithLink($withLink)
    {
        $this->withLink = $withLink;
    }
    public function getWithLink()
    {
        return $this->withLink;
    }
}
