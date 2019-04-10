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

class Google_Service_MapsEngine_LabelStyle extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $color;
    public $column;
    public $fontStyle;
    public $fontWeight;
    public $opacity;
    protected $outlineType = 'Google_Service_MapsEngine_Color';
    protected $outlineDataType = '';
    public $size;


    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setColumn($column)
    {
        $this->column = $column;
    }
    public function getColumn()
    {
        return $this->column;
    }
    public function setFontStyle($fontStyle)
    {
        $this->fontStyle = $fontStyle;
    }
    public function getFontStyle()
    {
        return $this->fontStyle;
    }
    public function setFontWeight($fontWeight)
    {
        $this->fontWeight = $fontWeight;
    }
    public function getFontWeight()
    {
        return $this->fontWeight;
    }
    public function setOpacity($opacity)
    {
        $this->opacity = $opacity;
    }
    public function getOpacity()
    {
        return $this->opacity;
    }
    public function setOutline(Google_Service_MapsEngine_Color $outline)
    {
        $this->outline = $outline;
    }
    public function getOutline()
    {
        return $this->outline;
    }
    public function setSize($size)
    {
        $this->size = $size;
    }
    public function getSize()
    {
        return $this->size;
    }
}
