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

class Google_Service_MapsEngine_DisplayRule extends Google_Collection
{
    protected $collection_key = 'filters';
    protected $internal_gapi_mappings = array(
    );
    protected $filtersType = 'Google_Service_MapsEngine_Filter';
    protected $filtersDataType = 'array';
    protected $lineOptionsType = 'Google_Service_MapsEngine_LineStyle';
    protected $lineOptionsDataType = '';
    public $name;
    protected $pointOptionsType = 'Google_Service_MapsEngine_PointStyle';
    protected $pointOptionsDataType = '';
    protected $polygonOptionsType = 'Google_Service_MapsEngine_PolygonStyle';
    protected $polygonOptionsDataType = '';
    protected $zoomLevelsType = 'Google_Service_MapsEngine_ZoomLevels';
    protected $zoomLevelsDataType = '';


    public function setFilters($filters)
    {
        $this->filters = $filters;
    }
    public function getFilters()
    {
        return $this->filters;
    }
    public function setLineOptions(Google_Service_MapsEngine_LineStyle $lineOptions)
    {
        $this->lineOptions = $lineOptions;
    }
    public function getLineOptions()
    {
        return $this->lineOptions;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setPointOptions(Google_Service_MapsEngine_PointStyle $pointOptions)
    {
        $this->pointOptions = $pointOptions;
    }
    public function getPointOptions()
    {
        return $this->pointOptions;
    }
    public function setPolygonOptions(Google_Service_MapsEngine_PolygonStyle $polygonOptions)
    {
        $this->polygonOptions = $polygonOptions;
    }
    public function getPolygonOptions()
    {
        return $this->polygonOptions;
    }
    public function setZoomLevels(Google_Service_MapsEngine_ZoomLevels $zoomLevels)
    {
        $this->zoomLevels = $zoomLevels;
    }
    public function getZoomLevels()
    {
        return $this->zoomLevels;
    }
}
