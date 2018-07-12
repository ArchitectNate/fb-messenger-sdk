<?php

declare(strict_types=1);

namespace ArchNate\MessengerSdk\Library;

use ArchNate\MessengerSdk\{
    FacebookRequestUri,
    FacebookApiInterface,
    AbstractFacebookApi};

/**
 * Wrapper around the Facebook SendAPI (https://developers.facebook.com/docs/messenger-platform/reference/send-api)
 * @package ArchNate\MessengerSdk\Library
 */
class SendApi extends AbstractFacebookApi implements FacebookApiInterface
{
    public function getRequestPath(): string
    {
        return "/me/messages";

    }
}
