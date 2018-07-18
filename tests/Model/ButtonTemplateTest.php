<?php

declare(strict_types=1);

namespace Tests\Model;

use PHPUnit\Framework\TestCase;
use GuzzleHttp;
use ArchNate\MessengerSdk\{
  SendableInterface,
  Model\ButtonTemplate
};

class ButtonTemplateTest extends TestCase
{
  /** @test */
  public function implements_sendable()
  {
    $buttonTemplate = new ButtonTemplate();

    $this->assertInstanceOf(SendableInterface::class, $buttonTemplate);
  }
}