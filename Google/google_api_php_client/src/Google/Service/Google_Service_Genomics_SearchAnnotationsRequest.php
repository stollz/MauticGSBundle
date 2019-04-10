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



class Google_Service_Genomics_SearchAnnotationsRequest extends Google_Collection
{
    protected $collection_key = 'annotationSetIds';
    protected $internal_gapi_mappings = array(
    );
    public $annotationSetIds;
    public $pageSize;
    public $pageToken;
    protected $rangeType = 'Google_Service_Genomics_QueryRange';
    protected $rangeDataType = '';


    public function setAnnotationSetIds($annotationSetIds)
    {
        $this->annotationSetIds = $annotationSetIds;
    }
    public function getAnnotationSetIds()
    {
        return $this->annotationSetIds;
    }
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }
    public function getPageSize()
    {
        return $this->pageSize;
    }
    public function setPageToken($pageToken)
    {
        $this->pageToken = $pageToken;
    }
    public function getPageToken()
    {
        return $this->pageToken;
    }
    public function setRange(Google_Service_Genomics_QueryRange $range)
    {
        $this->range = $range;
    }
    public function getRange()
    {
        return $this->range;
    }
}