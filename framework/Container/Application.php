<?php

namespace Framework\Container;
use DI\Container;
use DI\ContainerBuilder;
use Framework\Http\Request;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\RequestInterface;

class Application
{
 
  private readonly Container $container;
  protected array $serviceProviders = [];

  private function build(): Container
  {
    /**
     * @var \DI\ContainerBuilder $container
     */
    $builder = new ContainerBuilder();
    $builder->addDefinitions(
      [
      RequestInterface::class => \DI\autowire(Request::class),
      ]
    );
    return $builder->build();
  }

  public function addDefinitionFile(string $filePath) 
  {
  }

  public function create()
  {
    $container = $this->build();
  }
}
