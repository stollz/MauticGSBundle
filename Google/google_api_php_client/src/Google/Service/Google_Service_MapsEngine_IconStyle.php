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

class Google_Service_MapsEngine_IconStyle extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $id;
    public $name;
    protected $scaledShapeType = 'Google_Service_MapsEngine_ScaledShape';
    protected $scaledShapeDataType = '';
    protected $scalingFunctionType = 'Google_Service_MapsEngine_ScalingFunction';
    protected $scalingFunctionDataType = '';


    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setScaledShape(Google_Service_MapsEngine_ScaledShape $scaledShape)
    {
        $this->scaledShape = $scaledShape;
    }
    public function getScaledShape()
    {
        return $this->scaledShape;
    }
    public function setScalingFunction(Google_Service_MapsEngine_ScalingFunction $scalingFunction)
    {
        $this->scalingFunction = $scalingFunction;
    }
    public function getScalingFunction()
    {
        return $this->scalingFunction;
    }
}
