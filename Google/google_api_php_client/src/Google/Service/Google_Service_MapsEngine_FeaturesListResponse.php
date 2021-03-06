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

class Google_Service_MapsEngine_FeaturesListResponse extends Google_Collection
{
    protected $collection_key = 'features';
    protected $internal_gapi_mappings = array(
    );
    public $allowedQueriesPerSecond;
    protected $featuresType = 'Google_Service_MapsEngine_Feature';
    protected $featuresDataType = 'array';
    public $nextPageToken;
    protected $schemaType = 'Google_Service_MapsEngine_Schema';
    protected $schemaDataType = '';
    public $type;


    public function setAllowedQueriesPerSecond($allowedQueriesPerSecond)
    {
        $this->allowedQueriesPerSecond = $allowedQueriesPerSecond;
    }
    public function getAllowedQueriesPerSecond()
    {
        return $this->allowedQueriesPerSecond;
    }
    public function setFeatures($features)
    {
        $this->features = $features;
    }
    public function getFeatures()
    {
        return $this->features;
    }
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
    public function setSchema(Google_Service_MapsEngine_Schema $schema)
    {
        $this->schema = $schema;
    }
    public function getSchema()
    {
        return $this->schema;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
}
