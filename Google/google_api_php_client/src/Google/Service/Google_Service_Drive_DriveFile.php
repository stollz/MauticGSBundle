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

class Google_Service_Drive_DriveFile extends Google_Collection
{
    protected $collection_key = 'properties';
    protected $internal_gapi_mappings = array(
    );
    public $alternateLink;
    public $appDataContents;
    public $copyable;
    public $createdDate;
    public $defaultOpenWithLink;
    public $description;
    public $downloadUrl;
    public $editable;
    public $embedLink;
    public $etag;
    public $explicitlyTrashed;
    public $exportLinks;
    public $fileExtension;
    public $fileSize;
    public $folderColorRgb;
    public $headRevisionId;
    public $iconLink;
    public $id;
    protected $imageMediaMetadataType = 'Google_Service_Drive_DriveFileImageMediaMetadata';
    protected $imageMediaMetadataDataType = '';
    protected $indexableTextType = 'Google_Service_Drive_DriveFileIndexableText';
    protected $indexableTextDataType = '';
    public $kind;
    protected $labelsType = 'Google_Service_Drive_DriveFileLabels';
    protected $labelsDataType = '';
    protected $lastModifyingUserType = 'Google_Service_Drive_User';
    protected $lastModifyingUserDataType = '';
    public $lastModifyingUserName;
    public $lastViewedByMeDate;
    public $markedViewedByMeDate;
    public $md5Checksum;
    public $mimeType;
    public $modifiedByMeDate;
    public $modifiedDate;
    public $openWithLinks;
    public $originalFilename;
    public $ownerNames;
    protected $ownersType = 'Google_Service_Drive_User';
    protected $ownersDataType = 'array';
    protected $parentsType = 'Google_Service_Drive_ParentReference';
    protected $parentsDataType = 'array';
    protected $permissionsType = 'Google_Service_Drive_Permission';
    protected $permissionsDataType = 'array';
    protected $propertiesType = 'Google_Service_Drive_Property';
    protected $propertiesDataType = 'array';
    public $quotaBytesUsed;
    public $selfLink;
    public $shared;
    public $sharedWithMeDate;
    protected $sharingUserType = 'Google_Service_Drive_User';
    protected $sharingUserDataType = '';
    protected $thumbnailType = 'Google_Service_Drive_DriveFileThumbnail';
    protected $thumbnailDataType = '';
    public $thumbnailLink;
    public $title;
    protected $userPermissionType = 'Google_Service_Drive_Permission';
    protected $userPermissionDataType = '';
    public $version;
    protected $videoMediaMetadataType = 'Google_Service_Drive_DriveFileVideoMediaMetadata';
    protected $videoMediaMetadataDataType = '';
    public $webContentLink;
    public $webViewLink;
    public $writersCanShare;


