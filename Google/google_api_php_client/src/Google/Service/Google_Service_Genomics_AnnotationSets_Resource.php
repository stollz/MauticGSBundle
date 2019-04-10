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
 * The "annotationSets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $annotationSets = $genomicsService->annotationSets;
 *  </code>
 */
class Google_Service_Genomics_AnnotationSets_Resource extends Google_Service_Resource
{

    /**
     * Creates a new annotation set. Caller must have WRITE permission for the
     * associated dataset. (annotationSets.create)
     *
     * @param Google_AnnotationSet $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_AnnotationSet
     */
    public function create(Google_Service_Genomics_AnnotationSet $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('create', array($params), "Google_Service_Genomics_AnnotationSet");
    }

    /**
     * Deletes an annotation set. Caller must have WRITE permission for the
     * associated annotation set. (annotationSets.delete)
     *
     * @param string $annotationSetId The ID of the annotation set to be deleted.
     * @param array $optParams Optional parameters.
     */
    public function delete($annotationSetId, $optParams = array())
    {
        $params = array('annotationSetId' => $annotationSetId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Gets an annotation set. Caller must have READ permission for the associated
     * dataset. (annotationSets.get)
     *
     * @param string $annotationSetId The ID of the annotation set to be retrieved.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_AnnotationSet
     */
    public function get($annotationSetId, $optParams = array())
    {
        $params = array('annotationSetId' => $annotationSetId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Genomics_AnnotationSet");
    }

    /**
     * Updates an annotation set. The update must respect all mutability
     * restrictions and other invariants described on the annotation set resource.
     * Caller must have WRITE permission for the associated dataset. This method
     * supports patch semantics. (annotationSets.patch)
     *
     * @param string $annotationSetId The ID of the annotation set to be updated.
     * @param Google_AnnotationSet $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_AnnotationSet
     */
    public function patch($annotationSetId, Google_Service_Genomics_AnnotationSet $postBody, $optParams = array())
    {
        $params = array('annotationSetId' => $annotationSetId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Genomics_AnnotationSet");
    }

    /**
     * Searches for annotation sets that match the given criteria. Results are
     * returned in a deterministic order. Caller must have READ permission for the
     * queried datasets. (annotationSets.search)
     *
     * @param Google_SearchAnnotationSetsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_SearchAnnotationSetsResponse
     */
    public function search(Google_Service_Genomics_SearchAnnotationSetsRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('search', array($params), "Google_Service_Genomics_SearchAnnotationSetsResponse");
    }

    /**
     * Updates an annotation set. The update must respect all mutability
     * restrictions and other invariants described on the annotation set resource.
     * Caller must have WRITE permission for the associated dataset.
     * (annotationSets.update)
     *
     * @param string $annotationSetId The ID of the annotation set to be updated.
     * @param Google_AnnotationSet $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_AnnotationSet
     */
    public function update($annotationSetId, Google_Service_Genomics_AnnotationSet $postBody, $optParams = array())
    {
        $params = array('annotationSetId' => $annotationSetId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Genomics_AnnotationSet");
    }
}