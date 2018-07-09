<?php

declare(strict_types=1);

namespace ArchNate\MessengerSdk;

/**
 * Class FacebookAccessToken
 * @package ArchitectNate\MessengerSdk
 */
class FacebookAccessToken
{
    protected $accessToken;

    /**
     * FacebookAccessToken constructor.
     * @param string $accessToken
     */
    public function __construct(string $accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /**
     * Retrieves the stored access token
     * @return string
     */
    public function getToken(): string
    {
        return $this->accessToken;
    }

    /**
     * When casted to a string, simply return the stored token
     * @return string
     */
    public function __toString(): string
    {
        return $this->getToken();
    }
}