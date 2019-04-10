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
 * The "realtime" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $realtime = $driveService->realtime;
 *  </code>
 */
class Google_Service_Drive_Realtime_Resource extends Google_Service_Resource
{

    /**
     * Exports the contents of the Realtime API data model associated with this file
     * as JSON. (realtime.get)
     *
     * @param string $fileId The ID of the file that the Realtime API data model is
     * associated with.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int revision The revision of the Realtime API data model to
     * export. Revisions start at 1 (the initial empty data model) and are
     * incremented with each change. If this parameter is excluded, the most recent
     * data model will be returned.
     */
    public function get($fileId, $optParams = array())
    {
        $params = array('fileId' => $fileId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params));
    }

    /**
     * Overwrites the Realtime API data model associated with this file with the
     * provided JSON data model. (realtime.update)
     *
     * @param string $fileId The ID of the file that the Realtime API data model is
     * associated with.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string baseRevision The revision of the model to diff the uploaded
     * model against. If set, the uploaded model is diffed against the provided
     * revision and those differences are merged with any changes made to the model
     * after the provided revision. If not set, the uploaded model replaces the
     * current model on the server.
     */
    public function update($fileId, $optParams = array())
    {
        $params = array('fileId' => $fileId);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params));
    }
}