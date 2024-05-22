<?php

namespace Framework\Http;

use DI\ContainerBuilder;
use Pecee\SimpleRouter\ClassLoader\IClassLoader;
use Pecee\SimpleRouter\Exceptions\ClassNotFoundHttpException;


class ClassLoader implements IClassLoader 
{
  protected $container;

  public function __construct()
  {    
    $this->container = (new ContainerBuilder)
                  ->useAutowiring(true)
                  ->build();
  }

    /**
     * Load class
     *
     * @param string $class
     * @return object
     * @throws ClassNotFoundHttpException
     */
    public function loadClass(string $class)
    {
        if ($this->container->has($class) === false) {
            throw new ClassNotFoundHttpException($class, null, sprintf('Class "%s" does not exist', $class), 404, null);
        }
        return $this->container->get($class);
    }
    
    /**
     * Called when loading class method
     * @param object $class
     * @param string $method
     * @param array $parameters
     * @return string
     */
    public function loadClassMethod($class, string $method, array $parameters)
    {
        return (string)$this->container->call([$class, $method], $parameters);
    }

    /**
     * Load closure
     *
     * @param Callable $closure
     * @param array $parameters
     * @return string
     */
    public function loadClosure(callable $closure, array $parameters)
    {
        return (string)$this->container->call($closure, $parameters);
    }
}