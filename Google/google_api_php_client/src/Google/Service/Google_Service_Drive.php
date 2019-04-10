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
 * Service definition for Drive (v2).
 *
 * <p>
 * The API to interact with Drive.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/drive/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Drive extends Google_Service
{
  /** View and manage the files in your Google Drive. */
  const DRIVE =
      "https://www.googleapis.com/auth/drive";
  /** View and manage its own configuration data in your Google Drive. */
  const DRIVE_APPDATA =
      "https://www.googleapis.com/auth/drive.appdata";
  /** View your Google Drive apps. */
  const DRIVE_APPS_READONLY =
      "https://www.googleapis.com/auth/drive.apps.readonly";
  /** View and manage Google Drive files that you have opened or created with this app. */
  const DRIVE_FILE =
      "https://www.googleapis.com/auth/drive.file";
  /** View and manage metadata of files in your Google Drive. */
  const DRIVE_METADATA =
      "https://www.googleapis.com/auth/drive.metadata";
  /** View metadata for files in your Google Drive. */
  const DRIVE_METADATA_READONLY =
      "https://www.googleapis.com/auth/drive.metadata.readonly";
  /** View the files in your Google Drive. */
  const DRIVE_READONLY =
      "https://www.googleapis.com/auth/drive.readonly";
  /** Modify your Google Apps Script scripts' behavior. */
  const DRIVE_SCRIPTS =
      "https://www.googleapis.com/auth/drive.scripts";

  public $about;
  public $apps;
  public $changes;
  public $channels;
  public $children;
  public $comments;
  public $files;
  public $parents;
  public $permissions;
  public $properties;
  public $realtime;
  public $replies;
  public $revisions;
  

  /**
   * Constructs the internal representation of the Drive service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'drive/v2/';
    $this->version = 'v2';
    $this->serviceName = 'drive';

    $this->about = new Google_Service_Drive_About_Resource(
        $this,
        $this->serviceName,
        'about',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'about',
              'httpMethod' => 'GET',
              'parameters' => array(
                'includeSubscribed' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'maxChangeIdCount' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'startChangeId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->apps = new Google_Service_Drive_Apps_Resource(
        $this,
        $this->serviceName,
        'apps',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'apps/{appId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'appId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'apps',
              'httpMethod' => 'GET',
              'parameters' => array(
                'languageCode' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'appFilterExtensions' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'appFilterMimeTypes' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->changes = new Google_Service_Drive_Changes_Resource(
        $this,
        $this->serviceName,
        'changes',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'changes/{changeId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'changeId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'changes',
              'httpMethod' => 'GET',
              'parameters' => array(
                'includeSubscribed' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'startChangeId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'includeDeleted' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'watch' => array(
              'path' => 'changes/watch',
              'httpMethod' => 'POST',
              'parameters' => array(
                'includeSubscribed' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'startChangeId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'includeDeleted' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->channels = new Google_Service_Drive_Channels_Resource(
        $this,
        $this->serviceName,
        'channels',
        array(
          'methods' => array(
            'stop' => array(
              'path' => 'channels/stop',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->children = new Google_Service_Drive_Children_Resource(
        $this,
        $this->serviceName,
        'children',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'files/{folderId}/children/{childId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'folderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'childId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'files/{folderId}/children/{childId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'folderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'childId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'files/{folderId}/children',
              'httpMethod' => 'POST',
              'parameters' => array(
                'folderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'files/{folderId}/children',
              'httpMethod' => 'GET',
              'parameters' => array(
                'folderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'q' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->comments = new Google_Service_Drive_Comments_Resource(
        $this,
        $this->serviceName,
        'comments',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'files/{fileId}/comments/{commentId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'commentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'files/{fileId}/comments/{commentId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'commentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'includeDeleted' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'insert' => array(
              'path' => 'files/{fileId}/comments',
              'httpMethod' => 'POST',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'files/{fileId}/comments',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'updatedMin' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'includeDeleted' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'files/{fileId}/comments/{commentId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'commentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'files/{fileId}/comments/{commentId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'commentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->files = new Google_Service_Drive_Files_Resource(
        $this,
        $this->serviceName,
        'files',
        array(
          'methods' => array(
            'copy' => array(
              'path' => 'files/{fileId}/copy',
              'httpMethod' => 'POST',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'convert' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'ocrLanguage' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'visibility' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pinned' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'ocr' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'timedTextTrackName' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'timedTextLanguage' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'delete' => array(
              'path' => 'files/{fileId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'emptyTrash' => array(
              'path' => 'files/trash',
              'httpMethod' => 'DELETE',
              'parameters' => array(),
            ),'get' => array(
              'path' => 'files/{fileId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'acknowledgeAbuse' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'updateViewedDate' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'revisionId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projection' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'files',
              'httpMethod' => 'POST',
              'parameters' => array(
                'convert' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'useContentAsIndexableText' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'ocrLanguage' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'visibility' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pinned' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'ocr' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'timedTextTrackName' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'timedTextLanguage' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'files',
              'httpMethod' => 'GET',
              'parameters' => array(
                'q' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'corpus' => array(
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
              ),
            ),'patch' => array(
              'path' => 'files/{fileId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'addParents' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'updateViewedDate' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'removeParents' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'setModifiedDate' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'convert' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'useContentAsIndexableText' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'ocrLanguage' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pinned' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'newRevision' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'ocr' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'timedTextLanguage' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'timedTextTrackName' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'touch' => array(
              'path' => 'files/{fileId}/touch',
              'httpMethod' => 'POST',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'trash' => array(
              'path' => 'files/{fileId}/trash',
              'httpMethod' => 'POST',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'untrash' => array(
              'path' => 'files/{fileId}/untrash',
              'httpMethod' => 'POST',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'files/{fileId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'addParents' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'updateViewedDate' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'removeParents' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'setModifiedDate' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'convert' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'useContentAsIndexableText' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'ocrLanguage' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pinned' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'newRevision' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'ocr' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'timedTextLanguage' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'timedTextTrackName' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'watch' => array(
              'path' => 'files/{fileId}/watch',
              'httpMethod' => 'POST',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'acknowledgeAbuse' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'updateViewedDate' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'revisionId' => array(
                  'location' => 'query',
                  'type' => 'string',
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
    $this->parents = new Google_Service_Drive_Parents_Resource(
        $this,
        $this->serviceName,
        'parents',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'files/{fileId}/parents/{parentId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'parentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'files/{fileId}/parents/{parentId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'parentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'files/{fileId}/parents',
              'httpMethod' => 'POST',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'files/{fileId}/parents',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->permissions = new Google_Service_Drive_Permissions_Resource(
        $this,
        $this->serviceName,
        'permissions',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'files/{fileId}/permissions/{permissionId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'fileId' => array(
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
              'path' => 'files/{fileId}/permissions/{permissionId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fileId' => array(
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
            ),'getIdForEmail' => array(
              'path' => 'permissionIds/{email}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'email' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'files/{fileId}/permissions',
              'httpMethod' => 'POST',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'emailMessage' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sendNotificationEmails' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'list' => array(
              'path' => 'files/{fileId}/permissions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'files/{fileId}/permissions/{permissionId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'permissionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'transferOwnership' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'update' => array(
              'path' => 'files/{fileId}/permissions/{permissionId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'permissionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'transferOwnership' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->properties = new Google_Service_Drive_Properties_Resource(
        $this,
        $this->serviceName,
        'properties',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'files/{fileId}/properties/{propertyKey}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'propertyKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'visibility' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'get' => array(
              'path' => 'files/{fileId}/properties/{propertyKey}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'propertyKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'visibility' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'files/{fileId}/properties',
              'httpMethod' => 'POST',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'files/{fileId}/properties',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'files/{fileId}/properties/{propertyKey}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'propertyKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'visibility' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'update' => array(
              'path' => 'files/{fileId}/properties/{propertyKey}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'propertyKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'visibility' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->realtime = new Google_Service_Drive_Realtime_Resource(
        $this,
        $this->serviceName,
        'realtime',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'files/{fileId}/realtime',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'revision' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'update' => array(
              'path' => 'files/{fileId}/realtime',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'baseRevision' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->replies = new Google_Service_Drive_Replies_Resource(
        $this,
        $this->serviceName,
        'replies',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'files/{fileId}/comments/{commentId}/replies/{replyId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'commentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'replyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'files/{fileId}/comments/{commentId}/replies/{replyId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'commentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'replyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'includeDeleted' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'insert' => array(
              'path' => 'files/{fileId}/comments/{commentId}/replies',
              'httpMethod' => 'POST',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'commentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'files/{fileId}/comments/{commentId}/replies',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'commentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'includeDeleted' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'files/{fileId}/comments/{commentId}/replies/{replyId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'commentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'replyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'files/{fileId}/comments/{commentId}/replies/{replyId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'commentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'replyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->revisions = new Google_Service_Drive_Revisions_Resource(
        $this,
        $this->serviceName,
        'revisions',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'files/{fileId}/revisions/{revisionId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'revisionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'files/{fileId}/revisions/{revisionId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'revisionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'files/{fileId}/revisions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'files/{fileId}/revisions/{revisionId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'revisionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'files/{fileId}/revisions/{revisionId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'fileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'revisionId' => array(
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













