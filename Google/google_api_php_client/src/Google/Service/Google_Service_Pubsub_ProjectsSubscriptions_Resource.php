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
 * The "subscriptions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $pubsubService = new Google_Service_Pubsub(...);
 *   $subscriptions = $pubsubService->subscriptions;
 *  </code>
 */
class Google_Service_Pubsub_ProjectsSubscriptions_Resource extends Google_Service_Resource
{

    /**
     * Acknowledges the messages associated with the ack tokens in the
     * AcknowledgeRequest. The Pub/Sub system can remove the relevant messages from
     * the subscription. Acknowledging a message whose ack deadline has expired may
     * succeed, but such a message may be redelivered later. Acknowledging a message
     * more than once will not result in an error. (subscriptions.acknowledge)
     *
     * @param string $subscription
     * @param Google_AcknowledgeRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Pubsub_Empty
     */
    public function acknowledge($subscription, Google_Service_Pubsub_AcknowledgeRequest $postBody, $optParams = array())
    {
        $params = array('subscription' => $subscription, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('acknowledge', array($params), "Google_Service_Pubsub_Empty");
    }

    /**
     * Creates a subscription to a given topic for a given subscriber. If the
     * subscription already exists, returns ALREADY_EXISTS. If the corresponding
     * topic doesn't exist, returns NOT_FOUND. If the name is not provided in the
     * request, the server will assign a random name for this subscription on the
     * same project as the topic. (subscriptions.create)
     *
     * @param string $name
     * @param Google_Subscription $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Pubsub_Subscription
     */
    public function create($name, Google_Service_Pubsub_Subscription $postBody, $optParams = array())
    {
        $params = array('name' => $name, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('create', array($params), "Google_Service_Pubsub_Subscription");
    }

    /**
     * Deletes an existing subscription. All pending messages in the subscription
     * are immediately dropped. Calls to Pull after deletion will return NOT_FOUND.
     * After a subscription is deleted, a new one may be created with the same name,
     * but the new one has no association with the old subscription, or its topic
     * unless the same topic is specified. (subscriptions.delete)
     *
     * @param string $subscription
     * @param array $optParams Optional parameters.
     * @return Google_Service_Pubsub_Empty
     */
    public function delete($subscription, $optParams = array())
    {
        $params = array('subscription' => $subscription);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_Pubsub_Empty");
    }

    /**
     * Gets the configuration details of a subscription. (subscriptions.get)
     *
     * @param string $subscription
     * @param array $optParams Optional parameters.
     * @return Google_Service_Pubsub_Subscription
     */
    public function get($subscription, $optParams = array())
    {
        $params = array('subscription' => $subscription);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Pubsub_Subscription");
    }

    /**
     * Lists matching subscriptions. (subscriptions.listProjectsSubscriptions)
     *
     * @param string $project
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken
     * @opt_param int pageSize
     * @return Google_Service_Pubsub_ListSubscriptionsResponse
     */
    public function listProjectsSubscriptions($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Pubsub_ListSubscriptionsResponse");
    }

    /**
     * Modifies the ack deadline for a specific message. This method is useful to
     * indicate that more time is needed to process a message by the subscriber, or
     * to make the message available for redelivery if the processing was
     * interrupted. (subscriptions.modifyAckDeadline)
     *
     * @param string $subscription
     * @param Google_ModifyAckDeadlineRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Pubsub_Empty
     */
    public function modifyAckDeadline($subscription, Google_Service_Pubsub_ModifyAckDeadlineRequest $postBody, $optParams = array())
    {
        $params = array('subscription' => $subscription, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('modifyAckDeadline', array($params), "Google_Service_Pubsub_Empty");
    }

    /**
     * Modifies the PushConfig for a specified subscription. This may be used to
     * change a push subscription to a pull one (signified by an empty PushConfig)
     * or vice versa, or change the endpoint URL and other attributes of a push
     * subscription. Messages will accumulate for delivery continuously through the
     * call regardless of changes to the PushConfig.
     * (subscriptions.modifyPushConfig)
     *
     * @param string $subscription
     * @param Google_ModifyPushConfigRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Pubsub_Empty
     */
    public function modifyPushConfig($subscription, Google_Service_Pubsub_ModifyPushConfigRequest $postBody, $optParams = array())
    {
        $params = array('subscription' => $subscription, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('modifyPushConfig', array($params), "Google_Service_Pubsub_Empty");
    }

    /**
     * Pulls messages from the server. Returns an empty list if there are no
     * messages available in the backlog. The server may return UNAVAILABLE if there
     * are too many concurrent pull requests pending for the given subscription.
     * (subscriptions.pull)
     *
     * @param string $subscription
     * @param Google_PullRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Pubsub_PullResponse
     */
    public function pull($subscription, Google_Service_Pubsub_PullRequest $postBody, $optParams = array())
    {
        $params = array('subscription' => $subscription, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('pull', array($params), "Google_Service_Pubsub_PullResponse");
    }
}