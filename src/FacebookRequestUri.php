<?php

declare(strict_types=1);

/**
 * The Facebook Request URI for the various APIs
 */

namespace ArchNate\MessengerSdk\Api;

use Stringy\Stringy as S;

class FacebookRequestUri
{
    const BASE_URI = "https://graph.facebook.com/";

    protected $fullUri = "";

    /**
     * FacebookRequestUri constructor.
     * @param string $version
     * @param string $path
     */
    public function __construct(string $version, string $path = "")
    {
        $version = S::create($version)->ensureLeft('v');
        $path = S::create($path)->ensureLeft('/');

        $this->fullUri = S::create($this->BASE_URI)
            ->ensureRight('/')
            ->append($version)
            ->append($path);
    }

    /**
     * Returns the already created, full path of the Request URI
     * @return string
     */
    public function getUri(): string
    {
        return $this->fullUri;
    }

    /**
     * Any conversion of this object to a string should result in a return of the formed URI
     * @return string
     */
    public function __toString(): string
    {
        return $this->getUri();
    }
}