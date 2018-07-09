<?php

declare(strict_types=1);

namespace ArchNate\MessengerSdk\Api;

use ArchNate\MessengerSdk\FacebookRequestUri;

/**
 * Wrapper around the Facebook SendAPI (https://developers.facebook.com/docs/messenger-platform/reference/send-api)
 * @package ArchNate\MessengerSDK\API
 */
class SendApi extends AbstractFacebookApi implements FacebookApiInterface
{
    public function getRequestPath(): string
    {
        return "/me/messages";
    }

    public function getRequestUri(): FacebookRequestUri
    {
        return $this->requestUri;
    }
}
