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

class Google_Service_MapsEngine_PolygonStyle extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $fillType = 'Google_Service_MapsEngine_Color';
    protected $fillDataType = '';
    protected $labelType = 'Google_Service_MapsEngine_LabelStyle';
    protected $labelDataType = '';
    protected $strokeType = 'Google_Service_MapsEngine_Border';
    protected $strokeDataType = '';


    public function setFill(Google_Service_MapsEngine_Color $fill)
    {
        $this->fill = $fill;
    }
    public function getFill()
    {
        return $this->fill;
    }
    public function setLabel(Google_Service_MapsEngine_LabelStyle $label)
    {
        $this->label = $label;
    }
    public function getLabel()
    {
        return $this->label;
    }
    public function setStroke(Google_Service_MapsEngine_Border $stroke)
    {
        $this->stroke = $stroke;
    }
    public function getStroke()
    {
        return $this->stroke;
    }
}