    public function setAlternateLink($alternateLink)
    {
        $this->alternateLink = $alternateLink;
    }
    public function getAlternateLink()
    {
        return $this->alternateLink;
    }
    public function setAppDataContents($appDataContents)
    {
        $this->appDataContents = $appDataContents;
    }
    public function getAppDataContents()
    {
        return $this->appDataContents;
    }
    public function setCopyable($copyable)
    {
        $this->copyable = $copyable;
    }
    public function getCopyable()
    {
        return $this->copyable;
    }
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
    }
    public function getCreatedDate()
    {
        return $this->createdDate;
    }
    public function setDefaultOpenWithLink($defaultOpenWithLink)
    {
        $this->defaultOpenWithLink = $defaultOpenWithLink;
    }
    public function getDefaultOpenWithLink()
    {
        return $this->defaultOpenWithLink;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDownloadUrl($downloadUrl)
    {
        $this->downloadUrl = $downloadUrl;
    }
    public function getDownloadUrl()
    {
        return $this->downloadUrl;
    }
    public function setEditable($editable)
    {
        $this->editable = $editable;
    }
    public function getEditable()
    {
        return $this->editable;
    }
    public function setEmbedLink($embedLink)
    {
        $this->embedLink = $embedLink;
    }
    public function getEmbedLink()
    {
        return $this->embedLink;
    }
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setExplicitlyTrashed($explicitlyTrashed)
    {
        $this->explicitlyTrashed = $explicitlyTrashed;
    }
    public function getExplicitlyTrashed()
    {
        return $this->explicitlyTrashed;
    }
    public function setExportLinks($exportLinks)
    {
        $this->exportLinks = $exportLinks;
    }
    public function getExportLinks()
    {
        return $this->exportLinks;
    }
    public function setFileExtension($fileExtension)
    {
        $this->fileExtension = $fileExtension;
    }
    public function getFileExtension()
    {
        return $this->fileExtension;
    }
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
    }
    public function getFileSize()
    {
        return $this->fileSize;
    }
    public function setFolderColorRgb($folderColorRgb)
    {
        $this->folderColorRgb = $folderColorRgb;
    }
    public function getFolderColorRgb()
    {
        return $this->folderColorRgb;
    }
    public function setHeadRevisionId($headRevisionId)
    {
        $this->headRevisionId = $headRevisionId;
    }
    public function getHeadRevisionId()
    {
        return $this->headRevisionId;
    }
    public function setIconLink($iconLink)
    {
        $this->iconLink = $iconLink;
    }
    public function getIconLink()
    {
        return $this->iconLink;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setImageMediaMetadata(Google_Service_Drive_DriveFileImageMediaMetadata $imageMediaMetadata)
    {
        $this->imageMediaMetadata = $imageMediaMetadata;
    }
    public function getImageMediaMetadata()
    {
        return $this->imageMediaMetadata;
    }
    public function setIndexableText(Google_Service_Drive_DriveFileIndexableText $indexableText)
    {
        $this->indexableText = $indexableText;
    }
    public function getIndexableText()
    {
        return $this->indexableText;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setLabels(Google_Service_Drive_DriveFileLabels $labels)
    {
        $this->labels = $labels;
    }
    public function getLabels()
    {
        return $this->labels;
    }
    public function setLastModifyingUser(Google_Service_Drive_User $lastModifyingUser)
    {
        $this->lastModifyingUser = $lastModifyingUser;
    }
    public function getLastModifyingUser()
    {
        return $this->lastModifyingUser;
    }
    public function setLastModifyingUserName($lastModifyingUserName)
    {
        $this->lastModifyingUserName = $lastModifyingUserName;
    }
    public function getLastModifyingUserName()
    {
        return $this->lastModifyingUserName;
    }
    public function setLastViewedByMeDate($lastViewedByMeDate)
    {
        $this->lastViewedByMeDate = $lastViewedByMeDate;
    }
    public function getLastViewedByMeDate()
    {
        return $this->lastViewedByMeDate;
    }
    public function setMarkedViewedByMeDate($markedViewedByMeDate)
    {
        $this->markedViewedByMeDate = $markedViewedByMeDate;
    }
    public function getMarkedViewedByMeDate()
    {
        return $this->markedViewedByMeDate;
    }
    public function setMd5Checksum($md5Checksum)
    {
        $this->md5Checksum = $md5Checksum;
    }
    public function getMd5Checksum()
    {
        return $this->md5Checksum;
    }
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
    }
    public function getMimeType()
    {
        return $this->mimeType;
    }
    public function setModifiedByMeDate($modifiedByMeDate)
    {
        $this->modifiedByMeDate = $modifiedByMeDate;
    }
    public function getModifiedByMeDate()
    {
        return $this->modifiedByMeDate;
    }
    public function setModifiedDate($modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;
    }
    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }
    public function setOpenWithLinks($openWithLinks)
    {
        $this->openWithLinks = $openWithLinks;
    }
    public function getOpenWithLinks()
    {
        return $this->openWithLinks;
    }
    public function setOriginalFilename($originalFilename)
    {
        $this->originalFilename = $originalFilename;
    }
    public function getOriginalFilename()
    {
        return $this->originalFilename;
    }
    public function setOwnerNames($ownerNames)
    {
        $this->ownerNames = $ownerNames;
    }
    public function getOwnerNames()
    {
        return $this->ownerNames;
    }
    public function setOwners($owners)
    {
        $this->owners = $owners;
    }
    public function getOwners()
    {
        return $this->owners;
    }
    public function setParents($parents)
    {
        $this->parents = $parents;
    }
    public function getParents()
    {
        return $this->parents;
    }
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
    }
    public function getPermissions()
    {
        return $this->permissions;
    }
    public function setProperties($properties)
    {
        $this->properties = $properties;
    }
    public function getProperties()
    {
        return $this->properties;
    }
    public function setQuotaBytesUsed($quotaBytesUsed)
    {
        $this->quotaBytesUsed = $quotaBytesUsed;
    }
    public function getQuotaBytesUsed()
    {
        return $this->quotaBytesUsed;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setShared($shared)
    {
        $this->shared = $shared;
    }
    public function getShared()
    {
        return $this->shared;
    }
    public function setSharedWithMeDate($sharedWithMeDate)
    {
        $this->sharedWithMeDate = $sharedWithMeDate;
    }
    public function getSharedWithMeDate()
    {
        return $this->sharedWithMeDate;
    }
    public function setSharingUser(Google_Service_Drive_User $sharingUser)
    {
        $this->sharingUser = $sharingUser;
    }
    public function getSharingUser()
    {
        return $this->sharingUser;
    }
    public function setThumbnail(Google_Service_Drive_DriveFileThumbnail $thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }
    public function getThumbnail()
    {
        return $this->thumbnail;
    }
    public function setThumbnailLink($thumbnailLink)
    {
        $this->thumbnailLink = $thumbnailLink;
    }
    public function getThumbnailLink()
    {
        return $this->thumbnailLink;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setUserPermission(Google_Service_Drive_Permission $userPermission)
    {
        $this->userPermission = $userPermission;
    }
    public function getUserPermission()
    {
        return $this->userPermission;
    }
    public function setVersion($version)
    {
        $this->version = $version;
    }
    public function getVersion()
    {
        return $this->version;
    }
    public function setVideoMediaMetadata(Google_Service_Drive_DriveFileVideoMediaMetadata $videoMediaMetadata)
    {
        $this->videoMediaMetadata = $videoMediaMetadata;
    }
    public function getVideoMediaMetadata()
    {
        return $this->videoMediaMetadata;
    }
    public function setWebContentLink($webContentLink)
    {
        $this->webContentLink = $webContentLink;
    }
    public function getWebContentLink()
    {
        return $this->webContentLink;
    }
    public function setWebViewLink($webViewLink)
    {
        $this->webViewLink = $webViewLink;
    }
    public function getWebViewLink()
    {
        return $this->webViewLink;
    }
    public function setWritersCanShare($writersCanShare)
    {
        $this->writersCanShare = $writersCanShare;
    }
    public function getWritersCanShare()
    {
        return $this->writersCanShare;
    }
}
