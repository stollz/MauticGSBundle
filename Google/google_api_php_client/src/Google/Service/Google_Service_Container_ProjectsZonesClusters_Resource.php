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
 * The "clusters" collection of methods.
 * Typical usage is:
 *  <code>
 *   $containerService = new Google_Service_Container(...);
 *   $clusters = $containerService->clusters;
 *  </code>
 */
class Google_Service_Container_ProjectsZonesClusters_Resource extends Google_Service_Resource
{

    /**
     * Creates a cluster, consisting of the specified number and type of Google
     * Compute Engine instances, plus a Kubernetes master instance.
     *
     * The cluster is created in the project's default network.
     *
     * A firewall is added that allows traffic into port 443 on the master, which
     * enables HTTPS. A firewall and a route is added for each node to allow the
     * containers on that node to communicate with all other instances in the
     * cluster.
     *
     * Finally, a route named k8s-iproute-10-xx-0-0 is created to track that the
     * cluster's 10.xx.0.0/16 CIDR has been assigned. (clusters.create)
     *
     * @param string $projectId The Google Developers Console project ID or  project
     * number.
     * @param string $zoneId The name of the Google Compute Engine zone in which the
     * cluster resides.
     * @param Google_CreateClusterRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Container_Operation
     */
    public function create($projectId, $zoneId, Google_Service_Container_CreateClusterRequest $postBody, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'zoneId' => $zoneId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('create', array($params), "Google_Service_Container_Operation");
    }

    /**
     * Deletes the cluster, including the Kubernetes master and all worker nodes.
     *
     * Firewalls and routes that were configured at cluster creation are also
     * deleted. (clusters.delete)
     *
     * @param string $projectId The Google Developers Console project ID or  project
     * number.
     * @param string $zoneId The name of the Google Compute Engine zone in which the
     * cluster resides.
     * @param string $clusterId The name of the cluster to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Container_Operation
     */
    public function delete($projectId, $zoneId, $clusterId, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'zoneId' => $zoneId, 'clusterId' => $clusterId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_Container_Operation");
    }

    /**
     * Gets a specific cluster. (clusters.get)
     *
     * @param string $projectId The Google Developers Console project ID or  project
     * number.
     * @param string $zoneId The name of the Google Compute Engine zone in which the
     * cluster resides.
     * @param string $clusterId The name of the cluster to retrieve.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Container_Cluster
     */
    public function get($projectId, $zoneId, $clusterId, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'zoneId' => $zoneId, 'clusterId' => $clusterId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Container_Cluster");
    }

    /**
     * Lists all clusters owned by a project in the specified zone.
     * (clusters.listProjectsZonesClusters)
     *
     * @param string $projectId The Google Developers Console project ID or  project
     * number.
     * @param string $zoneId The name of the Google Compute Engine zone in which the
     * cluster resides.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Container_ListClustersResponse
     */
    public function listProjectsZonesClusters($projectId, $zoneId, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'zoneId' => $zoneId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Container_ListClustersResponse");
    }
}