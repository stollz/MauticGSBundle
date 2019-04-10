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
 * The "files" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $files = $driveService->files;
 *  </code>
 */
class Google_Service_Drive_Files_Resource extends Google_Service_Resource
{

    /**
     * Creates a copy of the specified file. (files.copy)
     *
     * @param string $fileId The ID of the file to copy.
     * @param Google_DriveFile $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool convert Whether to convert this file to the corresponding
     * Google Docs format.
     * @opt_param string ocrLanguage If ocr is true, hints at the language to use.
     * Valid values are ISO 639-1 codes.
     * @opt_param string visibility The visibility of the new file. This parameter
     * is only relevant when the source is not a native Google Doc and
     * convert=false.
     * @opt_param bool pinned Whether to pin the head revision of the new copy. A
     * file can have a maximum of 200 pinned revisions.
     * @opt_param bool ocr Whether to attempt OCR on .jpg, .png, .gif, or .pdf
     * uploads.
     * @opt_param string timedTextTrackName The timed text track name.
     * @opt_param string timedTextLanguage The language of the timed text.
     * @return Google_Service_Drive_DriveFile
     */
    public function copy($fileId, Google_Service_Drive_DriveFile $postBody, $optParams = array())
    {
        $params = array('fileId' => $fileId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('copy', array($params), "Google_Service_Drive_DriveFile");
    }

    /**
     * Permanently deletes a file by ID. Skips the trash. The currently
     * authenticated user must own the file. (files.delete)
     *
     * @param string $fileId The ID of the file to delete.
     * @param array $optParams Optional parameters.
     */
    public function delete($fileId, $optParams = array())
    {
        $params = array('fileId' => $fileId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Permanently deletes all of the user's trashed files. (files.emptyTrash)
     *
     * @param array $optParams Optional parameters.
     */
    public function emptyTrash($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('emptyTrash', array($params));
    }

    /**
     * Gets a file's metadata by ID. (files.get)
     *
     * @param string $fileId The ID for the file in question.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool acknowledgeAbuse Whether the user is acknowledging the risk
     * of downloading known malware or other abusive files.
     * @opt_param bool updateViewedDate Whether to update the view date after
     * successfully retrieving the file.
     * @opt_param string revisionId Specifies the Revision ID that should be
     * downloaded. Ignored unless alt=media is specified.
     * @opt_param string projection This parameter is deprecated and has no
     * function.
     * @return Google_Service_Drive_DriveFile
     */
    public function get($fileId, $optParams = array())
    {
        $params = array('fileId' => $fileId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Drive_DriveFile");
    }

    /**
     * Insert a new file. (files.insert)
     *
     * @param Google_DriveFile $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool convert Whether to convert this file to the corresponding
     * Google Docs format.
     * @opt_param bool useContentAsIndexableText Whether to use the content as
     * indexable text.
     * @opt_param string ocrLanguage If ocr is true, hints at the language to use.
     * Valid values are ISO 639-1 codes.
     * @opt_param string visibility The visibility of the new file. This parameter
     * is only relevant when convert=false.
     * @opt_param bool pinned Whether to pin the head revision of the uploaded file.
     * A file can have a maximum of 200 pinned revisions.
     * @opt_param bool ocr Whether to attempt OCR on .jpg, .png, .gif, or .pdf
     * uploads.
     * @opt_param string timedTextTrackName The timed text track name.
     * @opt_param string timedTextLanguage The language of the timed text.
     * @return Google_Service_Drive_DriveFile
     */
    public function insert(Google_Service_Drive_DriveFile $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Drive_DriveFile");
    }

    /**
     * Lists the user's files. (files.listFiles)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string q Query string for searching files.
     * @opt_param string pageToken Page token for files.
     * @opt_param string corpus The body of items (files/documents) to which the
     * query applies.
     * @opt_param string projection This parameter is deprecated and has no
     * function.
     * @opt_param int maxResults Maximum number of files to return.
     * @return Google_Service_Drive_FileList
     */
    public function listFiles($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Drive_FileList");
    }

    /**
     * Updates file metadata and/or content. This method supports patch semantics.
     * (files.patch)
     *
     * @param string $fileId The ID of the file to update.
     * @param Google_DriveFile $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string addParents Comma-separated list of parent IDs to add.
     * @opt_param bool updateViewedDate Whether to update the view date after
     * successfully updating the file.
     * @opt_param string removeParents Comma-separated list of parent IDs to remove.
     * @opt_param bool setModifiedDate Whether to set the modified date with the
     * supplied modified date.
     * @opt_param bool convert Whether to convert this file to the corresponding
     * Google Docs format.
     * @opt_param bool useContentAsIndexableText Whether to use the content as
     * indexable text.
     * @opt_param string ocrLanguage If ocr is true, hints at the language to use.
     * Valid values are ISO 639-1 codes.
     * @opt_param bool pinned Whether to pin the new revision. A file can have a
     * maximum of 200 pinned revisions.
     * @opt_param bool newRevision Whether a blob upload should create a new
     * revision. If false, the blob data in the current head revision is replaced.
     * If true or not set, a new blob is created as head revision, and previous
     * revisions are preserved (causing increased use of the user's data storage
     * quota).
     * @opt_param bool ocr Whether to attempt OCR on .jpg, .png, .gif, or .pdf
     * uploads.
     * @opt_param string timedTextLanguage The language of the timed text.
     * @opt_param string timedTextTrackName The timed text track name.
     * @return Google_Service_Drive_DriveFile
     */
    public function patch($fileId, Google_Service_Drive_DriveFile $postBody, $optParams = array())
    {
        $params = array('fileId' => $fileId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Drive_DriveFile");
    }

    /**
     * Set the file's updated time to the current server time. (files.touch)
     *
     * @param string $fileId The ID of the file to update.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_DriveFile
     */
    public function touch($fileId, $optParams = array())
    {
        $params = array('fileId' => $fileId);
        $params = array_merge($params, $optParams);
        return $this->call('touch', array($params), "Google_Service_Drive_DriveFile");
    }

    /**
     * Moves a file to the trash. (files.trash)
     *
     * @param string $fileId The ID of the file to trash.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_DriveFile
     */
    public function trash($fileId, $optParams = array())
    {
        $params = array('fileId' => $fileId);
        $params = array_merge($params, $optParams);
        return $this->call('trash', array($params), "Google_Service_Drive_DriveFile");
    }

    /**
     * Restores a file from the trash. (files.untrash)
     *
     * @param string $fileId The ID of the file to untrash.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_DriveFile
     */
    public function untrash($fileId, $optParams = array())
    {
        $params = array('fileId' => $fileId);
        $params = array_merge($params, $optParams);
        return $this->call('untrash', array($params), "Google_Service_Drive_DriveFile");
    }

    /**
     * Updates file metadata and/or content. (files.update)
     *
     * @param string $fileId The ID of the file to update.
     * @param Google_DriveFile $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string addParents Comma-separated list of parent IDs to add.
     * @opt_param bool updateViewedDate Whether to update the view date after
     * successfully updating the file.
     * @opt_param string removeParents Comma-separated list of parent IDs to remove.
     * @opt_param bool setModifiedDate Whether to set the modified date with the
     * supplied modified date.
     * @opt_param bool convert Whether to convert this file to the corresponding
     * Google Docs format.
     * @opt_param bool useContentAsIndexableText Whether to use the content as
     * indexable text.
     * @opt_param string ocrLanguage If ocr is true, hints at the language to use.
     * Valid values are ISO 639-1 codes.
     * @opt_param bool pinned Whether to pin the new revision. A file can have a
     * maximum of 200 pinned revisions.
     * @opt_param bool newRevision Whether a blob upload should create a new
     * revision. If false, the blob data in the current head revision is replaced.
     * If true or not set, a new blob is created as head revision, and previous
     * revisions are preserved (causing increased use of the user's data storage
     * quota).
     * @opt_param bool ocr Whether to attempt OCR on .jpg, .png, .gif, or .pdf
     * uploads.
     * @opt_param string timedTextLanguage The language of the timed text.
     * @opt_param string timedTextTrackName The timed text track name.
     * @return Google_Service_Drive_DriveFile
     */
    public function update($fileId, Google_Service_Drive_DriveFile $postBody, $optParams = array())
    {
        $params = array('fileId' => $fileId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Drive_DriveFile");
    }

    /**
     * Subscribe to changes on a file (files.watch)
     *
     * @param string $fileId The ID for the file in question.
     * @param Google_Channel $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool acknowledgeAbuse Whether the user is acknowledging the risk
     * of downloading known malware or other abusive files.
     * @opt_param bool updateViewedDate Whether to update the view date after
     * successfully retrieving the file.
     * @opt_param string revisionId Specifies the Revision ID that should be
     * downloaded. Ignored unless alt=media is specified.
     * @opt_param string projection This parameter is deprecated and has no
     * function.
     * @return Google_Service_Drive_Channel
     */
    public function watch($fileId, Google_Service_Drive_Channel $postBody, $optParams = array())
    {
        $params = array('fileId' => $fileId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('watch', array($params), "Google_Service_Drive_Channel");
    }
}