<?php

declare(strict_types=1);

namespace ArchNate\MessengerSdk\Library;

use ArchNate\MessengerSdk\{
  FacebookRequestUri,
  FacebookApiInterface,
  AbstractFacebookApi};

/**
 * Wrapper around the Facebook MessengerProfileAPI (https://developers.facebook.com/docs/messenger-platform/reference/messenger-profile-api)
 * @package ArchNate\MessengerSdk\Library
 */
class MessengerProfileApi extends AbstractFacebookApi implements FacebookApiInterface
{
    public function getRequestPath(): string
    {
        return "/me/messenger_profile";
    }
}
