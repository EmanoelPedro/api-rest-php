<?php

namespace Framework\Http;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class Controller 
{
  protected ResponseInterface $response;
  protected RequestInterface $request;

  protected $router;
  public function __construct($router, ResponseInterface $response, RequestInterface $request)
  {
    $this->response = $response;
    $this->request = $request;
  }
}