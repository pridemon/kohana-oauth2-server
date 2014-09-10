<?php defined('SYSPATH') or die('No direct script access.');

class Kohana_Oauth_Database implements OAuth2\Storage\AuthorizationCodeInterface, OAuth2\Storage\AccessTokenInterface, OAuth2\Storage\ClientCredentialsInterface, OAuth2\Storage\UserCredentialsInterface, OAuth2\Storage\RefreshTokenInterface, OAuth2\Storage\JWTBearerInterface
{
	
	public function checkClientCredentials($client_id, $client_secret = null)
	{
		return Model::factory('Oauth')->checkClientCredentials($client_id, $client_secret);
	}
	
	public function getClientDetails($client_id)
	{
		return Model::factory('Oauth')->getClientDetails($client_id);
	}
	
	public function checkRestrictedGrantType($client_id, $grant_type)
	{
		return Model::factory('Oauth')->checkRestrictedGrantType($client_id, $grant_type);
	}
	
	public function getAccessToken($access_token)
	{
		return Model::factory('Oauth')->getAccessToken($access_token);
	}
	
	public function setAccessToken($access_token, $client_id, $user_id, $expires, $scope = null)
	{
		return Model::factory('Oauth')->setAccessToken($access_token, $client_id, $user_id, $expires, $scope);
	}
	
	public function getAuthorizationCode($code)
	{
		return Model::factory('Oauth')->getAuthorizationCode($code);
	}
	
	public function setAuthorizationCode($code, $client_id, $user_id, $redirect_uri, $expires, $scope = null)
	{
		return Model::factory('Oauth')->setAuthorizationCode($code, $client_id, $user_id, $redirect_uri, $expires, $scope);
	}
	
	public function expireAuthorizationCode($code)
	{
		return Model::factory('Oauth')->expireAuthorizationCode($code);
	}
	
	public function checkUserCredentials($username, $password)
	{
		return Model::factory('Oauth')->checkUserCredentials($username, $password);
	}
	
	public function getUserDetails($username)
	{
		return Model::factory('Oauth')->getUserDetails($username);
	}
	
	public function getRefreshToken($refresh_token)
	{
		return Model::factory('Oauth')->getRefreshToken($refresh_token);
	}
	
	public function setRefreshToken($refresh_token, $client_id, $user_id, $expires, $scope = null)
	{
		return Model::factory('Oauth')->setRefreshToken($refresh_token, $client_id, $user_id, $expires, $scope);
	}
	
	public function unsetRefreshToken($refresh_token)
	{
		return Model::factory('Oauth')->unsetRefreshToken($refresh_token);
	}
	
	protected function checkPassword($user, $password)
	{
		return Model::factory('Oauth')->checkPassword($user, $password);
	}
	
	public function getUser($username)
	{
		return Model::factory('Oauth')->getUser($username);
	}
	
	public function setUser($username, $password, $firstName = null, $lastName = null)
	{
		return Model::factory('Oauth')->setUser($username, $password, $firstName, $lastName);
	}
	
	public function getClientKey($client_id, $subject)
	{
		return Model::factory('Oauth')->getClientKey($client_id, $subject);
	}

    /**
     * Determine if the client is a "public" client, and therefore
     * does not require passing credentials for certain grant types
     *
     * @param $client_id
     * Client identifier to be check with.
     *
     * @return
     * TRUE if the client is public, and FALSE if it isn't.
     * @endcode
     *
     * @see http://tools.ietf.org/html/rfc6749#section-2.3
     * @see https://github.com/bshaffer/oauth2-server-php/issues/257
     *
     * @ingroup oauth2_section_2
     */
    public function isPublicClient($client_id)
    {
        // TODO: Implement isPublicClient() method.
    }

    /**
     * Get the scope associated with this client
     *
     * @return
     * STRING the space-delineated scope list for the specified client_id
     */
    public function getClientScope($client_id)
    {
        // TODO: Implement getClientScope() method.
    }

    /**
     * Get a jti (JSON token identifier) by matching against the client_id, subject, audience and expiration.
     *
     * @param $client_id
     * Client identifier to match.
     *
     * @param $subject
     * The subject to match.
     *
     * @param $audience
     * The audience to match.
     *
     * @param $expiration
     * The expiration of the jti.
     *
     * @param $jti
     * The jti to match.
     *
     * @return
     * An associative array as below, and return NULL if the jti does not exist.
     * - issuer: Stored client identifier.
     * - subject: Stored subject.
     * - audience: Stored audience.
     * - expires: Stored expiration in unix timestamp.
     * - jti: The stored jti.
     */
    public function getJti($client_id, $subject, $audience, $expiration, $jti)
    {
        // TODO: Implement getJti() method.
    }

    /**
     * Store a used jti so that we can check against it to prevent replay attacks.
     * @param $client_id
     * Client identifier to insert.
     *
     * @param $subject
     * The subject to insert.
     *
     * @param $audience
     * The audience to insert.
     *
     * @param $expiration
     * The expiration of the jti.
     *
     * @param $jti
     * The jti to insert.
     */
    public function setJti($client_id, $subject, $audience, $expiration, $jti)
    {
        // TODO: Implement setJti() method.
    }
}
