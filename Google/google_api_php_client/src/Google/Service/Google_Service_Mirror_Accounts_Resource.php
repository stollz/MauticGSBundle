<?php
/**
 * Created by PhpStorm.
 * User: Monty
 * Date: 11/28/2016
 * Time: 7:16 PM
 */

/**
 * The "accounts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mirrorService = new Google_Service_Mirror(...);
 *   $accounts = $mirrorService->accounts;
 *  </code>
 */
class Google_Service_Mirror_Accounts_Resource extends Google_Service_Resource
{

    /**
     * Inserts a new account for a user (accounts.insert)
     *
     * @param string $userToken The ID for the user.
     * @param string $accountType Account type to be passed to Android Account
     * Manager.
     * @param string $accountName The name of the account to be passed to the
     * Android Account Manager.
     * @param Google_Account $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Mirror_Account
     */
    public function insert($userToken, $accountType, $accountName, Google_Service_Mirror_Account $postBody, $optParams = array())
    {
        $params = array('userToken' => $userToken, 'accountType' => $accountType, 'accountName' => $accountName, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Mirror_Account");
    }
}

