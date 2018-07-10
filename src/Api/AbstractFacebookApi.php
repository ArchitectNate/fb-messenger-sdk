<?php

declare(strict_types=1);

namespace ArchNate\MessengerSdk\Api;

use ArchNate\MessengerSdk\{FacebookAccessToken, FacebookRequestUri};
use GuzzleHttp\Client;

/**
 * Class AbstractFacebookApi
 * @package ArchNate\MessengerSdk\Api
 */
class AbstractFacebookApi
{
    /**
     * @var FacebookAccessToken
     */
    protected $accessToken;

    /**
     * @var string
     */
    protected $apiVersion;

    /**
     * @var FacebookRequestUri
     */
    protected $requestUri;

    /**
     * @var Client
     */
    protected static $client;

    /**
     * AbstractFacebookApi constructor.
     * @param FacebookAccessToken $accessToken
     * @param string $apiVersion
     */
    public function __construct(FacebookAccessToken $accessToken, string $apiVersion)
    {
        $this->accessToken = $accessToken;
        $this->apiVersion = $apiVersion;

        // Generate the FacebookRequestUri object
        $this->requestUri = new FacebookRequestUri($apiVersion, $this->getRequestPath());
    }

    /**
     * @return Client
     */
    public static function getClient(): Client
    {
        if (!self::$client)
        {
            self::$client = new Client();
        }

        return self::$client;
    }

    /**
     * @return FacebookRequestUri
     */
    public function getRequestUri(): FacebookRequestUri
    {
        return $this->requestUri;
    }

}