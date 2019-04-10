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
 * Service definition for Directory (directory_v1).
 *
 * <p>
 * The Admin SDK Directory API lets you view and manage enterprise resources
 * such as users and groups, administrative notifications, security features,
 * and more.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/admin-sdk/directory/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Directory extends Google_Service
{
  /** View and manage your Chrome OS devices' metadata. */
  const ADMIN_DIRECTORY_DEVICE_CHROMEOS =
      "https://www.googleapis.com/auth/admin.directory.device.chromeos";
  /** View your Chrome OS devices' metadata. */
  const ADMIN_DIRECTORY_DEVICE_CHROMEOS_READONLY =
      "https://www.googleapis.com/auth/admin.directory.device.chromeos.readonly";
  /** View and manage your mobile devices' metadata. */
  const ADMIN_DIRECTORY_DEVICE_MOBILE =
      "https://www.googleapis.com/auth/admin.directory.device.mobile";
  /** Manage your mobile devices by performing administrative tasks. */
  const ADMIN_DIRECTORY_DEVICE_MOBILE_ACTION =
      "https://www.googleapis.com/auth/admin.directory.device.mobile.action";
  /** View your mobile devices' metadata. */
  const ADMIN_DIRECTORY_DEVICE_MOBILE_READONLY =
      "https://www.googleapis.com/auth/admin.directory.device.mobile.readonly";
  /** View and manage the provisioning of groups on your domain. */
  const ADMIN_DIRECTORY_GROUP =
      "https://www.googleapis.com/auth/admin.directory.group";
  /** View and manage group subscriptions on your domain. */
  const ADMIN_DIRECTORY_GROUP_MEMBER =
      "https://www.googleapis.com/auth/admin.directory.group.member";
  /** View group subscriptions on your domain. */
  const ADMIN_DIRECTORY_GROUP_MEMBER_READONLY =
      "https://www.googleapis.com/auth/admin.directory.group.member.readonly";
  /** View groups on your domain. */
  const ADMIN_DIRECTORY_GROUP_READONLY =
      "https://www.googleapis.com/auth/admin.directory.group.readonly";
  /** View and manage notifications received on your domain. */
  const ADMIN_DIRECTORY_NOTIFICATIONS =
      "https://www.googleapis.com/auth/admin.directory.notifications";
  /** View and manage organization units on your domain. */
  const ADMIN_DIRECTORY_ORGUNIT =
      "https://www.googleapis.com/auth/admin.directory.orgunit";
  /** View organization units on your domain. */
  const ADMIN_DIRECTORY_ORGUNIT_READONLY =
      "https://www.googleapis.com/auth/admin.directory.orgunit.readonly";
  /** View and manage the provisioning of users on your domain. */
  const ADMIN_DIRECTORY_USER =
      "https://www.googleapis.com/auth/admin.directory.user";
  /** View and manage user aliases on your domain. */
  const ADMIN_DIRECTORY_USER_ALIAS =
      "https://www.googleapis.com/auth/admin.directory.user.alias";
  /** View user aliases on your domain. */
  const ADMIN_DIRECTORY_USER_ALIAS_READONLY =
      "https://www.googleapis.com/auth/admin.directory.user.alias.readonly";
  /** View users on your domain. */
  const ADMIN_DIRECTORY_USER_READONLY =
      "https://www.googleapis.com/auth/admin.directory.user.readonly";
  /** Manage data access permissions for users on your domain. */
  const ADMIN_DIRECTORY_USER_SECURITY =
      "https://www.googleapis.com/auth/admin.directory.user.security";
  /** View and manage the provisioning of user schemas on your domain. */
  const ADMIN_DIRECTORY_USERSCHEMA =
      "https://www.googleapis.com/auth/admin.directory.userschema";
  /** View user schemas on your domain. */
  const ADMIN_DIRECTORY_USERSCHEMA_READONLY =
      "https://www.googleapis.com/auth/admin.directory.userschema.readonly";

  public $asps;
  public $channels;
  public $chromeosdevices;
  public $groups;
  public $groups_aliases;
  public $members;
  public $mobiledevices;
  public $notifications;
  public $orgunits;
  public $schemas;
  public $tokens;
  public $users;
  public $users_aliases;
  public $users_photos;
  public $verificationCodes;
  

  /**
   * Constructs the internal representation of the Directory service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'admin/directory/v1/';
    $this->version = 'directory_v1';
    $this->serviceName = 'admin';

    $this->asps = new Google_Service_Directory_Asps_Resource(
        $this,
        $this->serviceName,
        'asps',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'users/{userKey}/asps/{codeId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'codeId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'users/{userKey}/asps/{codeId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'codeId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'users/{userKey}/asps',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->channels = new Google_Service_Directory_Channels_Resource(
        $this,
        $this->serviceName,
        'channels',
        array(
          'methods' => array(
            'stop' => array(
              'path' => '/admin/directory_v1/channels/stop',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->chromeosdevices = new Google_Service_Directory_Chromeosdevices_Resource(
        $this,
        $this->serviceName,
        'chromeosdevices',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'customer/{customerId}/devices/chromeos/{deviceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'deviceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'projection' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'customer/{customerId}/devices/chromeos',
              'httpMethod' => 'GET',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orderBy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projection' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'query' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'customer/{customerId}/devices/chromeos/{deviceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'deviceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'projection' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'update' => array(
              'path' => 'customer/{customerId}/devices/chromeos/{deviceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'deviceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'projection' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->groups = new Google_Service_Directory_Groups_Resource(
        $this,
        $this->serviceName,
        'groups',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'groups/{groupKey}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'groupKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'groups/{groupKey}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'groupKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'groups',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'groups',
              'httpMethod' => 'GET',
              'parameters' => array(
                'customer' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'domain' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'userKey' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'groups/{groupKey}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'groupKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'groups/{groupKey}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'groupKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->groups_aliases = new Google_Service_Directory_GroupsAliases_Resource(
        $this,
        $this->serviceName,
        'aliases',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'groups/{groupKey}/aliases/{alias}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'groupKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'alias' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'groups/{groupKey}/aliases',
              'httpMethod' => 'POST',
              'parameters' => array(
                'groupKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'groups/{groupKey}/aliases',
              'httpMethod' => 'GET',
              'parameters' => array(
                'groupKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->members = new Google_Service_Directory_Members_Resource(
        $this,
        $this->serviceName,
        'members',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'groups/{groupKey}/members/{memberKey}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'groupKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'memberKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'groups/{groupKey}/members/{memberKey}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'groupKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'memberKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'groups/{groupKey}/members',
              'httpMethod' => 'POST',
              'parameters' => array(
                'groupKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'groups/{groupKey}/members',
              'httpMethod' => 'GET',
              'parameters' => array(
                'groupKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'roles' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'groups/{groupKey}/members/{memberKey}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'groupKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'memberKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'groups/{groupKey}/members/{memberKey}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'groupKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'memberKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->mobiledevices = new Google_Service_Directory_Mobiledevices_Resource(
        $this,
        $this->serviceName,
        'mobiledevices',
        array(
          'methods' => array(
            'action' => array(
              'path' => 'customer/{customerId}/devices/mobile/{resourceId}/action',
              'httpMethod' => 'POST',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'customer/{customerId}/devices/mobile/{resourceId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'customer/{customerId}/devices/mobile/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'projection' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'customer/{customerId}/devices/mobile',
              'httpMethod' => 'GET',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orderBy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projection' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'query' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->notifications = new Google_Service_Directory_Notifications_Resource(
        $this,
        $this->serviceName,
        'notifications',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'customer/{customer}/notifications/{notificationId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'customer' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'notificationId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'customer/{customer}/notifications/{notificationId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'customer' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'notificationId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'customer/{customer}/notifications',
              'httpMethod' => 'GET',
              'parameters' => array(
                'customer' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'customer/{customer}/notifications/{notificationId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'customer' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'notificationId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'customer/{customer}/notifications/{notificationId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'customer' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'notificationId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->orgunits = new Google_Service_Directory_Orgunits_Resource(
        $this,
        $this->serviceName,
        'orgunits',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'customer/{customerId}/orgunits{/orgUnitPath*}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orgUnitPath' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'repeated' => true,
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'customer/{customerId}/orgunits{/orgUnitPath*}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orgUnitPath' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'repeated' => true,
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'customer/{customerId}/orgunits',
              'httpMethod' => 'POST',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'customer/{customerId}/orgunits',
              'httpMethod' => 'GET',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'type' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'orgUnitPath' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'customer/{customerId}/orgunits{/orgUnitPath*}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orgUnitPath' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'repeated' => true,
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'customer/{customerId}/orgunits{/orgUnitPath*}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orgUnitPath' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'repeated' => true,
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->schemas = new Google_Service_Directory_Schemas_Resource(
        $this,
        $this->serviceName,
        'schemas',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'customer/{customerId}/schemas/{schemaKey}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'schemaKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'customer/{customerId}/schemas/{schemaKey}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'schemaKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'customer/{customerId}/schemas',
              'httpMethod' => 'POST',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'customer/{customerId}/schemas',
              'httpMethod' => 'GET',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'customer/{customerId}/schemas/{schemaKey}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'schemaKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'customer/{customerId}/schemas/{schemaKey}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'schemaKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->tokens = new Google_Service_Directory_Tokens_Resource(
        $this,
        $this->serviceName,
        'tokens',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'users/{userKey}/tokens/{clientId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'clientId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'users/{userKey}/tokens/{clientId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'clientId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'users/{userKey}/tokens',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->users = new Google_Service_Directory_Users_Resource(
        $this,
        $this->serviceName,
        'users',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'users/{userKey}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'users/{userKey}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'viewType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'customFieldMask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projection' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'users',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'users',
              'httpMethod' => 'GET',
              'parameters' => array(
                'customer' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'orderBy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'domain' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projection' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'showDeleted' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'customFieldMask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'query' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'viewType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'event' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'makeAdmin' => array(
              'path' => 'users/{userKey}/makeAdmin',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'users/{userKey}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'undelete' => array(
              'path' => 'users/{userKey}/undelete',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'users/{userKey}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'watch' => array(
              'path' => 'users/watch',
              'httpMethod' => 'POST',
              'parameters' => array(
                'customer' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'orderBy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'domain' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projection' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'showDeleted' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'customFieldMask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'query' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'viewType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'event' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->users_aliases = new Google_Service_Directory_UsersAliases_Resource(
        $this,
        $this->serviceName,
        'aliases',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'users/{userKey}/aliases/{alias}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'alias' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'users/{userKey}/aliases',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'users/{userKey}/aliases',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'event' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'watch' => array(
              'path' => 'users/{userKey}/aliases/watch',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'event' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->users_photos = new Google_Service_Directory_UsersPhotos_Resource(
        $this,
        $this->serviceName,
        'photos',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'users/{userKey}/photos/thumbnail',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'users/{userKey}/photos/thumbnail',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'users/{userKey}/photos/thumbnail',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'users/{userKey}/photos/thumbnail',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->verificationCodes = new Google_Service_Directory_VerificationCodes_Resource(
        $this,
        $this->serviceName,
        'verificationCodes',
        array(
          'methods' => array(
            'generate' => array(
              'path' => 'users/{userKey}/verificationCodes/generate',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'invalidate' => array(
              'path' => 'users/{userKey}/verificationCodes/invalidate',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'users/{userKey}/verificationCodes',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}










