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
 * The "topics" collection of methods.
 * Typical usage is:
 *  <code>
 *   $pubsubService = new Google_Service_Pubsub(...);
 *   $topics = $pubsubService->topics;
 *  </code>
 */
class Google_Service_Pubsub_ProjectsTopics_Resource extends Google_Service_Resource
{

    /**
     * Creates the given topic with the given name. (topics.create)
     *
     * @param string $name
     * @param Google_Topic $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Pubsub_Topic
     */
    public function create($name, Google_Service_Pubsub_Topic $postBody, $optParams = array())
    {
        $params = array('name' => $name, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('create', array($params), "Google_Service_Pubsub_Topic");
    }

    /**
     * Deletes the topic with the given name. Returns NOT_FOUND if the topic does
     * not exist. After a topic is deleted, a new topic may be created with the same
     * name; this is an entirely new topic with none of the old configuration or
     * subscriptions. Existing subscriptions to this topic are not deleted.
     * (topics.delete)
     *
     * @param string $topic
     * @param array $optParams Optional parameters.
     * @return Google_Service_Pubsub_Empty
     */
    public function delete($topic, $optParams = array())
    {
        $params = array('topic' => $topic);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_Pubsub_Empty");
    }

    /**
     * Gets the configuration of a topic. (topics.get)
     *
     * @param string $topic
     * @param array $optParams Optional parameters.
     * @return Google_Service_Pubsub_Topic
     */
    public function get($topic, $optParams = array())
    {
        $params = array('topic' => $topic);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Pubsub_Topic");
    }

    /**
     * Lists matching topics. (topics.listProjectsTopics)
     *
     * @param string $project
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken
     * @opt_param int pageSize
     * @return Google_Service_Pubsub_ListTopicsResponse
     */
    public function listProjectsTopics($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Pubsub_ListTopicsResponse");
    }

    /**
     * Adds one or more messages to the topic. Returns NOT_FOUND if the topic does
     * not exist. (topics.publish)
     *
     * @param string $topic
     * @param Google_PublishRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Pubsub_PublishResponse
     */
    public function publish($topic, Google_Service_Pubsub_PublishRequest $postBody, $optParams = array())
    {
        $params = array('topic' => $topic, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('publish', array($params), "Google_Service_Pubsub_PublishResponse");
    }
}