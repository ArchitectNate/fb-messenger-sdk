<?php

declare(strict_types=1);

namespace ArchNate\MessengerSdk;

use GuzzleHttp\Client;
use Tightenco\Collect\Support\Collection;

/**
 * Class AbstractFacebookApi
 * @package ArchNate\MessengerSdk
 */
class AbstractFacebookApi
{
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
    public function __construct(string $apiVersion)
    {
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
    
    public function request(FacebookAccessToken $accessToken, ModelCollection $dataModel): ApiResult
    {
      $client = self::getClient();
      $requestBody = $dataModel->toJson();

      $result = new ApiResult();
      
      return $result;
    }

}
