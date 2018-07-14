<?php

declare(strict_types=1);

namespace ArchNate\MessengerSdk;

class ApiRequest {

  /**
   * @var FacebookAccessToken
   */
  protected $accessToken;

  /**
   * @var ModelRequestContainer
   */
  protected $mrc;

  /**
   * @param FacebookAccessToken $accessToken
   */
  public function __construct(FacebookAccessToken $accessToken, ModelCollectionInterface $mrc)
  {
   $this->accessToken = $accessToken;
   $this->mrc = $mrc;
  }

  /**
   * @todo Loop through all of the models recursively and run their "generateJson" methods
   * @return string
   */
  public function getJson()
  {
    $json = '';

    /** @todo We will need to reduce this code into something more manageable
     *  For now we'll do it as a simple recursive scan
     */ 



    return $json;
  }
}
