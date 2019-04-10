<?php
/**
 * Created by PhpStorm.
 * User: Monty
 * Date: 11/23/2016
 * Time: 5:39 PM
 */


/**
 * The "urlchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $urlchannels = $adsenseService->urlchannels;
 *  </code>
 */
class Google_Service_AdSense_AccountsUrlchannels_Resource extends Google_Service_Resource
{

    /**
     * List all URL channels in the specified ad client for the specified account.
     * (urlchannels.listAccountsUrlchannels)
     *
     * @param string $accountId Account to which the ad client belongs.
     * @param string $adClientId Ad client for which to list URL channels.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken A continuation token, used to page through URL
     * channels. To retrieve the next page, set this parameter to the value of
     * "nextPageToken" from the previous response.
     * @opt_param int maxResults The maximum number of URL channels to include in
     * the response, used for paging.
     * @return Google_Service_AdSense_UrlChannels
     */
    public function listAccountsUrlchannels($accountId, $adClientId, $optParams = array())
    {
        $params = array('accountId' => $accountId, 'adClientId' => $adClientId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_AdSense_UrlChannels");
    }
}