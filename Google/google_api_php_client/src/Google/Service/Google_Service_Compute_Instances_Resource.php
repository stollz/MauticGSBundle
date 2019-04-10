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


/**
 * The "instances" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $instances = $computeService->instances;
 *  </code>
 */
class Google_Service_Compute_Instances_Resource extends Google_Service_Resource
{

    /**
     * Adds an access config to an instance's network interface.
     * (instances.addAccessConfig)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance The instance name for this request.
     * @param string $networkInterface The name of the network interface to add to
     * this instance.
     * @param Google_AccessConfig $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function addAccessConfig($project, $zone, $instance, $networkInterface, Google_Service_Compute_AccessConfig $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'networkInterface' => $networkInterface, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('addAccessConfig', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * (instances.aggregatedList)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed
     * resources.
     * @opt_param string pageToken Optional. Tag returned by a previous list request
     * truncated by maxResults. Used to continue a previous list request.
     * @opt_param string maxResults Optional. Maximum count of results to be
     * returned. Maximum value is 500 and default value is 500.
     * @return Google_Service_Compute_InstanceAggregatedList
     */
    public function aggregatedList($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = array_merge($params, $optParams);
        return $this->call('aggregatedList', array($params), "Google_Service_Compute_InstanceAggregatedList");
    }

    /**
     * Attaches a Disk resource to an instance. (instances.attachDisk)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance Instance name.
     * @param Google_AttachedDisk $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function attachDisk($project, $zone, $instance, Google_Service_Compute_AttachedDisk $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('attachDisk', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Deletes the specified Instance resource. For more information, see Shutting
     * down an instance. (instances.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance Name of the instance resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $zone, $instance, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Deletes an access config from an instance's network interface.
     * (instances.deleteAccessConfig)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance The instance name for this request.
     * @param string $accessConfig The name of the access config to delete.
     * @param string $networkInterface The name of the network interface.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function deleteAccessConfig($project, $zone, $instance, $accessConfig, $networkInterface, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'accessConfig' => $accessConfig, 'networkInterface' => $networkInterface);
        $params = array_merge($params, $optParams);
        return $this->call('deleteAccessConfig', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Detaches a disk from an instance. (instances.detachDisk)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance Instance name.
     * @param string $deviceName Disk device name to detach.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function detachDisk($project, $zone, $instance, $deviceName, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'deviceName' => $deviceName);
        $params = array_merge($params, $optParams);
        return $this->call('detachDisk', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Returns the specified instance resource. (instances.get)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the The name of the zone for this request..
     * @param string $instance Name of the instance resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Instance
     */
    public function get($project, $zone, $instance, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Compute_Instance");
    }

    /**
     * Returns the specified instance's serial port output.
     * (instances.getSerialPortOutput)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance Name of the instance scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int port Which COM port to retrieve data from.
     * @return Google_Service_Compute_SerialPortOutput
     */
    public function getSerialPortOutput($project, $zone, $instance, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
        $params = array_merge($params, $optParams);
        return $this->call('getSerialPortOutput', array($params), "Google_Service_Compute_SerialPortOutput");
    }

    /**
     * Creates an instance resource in the specified project using the data included
     * in the request. (instances.insert)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param Google_Instance $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, $zone, Google_Service_Compute_Instance $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Retrieves the list of instance resources contained within the specified zone.
     * (instances.listInstances)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed
     * resources.
     * @opt_param string pageToken Optional. Tag returned by a previous list request
     * truncated by maxResults. Used to continue a previous list request.
     * @opt_param string maxResults Optional. Maximum count of results to be
     * returned. Maximum value is 500 and default value is 500.
     * @return Google_Service_Compute_InstanceList
     */
    public function listInstances($project, $zone, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Compute_InstanceList");
    }

    /**
     * Performs a hard reset on the instance. (instances.reset)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance Name of the instance scoping this request.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function reset($project, $zone, $instance, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
        $params = array_merge($params, $optParams);
        return $this->call('reset', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Sets the auto-delete flag for a disk attached to an instance.
     * (instances.setDiskAutoDelete)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance The instance name.
     * @param bool $autoDelete Whether to auto-delete the disk when the instance is
     * deleted.
     * @param string $deviceName The device name of the disk to modify.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function setDiskAutoDelete($project, $zone, $instance, $autoDelete, $deviceName, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'autoDelete' => $autoDelete, 'deviceName' => $deviceName);
        $params = array_merge($params, $optParams);
        return $this->call('setDiskAutoDelete', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Sets metadata for the specified instance to the data included in the request.
     * (instances.setMetadata)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance Name of the instance scoping this request.
     * @param Google_Metadata $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function setMetadata($project, $zone, $instance, Google_Service_Compute_Metadata $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('setMetadata', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Sets an instance's scheduling options. (instances.setScheduling)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance Instance name.
     * @param Google_Scheduling $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function setScheduling($project, $zone, $instance, Google_Service_Compute_Scheduling $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('setScheduling', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * Sets tags for the specified instance to the data included in the request.
     * (instances.setTags)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance Name of the instance scoping this request.
     * @param Google_Tags $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function setTags($project, $zone, $instance, Google_Service_Compute_Tags $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('setTags', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * This method starts an instance that was stopped using the using the
     * instances().stop method. For more information, see Restart an instance.
     * (instances.start)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance Name of the instance resource to start.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function start($project, $zone, $instance, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
        $params = array_merge($params, $optParams);
        return $this->call('start', array($params), "Google_Service_Compute_Operation");
    }

    /**
     * This method stops a running instance, shutting it down cleanly, and allows
     * you to restart the instance at a later time. Stopped instances do not incur
     * per-minute, virtual machine usage charges while they are stopped, but any
     * resources that the virtual machine is using, such as persistent disks and
     * static IP addresses,will continue to be charged until they are deleted. For
     * more information, see Stopping an instance. (instances.stop)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance Name of the instance resource to start.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function stop($project, $zone, $instance, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
        $params = array_merge($params, $optParams);
        return $this->call('stop', array($params), "Google_Service_Compute_Operation");
    }
}