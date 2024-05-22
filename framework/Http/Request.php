<?php

namespace Framework\Http;

use Psr\Http\Message\RequestInterface;
class Request implements RequestInterface
{
  
  public function __construct()
  {
    
  }
    public function getMethod(): string
    {
      
    }
    
    public function getRequestTarget(): string
    {
      
    }

    
    public function withRequestTarget(string $requestTarget): RequestInterface
    {
      
    }

    public function getUri(): \Psr\Http\Message\UriInterface
    {
      
    }

    public function withUri(\Psr\Http\Message\UriInterface $uri, bool $preserveHost = false): RequestInterface
    {

    }

    public function getHeaders(): array
    {
      
    }

    public function getBody(): \Psr\Http\Message\StreamInterface
    {
      
    }

    public function withBody(\Psr\Http\Message\StreamInterface $body): \Psr\Http\Message\MessageInterface
    {
      
    }

    public function getHeader(string $name): array
    {
      
    }

    public function withHeader(string $name, $value): \Psr\Http\Message\MessageInterface
    {
      
    }

    public function getHeaderLine(string $name): string
    {
      
    }

    public function getProtocolVersion(): string
    {

    }


    public function hasHeader(string $name): bool
    {
      
    }

    
    public function withAddedHeader(string $name, $value): \Psr\Http\Message\MessageInterface
    {

    }


    public function withMethod(string $method): RequestInterface
    {
      
    }

    public function withoutHeader(string $name): \Psr\Http\Message\MessageInterface
    {
      
    }

    public function withProtocolVersion(string $version): \Psr\Http\Message\MessageInterface
    {
      
    }


}