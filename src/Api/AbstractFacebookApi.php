<?php

declare(strict_types=1);

namespace ArchNate\MessengerSdk\Api;

use ArchNate\MessengerSdk\{FacebookAccessToken, FacebookRequestUri};

class AbstractFacebookApi
{
    protected $accessToken;
    protected $apiVersion;
    protected $requestUri;

    /**
     * AbstractFacebookApi constructor.
     * @param FacebookAccessToken $accessToken
     * @param string $apiVersion
     */
    public function __construct(FacebookAccessToken $accessToken, string $apiVersion)
    {
        $this->accessToken = $accessToken;
        $this->apiVersion = $apiVersion;

        $this->requestUri = new FacebookRequestUri($apiVersion, $this->getRequestPath());
    }

}