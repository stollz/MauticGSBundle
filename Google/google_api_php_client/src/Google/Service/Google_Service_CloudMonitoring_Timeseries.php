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

class Google_Service_CloudMonitoring_Timeseries extends Google_Collection
{
    protected $collection_key = 'points';
    protected $internal_gapi_mappings = array(
    );
    protected $pointsType = 'Google_Service_CloudMonitoring_Point';
    protected $pointsDataType = 'array';
    protected $timeseriesDescType = 'Google_Service_CloudMonitoring_TimeseriesDescriptor';
    protected $timeseriesDescDataType = '';


    public function setPoints($points)
    {
        $this->points = $points;
    }
    public function getPoints()
    {
        return $this->points;
    }
    public function setTimeseriesDesc(Google_Service_CloudMonitoring_TimeseriesDescriptor $timeseriesDesc)
    {
        $this->timeseriesDesc = $timeseriesDesc;
    }
    public function getTimeseriesDesc()
    {
        return $this->timeseriesDesc;
    }
}