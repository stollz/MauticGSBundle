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

class Google_Service_MapsEngine_FeaturesBatchInsertRequest extends Google_Collection
{
    protected $collection_key = 'features';
    protected $internal_gapi_mappings = array(
    );
    protected $featuresType = 'Google_Service_MapsEngine_Feature';
    protected $featuresDataType = 'array';
    public $normalizeGeometries;


    public function setFeatures($features)
    {
        $this->features = $features;
    }
    public function getFeatures()
    {
        return $this->features;
    }
    public function setNormalizeGeometries($normalizeGeometries)
    {
        $this->normalizeGeometries = $normalizeGeometries;
    }
    public function getNormalizeGeometries()
    {
        return $this->normalizeGeometries;
    }
}
