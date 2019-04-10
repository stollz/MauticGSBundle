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

class Google_Service_Drive_DriveFileLabels extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $hidden;
    public $restricted;
    public $starred;
    public $trashed;
    public $viewed;


    public function setHidden($hidden)
    {
        $this->hidden = $hidden;
    }
    public function getHidden()
    {
        return $this->hidden;
    }
    public function setRestricted($restricted)
    {
        $this->restricted = $restricted;
    }
    public function getRestricted()
    {
        return $this->restricted;
    }
    public function setStarred($starred)
    {
        $this->starred = $starred;
    }
    public function getStarred()
    {
        return $this->starred;
    }
    public function setTrashed($trashed)
    {
        $this->trashed = $trashed;
    }
    public function getTrashed()
    {
        return $this->trashed;
    }
    public function setViewed($viewed)
    {
        $this->viewed = $viewed;
    }
    public function getViewed()
    {
        return $this->viewed;
    }
}
