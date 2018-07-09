<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use ArchNate\MessengerSdk\Api\FacebookRequestUri;

class FacebookRequestUriTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testRequestUri($expected, $version, $path)
    {
        $requestUri = new FacebookRequestUri($version, $path);

        $this->assertSame($expected, $requestUri->getUri());
        $this->assertSame((string) $requestUri, $requestUri->getUri());
    }

    public function dataProvider()
    {
        return [
          ['https://graph.facebook.com/v2.6/me/messages', 'v2.6', '/me/messages']
        ];
    }
}
