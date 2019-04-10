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
 * The "channels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_Service_YouTube(...);
 *   $channels = $youtubeService->channels;
 *  </code>
 */
class Google_Service_YouTube_Channels_Resource extends Google_Service_Resource
{

    /**
     * Returns a collection of zero or more channel resources that match the request
     * criteria. (channels.listChannels)
     *
     * @param string $part The part parameter specifies a comma-separated list of
     * one or more channel resource properties that the API response will include.
     * The part names that you can include in the parameter value are id, snippet,
     * contentDetails, statistics, topicDetails, and invideoPromotion.
     *
     * If the parameter identifies a property that contains child properties, the
     * child properties will be included in the response. For example, in a channel
     * resource, the contentDetails property contains other properties, such as the
     * uploads properties. As such, if you set part=contentDetails, the API response
     * will also contain all of those nested properties.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool managedByMe Set this parameter's value to true to instruct
     * the API to only return channels managed by the content owner that the
     * onBehalfOfContentOwner parameter specifies. The user must be authenticated as
     * a CMS account linked to the specified content owner and
     * onBehalfOfContentOwner must be provided.
     * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
     * indicates that the authenticated user is acting on behalf of the content
     * owner specified in the parameter value. This parameter is intended for
     * YouTube content partners that own and manage many different YouTube channels.
     * It allows content owners to authenticate once and get access to all their
     * video and channel data, without having to provide authentication credentials
     * for each individual channel. The actual CMS account that the user
     * authenticates with needs to be linked to the specified YouTube content owner.
     * @opt_param string forUsername The forUsername parameter specifies a YouTube
     * username, thereby requesting the channel associated with that username.
     * @opt_param bool mine Set this parameter's value to true to instruct the API
     * to only return channels owned by the authenticated user.
     * @opt_param string maxResults The maxResults parameter specifies the maximum
     * number of items that should be returned in the result set.
     * @opt_param string id The id parameter specifies a comma-separated list of the
     * YouTube channel ID(s) for the resource(s) that are being retrieved. In a
     * channel resource, the id property specifies the channel's YouTube channel ID.
     * @opt_param string pageToken The pageToken parameter identifies a specific
     * page in the result set that should be returned. In an API response, the
     * nextPageToken and prevPageToken properties identify other pages that could be
     * retrieved.
     * @opt_param bool mySubscribers Set this parameter's value to true to retrieve
     * a list of channels that subscribed to the authenticated user's channel.
     * @opt_param string hl The hl parameter should be used for filter out the
     * properties that are not in the given language. Used for the brandingSettings
     * part.
     * @opt_param string categoryId The categoryId parameter specifies a YouTube
     * guide category, thereby requesting YouTube channels associated with that
     * category.
     * @return Google_Service_YouTube_ChannelListResponse
     */
    public function listChannels($part, $optParams = array())
    {
        $params = array('part' => $part);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_YouTube_ChannelListResponse");
    }

    /**
     * Updates a channel's metadata. (channels.update)
     *
     * @param string $part The part parameter serves two purposes in this operation.
     * It identifies the properties that the write operation will set as well as the
     * properties that the API response will include.
     *
     * The part names that you can include in the parameter value are id and
     * invideoPromotion.
     *
     * Note that this method will override the existing values for all of the
     * mutable properties that are contained in any parts that the parameter value
     * specifies.
     * @param Google_Channel $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
     * indicates that the authenticated user is acting on behalf of the content
     * owner specified in the parameter value. This parameter is intended for
     * YouTube content partners that own and manage many different YouTube channels.
     * It allows content owners to authenticate once and get access to all their
     * video and channel data, without having to provide authentication credentials
     * for each individual channel. The actual CMS account that the user
     * authenticates with needs to be linked to the specified YouTube content owner.
     * @return Google_Service_YouTube_Channel
     */
    public function update($part, Google_Service_YouTube_Channel $postBody, $optParams = array())
    {
        $params = array('part' => $part, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_YouTube_Channel");
    }
}