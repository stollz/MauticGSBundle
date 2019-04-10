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

class Google_Service_MapsEngine_ScalingFunction extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $column;
    public $scalingType;
    protected $sizeRangeType = 'Google_Service_MapsEngine_SizeRange';
    protected $sizeRangeDataType = '';
    protected $valueRangeType = 'Google_Service_MapsEngine_ValueRange';
    protected $valueRangeDataType = '';


    public function setColumn($column)
    {
        $this->column = $column;
    }
    public function getColumn()
    {
        return $this->column;
    }
    public function setScalingType($scalingType)
    {
        $this->scalingType = $scalingType;
    }
    public function getScalingType()
    {
        return $this->scalingType;
    }
    public function setSizeRange(Google_Service_MapsEngine_SizeRange $sizeRange)
    {
        $this->sizeRange = $sizeRange;
    }
    public function getSizeRange()
    {
        return $this->sizeRange;
    }
    public function setValueRange(Google_Service_MapsEngine_ValueRange $valueRange)
    {
        $this->valueRange = $valueRange;
    }
    public function getValueRange()
    {
        return $this->valueRange;
    }
}
