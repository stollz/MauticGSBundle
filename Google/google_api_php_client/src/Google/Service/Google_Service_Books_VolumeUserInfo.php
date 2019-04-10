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

class Google_Service_Books_VolumeUserInfo extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $copyType = 'Google_Service_Books_VolumeUserInfoCopy';
    protected $copyDataType = '';
    public $isInMyBooks;
    public $isPreordered;
    public $isPurchased;
    public $isUploaded;
    protected $readingPositionType = 'Google_Service_Books_ReadingPosition';
    protected $readingPositionDataType = '';
    protected $rentalPeriodType = 'Google_Service_Books_VolumeUserInfoRentalPeriod';
    protected $rentalPeriodDataType = '';
    public $rentalState;
    protected $reviewType = 'Google_Service_Books_Review';
    protected $reviewDataType = '';
    public $updated;
    protected $userUploadedVolumeInfoType = 'Google_Service_Books_VolumeUserInfoUserUploadedVolumeInfo';
    protected $userUploadedVolumeInfoDataType = '';


    public function setCopy(Google_Service_Books_VolumeUserInfoCopy $copy)
    {
        $this->copy = $copy;
    }
    public function getCopy()
    {
        return $this->copy;
    }
    public function setIsInMyBooks($isInMyBooks)
    {
        $this->isInMyBooks = $isInMyBooks;
    }
    public function getIsInMyBooks()
    {
        return $this->isInMyBooks;
    }
    public function setIsPreordered($isPreordered)
    {
        $this->isPreordered = $isPreordered;
    }
    public function getIsPreordered()
    {
        return $this->isPreordered;
    }
    public function setIsPurchased($isPurchased)
    {
        $this->isPurchased = $isPurchased;
    }
    public function getIsPurchased()
    {
        return $this->isPurchased;
    }
    public function setIsUploaded($isUploaded)
    {
        $this->isUploaded = $isUploaded;
    }
    public function getIsUploaded()
    {
        return $this->isUploaded;
    }
    public function setReadingPosition(Google_Service_Books_ReadingPosition $readingPosition)
    {
        $this->readingPosition = $readingPosition;
    }
    public function getReadingPosition()
    {
        return $this->readingPosition;
    }
    public function setRentalPeriod(Google_Service_Books_VolumeUserInfoRentalPeriod $rentalPeriod)
    {
        $this->rentalPeriod = $rentalPeriod;
    }
    public function getRentalPeriod()
    {
        return $this->rentalPeriod;
    }
    public function setRentalState($rentalState)
    {
        $this->rentalState = $rentalState;
    }
    public function getRentalState()
    {
        return $this->rentalState;
    }
    public function setReview(Google_Service_Books_Review $review)
    {
        $this->review = $review;
    }
    public function getReview()
    {
        return $this->review;
    }
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }
    public function getUpdated()
    {
        return $this->updated;
    }
    public function setUserUploadedVolumeInfo(Google_Service_Books_VolumeUserInfoUserUploadedVolumeInfo $userUploadedVolumeInfo)
    {
        $this->userUploadedVolumeInfo = $userUploadedVolumeInfo;
    }
    public function getUserUploadedVolumeInfo()
    {
        return $this->userUploadedVolumeInfo;
    }
}
