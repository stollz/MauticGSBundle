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
 * Service definition for TagManager (v1).
 *
 * <p>
 * API for accessing Tag Manager accounts and containers.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/tag-manager/api/v1/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_TagManager extends Google_Service
{
  /** Delete your Google Tag Manager containers. */
  const TAGMANAGER_DELETE_CONTAINERS =
      "https://www.googleapis.com/auth/tagmanager.delete.containers";
  /** Manage your Google Tag Manager containers. */
  const TAGMANAGER_EDIT_CONTAINERS =
      "https://www.googleapis.com/auth/tagmanager.edit.containers";
  /** Manage your Google Tag Manager container versions. */
  const TAGMANAGER_EDIT_CONTAINERVERSIONS =
      "https://www.googleapis.com/auth/tagmanager.edit.containerversions";
  /** Manage your Google Tag Manager accounts. */
  const TAGMANAGER_MANAGE_ACCOUNTS =
      "https://www.googleapis.com/auth/tagmanager.manage.accounts";
  /** Manage user permissions of your Google Tag Manager data. */
  const TAGMANAGER_MANAGE_USERS =
      "https://www.googleapis.com/auth/tagmanager.manage.users";
  /** Publish your Google Tag Manager containers. */
  const TAGMANAGER_PUBLISH =
      "https://www.googleapis.com/auth/tagmanager.publish";
  /** View your Google Tag Manager containers. */
  const TAGMANAGER_READONLY =
      "https://www.googleapis.com/auth/tagmanager.readonly";

  public $accounts;
  public $accounts_containers;
  public $accounts_containers_macros;
  public $accounts_containers_rules;
  public $accounts_containers_tags;
  public $accounts_containers_triggers;
  public $accounts_containers_variables;
  public $accounts_containers_versions;
  public $accounts_permissions;
  

  /**
   * Constructs the internal representation of the TagManager service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'tagmanager/v1/';
    $this->version = 'v1';
    $this->serviceName = 'tagmanager';

    $this->accounts = new Google_Service_TagManager_Accounts_Resource(
        $this,
        $this->serviceName,
        'accounts',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'accounts/{accountId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'accounts',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),'update' => array(
              'path' => 'accounts/{accountId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'fingerprint' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_containers = new Google_Service_TagManager_AccountsContainers_Resource(
        $this,
        $this->serviceName,
        'containers',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'accounts/{accountId}/containers',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'accounts/{accountId}/containers',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'fingerprint' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_containers_macros = new Google_Service_TagManager_AccountsContainersMacros_Resource(
        $this,
        $this->serviceName,
        'macros',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/macros',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/macros/{macroId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'macroId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/macros/{macroId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'macroId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/macros',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/macros/{macroId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'macroId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'fingerprint' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_containers_rules = new Google_Service_TagManager_AccountsContainersRules_Resource(
        $this,
        $this->serviceName,
        'rules',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/rules',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/rules/{ruleId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'ruleId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/rules/{ruleId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'ruleId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/rules',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/rules/{ruleId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'ruleId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'fingerprint' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_containers_tags = new Google_Service_TagManager_AccountsContainersTags_Resource(
        $this,
        $this->serviceName,
        'tags',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/tags',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/tags/{tagId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'tagId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/tags/{tagId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'tagId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/tags',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/tags/{tagId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'tagId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'fingerprint' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_containers_triggers = new Google_Service_TagManager_AccountsContainersTriggers_Resource(
        $this,
        $this->serviceName,
        'triggers',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/triggers',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/triggers/{triggerId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'triggerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/triggers/{triggerId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'triggerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/triggers',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/triggers/{triggerId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'triggerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'fingerprint' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_containers_variables = new Google_Service_TagManager_AccountsContainersVariables_Resource(
        $this,
        $this->serviceName,
        'variables',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/variables',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/variables/{variableId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'variableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/variables/{variableId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'variableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/variables',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/variables/{variableId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'variableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'fingerprint' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_containers_versions = new Google_Service_TagManager_AccountsContainersVersions_Resource(
        $this,
        $this->serviceName,
        'versions',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/versions',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/versions/{containerVersionId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerVersionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/versions/{containerVersionId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerVersionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/versions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'headers' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'publish' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/versions/{containerVersionId}/publish',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerVersionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'fingerprint' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'restore' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/versions/{containerVersionId}/restore',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerVersionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'undelete' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/versions/{containerVersionId}/undelete',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerVersionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'accounts/{accountId}/containers/{containerId}/versions/{containerVersionId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'containerVersionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'fingerprint' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_permissions = new Google_Service_TagManager_AccountsPermissions_Resource(
        $this,
        $this->serviceName,
        'permissions',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'accounts/{accountId}/permissions',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'accounts/{accountId}/permissions/{permissionId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'permissionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'accounts/{accountId}/permissions/{permissionId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'permissionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'accounts/{accountId}/permissions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'accounts/{accountId}/permissions/{permissionId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'permissionId' => array(
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












