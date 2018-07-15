<?php

declare(strict_types=1);

namespace ArchNate\MessengerSdk;

use GuzzleHttp\Client;

class Messenger
{
  protected $accessToken;
  protected $client;

  public function __construct(string $accessToken)
  {
    $this->accessToken = $accessToken;
    $this->client = new Client([
      'base_uri' => 'https://graph.facebook.com/',
    ]);
  }

  public function getAccessToken(): string
  {
    return $this->accessToken;
  }

  public function getClient(): Client
  {
    return $this->client;
  }

  public function send(SendableInterface $model)
  {
    $client = $this->getClient();
    $endpoint = $this->getEndpoint($model->getEndpoint());
    $headers = $this->getHeaders();

    $data = $this->getBody($model);

    $client->request($model->getRequestType(), $endpoint, $headers, $data, $options);
  }

  protected function getEndpoint(SendableInterface $model)
  {
    return $model->getEndpoint() . "?access_token=" . $this->accessToken();
  }

  protected function getHeaders()
  {
    $headers = [];

    $headers->add($this->getSecurityHeader());
  }

  protected function getBody(SendableInterface $model)
  {
    $requestContainer = new $requestContainer($model); // USER LARAVEL COLLECTIONS
    return $requestContainer->getJson();
  }
}
