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
 *   $mapsengineService = new Google_Service_MapsEngine(...);
 *   $files = $mapsengineService->files;
 *  </code>
 */
class Google_Service_MapsEngine_RastersFiles_Resource extends Google_Service_Resource
{

    /**
     * Upload a file to a raster asset. (files.insert)
     *
     * @param string $id The ID of the raster asset.
     * @param string $filename The file name of this uploaded file.
     * @param array $optParams Optional parameters.
     */
    public function insert($id, $filename, $optParams = array())
    {
        $params = array('id' => $id, 'filename' => $filename);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params));
    }
}