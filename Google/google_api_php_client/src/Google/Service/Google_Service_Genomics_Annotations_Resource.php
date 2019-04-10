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
 * The "annotations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $annotations = $genomicsService->annotations;
 *  </code>
 */
class Google_Service_Genomics_Annotations_Resource extends Google_Service_Resource
{

    /**
     * Creates one or more new annotations atomically. All annotations must belong
     * to the same annotation set. Caller must have WRITE permission for this
     * annotation set. For optimal performance, batch positionally adjacent
     * annotations together.
     *
     * If the request has a systemic issue, such as an attempt to write to an
     * inaccessible annotation set, the entire RPC will fail accordingly. For lesser
     * data issues, when possible an error will be isolated to the corresponding
     * batch entry in the response; the remaining well formed annotations will be
     * created normally. (annotations.batchCreate)
     *
     * @param Google_BatchCreateAnnotationsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_BatchAnnotationsResponse
     */
    public function batchCreate(Google_Service_Genomics_BatchCreateAnnotationsRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('batchCreate', array($params), "Google_Service_Genomics_BatchAnnotationsResponse");
    }

    /**
     * Creates a new annotation. Caller must have WRITE permission for the
     * associated annotation set. (annotations.create)
     *
     * @param Google_Annotation $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Annotation
     */
    public function create(Google_Service_Genomics_Annotation $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('create', array($params), "Google_Service_Genomics_Annotation");
    }

    /**
     * Deletes an annotation. Caller must have WRITE permission for the associated
     * annotation set. (annotations.delete)
     *
     * @param string $annotationId The ID of the annotation set to be deleted.
     * @param array $optParams Optional parameters.
     */
    public function delete($annotationId, $optParams = array())
    {
        $params = array('annotationId' => $annotationId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Gets an annotation. Caller must have READ permission for the associated
     * annotation set. (annotations.get)
     *
     * @param string $annotationId The ID of the annotation set to be retrieved.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Annotation
     */
    public function get($annotationId, $optParams = array())
    {
        $params = array('annotationId' => $annotationId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Genomics_Annotation");
    }

    /**
     * Updates an annotation. The update must respect all mutability restrictions
     * and other invariants described on the annotation resource. Caller must have
     * WRITE permission for the associated dataset. This method supports patch
     * semantics. (annotations.patch)
     *
     * @param string $annotationId The ID of the annotation set to be updated.
     * @param Google_Annotation $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Annotation
     */
    public function patch($annotationId, Google_Service_Genomics_Annotation $postBody, $optParams = array())
    {
        $params = array('annotationId' => $annotationId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Genomics_Annotation");
    }

    /**
     * Searches for annotations that match the given criteria. Results are returned
     * ordered by start position. Annotations that have matching start positions are
     * ordered deterministically. Caller must have READ permission for the queried
     * annotation sets. (annotations.search)
     *
     * @param Google_SearchAnnotationsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_SearchAnnotationsResponse
     */
    public function search(Google_Service_Genomics_SearchAnnotationsRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('search', array($params), "Google_Service_Genomics_SearchAnnotationsResponse");
    }

    /**
     * Updates an annotation. The update must respect all mutability restrictions
     * and other invariants described on the annotation resource. Caller must have
     * WRITE permission for the associated dataset. (annotations.update)
     *
     * @param string $annotationId The ID of the annotation set to be updated.
     * @param Google_Annotation $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Annotation
     */
    public function update($annotationId, Google_Service_Genomics_Annotation $postBody, $optParams = array())
    {
        $params = array('annotationId' => $annotationId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Genomics_Annotation");
    }
}