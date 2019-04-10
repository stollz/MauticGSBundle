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


class Google_Service_Container_NodeConfig extends Google_Collection
{
    protected $collection_key = 'serviceAccounts';
    protected $internal_gapi_mappings = array(
    );
    public $machineType;
    protected $serviceAccountsType = 'Google_Service_Container_ServiceAccount';
    protected $serviceAccountsDataType = 'array';
    public $sourceImage;


    public function setMachineType($machineType)
    {
        $this->machineType = $machineType;
    }
    public function getMachineType()
    {
        return $this->machineType;
    }
    public function setServiceAccounts($serviceAccounts)
    {
        $this->serviceAccounts = $serviceAccounts;
    }
    public function getServiceAccounts()
    {
        return $this->serviceAccounts;
    }
    public function setSourceImage($sourceImage)
    {
        $this->sourceImage = $sourceImage;
    }
    public function getSourceImage()
    {
        return $this->sourceImage;
    }
}