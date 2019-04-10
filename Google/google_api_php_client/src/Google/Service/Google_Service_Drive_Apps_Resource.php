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
 * The "apps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $apps = $driveService->apps;
 *  </code>
 */
class Google_Service_Drive_Apps_Resource extends Google_Service_Resource
{

    /**
     * Gets a specific app. (apps.get)
     *
     * @param string $appId The ID of the app.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_App
     */
    public function get($appId, $optParams = array())
    {
        $params = array('appId' => $appId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Drive_App");
    }

    /**
     * Lists a user's installed apps. (apps.listApps)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string languageCode A language or locale code, as defined by BCP
     * 47, with some extensions from Unicode's LDML format
     * (http://www.unicode.org/reports/tr35/).
     * @opt_param string appFilterExtensions A comma-separated list of file
     * extensions for open with filtering. All apps within the given app query scope
     * which can open any of the given file extensions will be included in the
     * response. If appFilterMimeTypes are provided as well, the result is a union
     * of the two resulting app lists.
     * @opt_param string appFilterMimeTypes A comma-separated list of MIME types for
     * open with filtering. All apps within the given app query scope which can open
     * any of the given MIME types will be included in the response. If
     * appFilterExtensions are provided as well, the result is a union of the two
     * resulting app lists.
     * @return Google_Service_Drive_AppList
     */
    public function listApps($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Drive_AppList");
    }
}