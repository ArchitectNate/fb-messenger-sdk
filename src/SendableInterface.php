<?php

declare(strict_types=1);

namespace ArchNate\MessengerSdk;

interface SendableInterface
{
  public function getEndpoint();
  public function getHeaders();
  
}
