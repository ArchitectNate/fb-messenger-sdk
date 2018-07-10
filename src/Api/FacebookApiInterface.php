<?php

declare(strict_types=1);

namespace ArchNate\MessengerSDK\Api;

use ArchNate\MessengerSdk\{FacebookRequestUri, ApiResult};
use GuzzleHttp\Client;

interface FacebookApiInterface
{
    public function getRequestUri(): FacebookRequestUri;
    public function getRequestPath(): string;
    public static function getClient(): Client;
}
