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



class Google_Service_Genomics_ExperimentalCreateJobRequest extends Google_Collection
{
    protected $collection_key = 'sourceUris';
    protected $internal_gapi_mappings = array(
    );
    public $align;
    public $callVariants;
    public $gcsOutputPath;
    public $pairedSourceUris;
    public $projectNumber;
    public $sourceUris;


    public function setAlign($align)
    {
        $this->align = $align;
    }
    public function getAlign()
    {
        return $this->align;
    }
    public function setCallVariants($callVariants)
    {
        $this->callVariants = $callVariants;
    }
    public function getCallVariants()
    {
        return $this->callVariants;
    }
    public function setGcsOutputPath($gcsOutputPath)
    {
        $this->gcsOutputPath = $gcsOutputPath;
    }
    public function getGcsOutputPath()
    {
        return $this->gcsOutputPath;
    }
    public function setPairedSourceUris($pairedSourceUris)
    {
        $this->pairedSourceUris = $pairedSourceUris;
    }
    public function getPairedSourceUris()
    {
        return $this->pairedSourceUris;
    }
    public function setProjectNumber($projectNumber)
    {
        $this->projectNumber = $projectNumber;
    }
    public function getProjectNumber()
    {
        return $this->projectNumber;
    }
    public function setSourceUris($sourceUris)
    {
        $this->sourceUris = $sourceUris;
    }
    public function getSourceUris()
    {
        return $this->sourceUris;
    }
}