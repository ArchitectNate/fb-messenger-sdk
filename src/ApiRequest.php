<?php

declare(strict_types=1);

namespace ArchNate\MessengerSdk;

use Tightenco\Collect\Support\Collection;

class ApiRequest {

  /**
   * @var FacebookAccessToken
   */
  protected $accessToken;

  /**
   * @var Collection
   */
  protected $requestBody;

  /**
   * @var FacebookRequestUri
   */
  protected $endpoint;

  /**
   * @param FacebookAccessToken $accessToken
   */
  public function __construct(FacebookAccessToken $accessToken, FacebookRequestUri $endpoint, Collection $requestBody)
  {
   $this->accessToken = $accessToken;
   $this->requestBody = $requestBody;
   $this->endpoint = $endpoint;
  }

  /**
   * Convert our collection of data into a json string that can be sent to the FB API
   * 
   * @return string
   */
  public function getJson(): string
  {
    return $this->requestBody->toJson();
  }

  public function request()
  {
    
  }


}
