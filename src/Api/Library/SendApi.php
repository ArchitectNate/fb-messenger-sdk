<?php

declare(strict_types=1);

namespace ArchNate\MessengerSdk\Api\Library;

use ArchNate\MessengerSdk\{
    FacebookRequestUri,
    Api\FacebookApiInterface,
    Api\AbstractFacebookApi};

/**
 * Wrapper around the Facebook SendAPI (https://developers.facebook.com/docs/messenger-platform/reference/send-api)
 * @package ArchNate\MessengerSdk\Api\Library
 */
class SendApi extends AbstractFacebookApi implements FacebookApiInterface
{
    public function getRequestPath(): string
    {
        return "/me/messages";

    }
}
