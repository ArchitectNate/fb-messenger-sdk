<?php

declare(strict_types=1);

namespace ArchitectNate\MessengerSdk;

/**
 * This is Messenger class handles all of the tokens and configuration
 */
class Messenger
{
    protected $accessToken;

    public function __construct(string $accessToken, string $version)
    {
        $this->accessToken = $accessToken;
    }

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }
}