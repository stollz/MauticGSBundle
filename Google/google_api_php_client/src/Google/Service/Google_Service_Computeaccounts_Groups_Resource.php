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
 * The "groups" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeaccountsService = new Google_Service_Computeaccounts(...);
 *   $groups = $computeaccountsService->groups;
 *  </code>
 */
class Google_Service_Computeaccounts_Groups_Resource extends Google_Service_Resource
{

    /**
     * Adds users to the specified group. (groups.addMember)
     *
     * @param string $project Project ID for this request.
     * @param string $groupName Name of the group for this request.
     * @param Google_GroupsAddMemberRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Computeaccounts_Operation
     */
    public function addMember($project, $groupName, Google_Service_Computeaccounts_GroupsAddMemberRequest $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'groupName' => $groupName, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('addMember', array($params), "Google_Service_Computeaccounts_Operation");
    }

    /**
     * Deletes the specified group resource. (groups.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $groupName Name of the group resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Computeaccounts_Operation
     */
    public function delete($project, $groupName, $optParams = array())
    {
        $params = array('project' => $project, 'groupName' => $groupName);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_Computeaccounts_Operation");
    }

    /**
     * Returns the specified group resource. (groups.get)
     *
     * @param string $project Project ID for this request.
     * @param string $groupName Name of the group resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Computeaccounts_Group
     */
    public function get($project, $groupName, $optParams = array())
    {
        $params = array('project' => $project, 'groupName' => $groupName);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Computeaccounts_Group");
    }

    /**
     * Creates a group resource in the specified project using the data included in
     * the request. (groups.insert)
     *
     * @param string $project Project ID for this request.
     * @param Google_Group $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Computeaccounts_Operation
     */
    public function insert($project, Google_Service_Computeaccounts_Group $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Computeaccounts_Operation");
    }

    /**
     * Retrieves the list of groups contained within the specified project.
     * (groups.listGroups)
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
     * @return Google_Service_Computeaccounts_GroupList
     */
    public function listGroups($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Computeaccounts_GroupList");
    }

    /**
     * Removes users from the specified group. (groups.removeMember)
     *
     * @param string $project Project ID for this request.
     * @param string $groupName Name of the group for this request.
     * @param Google_GroupsRemoveMemberRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Computeaccounts_Operation
     */
    public function removeMember($project, $groupName, Google_Service_Computeaccounts_GroupsRemoveMemberRequest $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'groupName' => $groupName, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('removeMember', array($params), "Google_Service_Computeaccounts_Operation");
    }
}
