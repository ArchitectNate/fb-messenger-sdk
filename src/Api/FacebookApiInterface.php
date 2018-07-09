<?php

declare(strict_types=1);

namespace ArchNate\MessengerSDK\Api;

use ArchNate\MessengerSdk\FacebookRequestUri;

class FacebookApiInterface
{
    public function getRequestUri(): FacebookRequestUri;
    public function getRequestPath(): string;
}
