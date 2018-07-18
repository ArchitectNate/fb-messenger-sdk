<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use GuzzleHttp;
use ArchNate\MessengerSdk\{
  Messenger,
  SendableInterface
};

class MessengerTest extends TestCase
{
  protected $accessToken = 'some-access-token';
  protected $messenger;

  public function setUp()
  {
    $this->messenger = new Messenger($this->accessToken);
  }

  public function tearDown()
  {
    $this->messenger = null;
  }

  /**
   * @test
   * @expectedException ArgumentCountError
   */
  public function requires_one_argument()
  {
    new Messenger();
  }

  /**
   * @test
   * @expectedException TypeError
   * @expectedExceptionMessageRegExp /Argument 1 passed to .* must be of the type string, .* /
   */
  public function requires_one_string_argument()
  {
    new Messenger(null);
  }

  /** @test */
  public function retains_access_token()
  {
    $this->assertEquals($this->accessToken, $this->messenger->getAccessToken());
  }

  /** @test */
  public function initializes_with_client()
  {
    $this->assertInstanceOf(GuzzleHttp\Client::class, $this->messenger->getClient());
  }

  /** @test */
  public function gas_client_base_uri()
  {
    $baseUri = $this->messenger->getClient()->getConfig('base_uri');

    $this->assertNotEmpty($baseUri);
  }

  /** @test */
  public function can_send_a_model()
  {
    
  }
}
