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

class Google_Service_Container_Cluster extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $clusterApiVersion;
    public $containerIpv4Cidr;
    public $creationTimestamp;
    public $description;
    public $enableCloudLogging;
    public $endpoint;
    protected $masterAuthType = 'Google_Service_Container_MasterAuth';
    protected $masterAuthDataType = '';
    public $name;
    public $network;
    protected $nodeConfigType = 'Google_Service_Container_NodeConfig';
    protected $nodeConfigDataType = '';
    public $nodeRoutingPrefixSize;
    public $numNodes;
    public $selfLink;
    public $servicesIpv4Cidr;
    public $status;
    public $statusMessage;
    public $zone;


    public function setClusterApiVersion($clusterApiVersion)
    {
        $this->clusterApiVersion = $clusterApiVersion;
    }
    public function getClusterApiVersion()
    {
        return $this->clusterApiVersion;
    }
    public function setContainerIpv4Cidr($containerIpv4Cidr)
    {
        $this->containerIpv4Cidr = $containerIpv4Cidr;
    }
    public function getContainerIpv4Cidr()
    {
        return $this->containerIpv4Cidr;
    }
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setEnableCloudLogging($enableCloudLogging)
    {
        $this->enableCloudLogging = $enableCloudLogging;
    }
    public function getEnableCloudLogging()
    {
        return $this->enableCloudLogging;
    }
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
    }
    public function getEndpoint()
    {
        return $this->endpoint;
    }
    public function setMasterAuth(Google_Service_Container_MasterAuth $masterAuth)
    {
        $this->masterAuth = $masterAuth;
    }
    public function getMasterAuth()
    {
        return $this->masterAuth;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setNetwork($network)
    {
        $this->network = $network;
    }
    public function getNetwork()
    {
        return $this->network;
    }
    public function setNodeConfig(Google_Service_Container_NodeConfig $nodeConfig)
    {
        $this->nodeConfig = $nodeConfig;
    }
    public function getNodeConfig()
    {
        return $this->nodeConfig;
    }
    public function setNodeRoutingPrefixSize($nodeRoutingPrefixSize)
    {
        $this->nodeRoutingPrefixSize = $nodeRoutingPrefixSize;
    }
    public function getNodeRoutingPrefixSize()
    {
        return $this->nodeRoutingPrefixSize;
    }
    public function setNumNodes($numNodes)
    {
        $this->numNodes = $numNodes;
    }
    public function getNumNodes()
    {
        return $this->numNodes;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setServicesIpv4Cidr($servicesIpv4Cidr)
    {
        $this->servicesIpv4Cidr = $servicesIpv4Cidr;
    }
    public function getServicesIpv4Cidr()
    {
        return $this->servicesIpv4Cidr;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatusMessage($statusMessage)
    {
        $this->statusMessage = $statusMessage;
    }
    public function getStatusMessage()
    {
        return $this->statusMessage;
    }
    public function setZone($zone)
    {
        $this->zone = $zone;
    }
    public function getZone()
    {
        return $this->zone;
    }
}