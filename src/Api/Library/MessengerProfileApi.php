<?php

declare(strict_types=1);

namespace ArchNate\MessengerSdk\Api\Library;

use ArchNate\MessengerSdk\{FacebookRequestUri, Api\FacebookApiInterface, Api\AbstractFacebookApi};

/**
 * Wrapper around the Facebook MessengerProfileAPI (https://developers.facebook.com/docs/messenger-platform/reference/messenger-profile-api)
 * @package ArchNate\MessengerSdk\Api\Library
 */
class MessengerProfileApi extends AbstractFacebookApi implements FacebookApiInterface
{
    public function getRequestPath(): string
    {
        return "/me/messenger_profile";
    }
}
