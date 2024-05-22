<?php 

namespace Framework\Http;

use Pecee\SimpleRouter\SimpleRouter;
use Pecee\SimpleRouter\Route\IGroupRoute;
use Pecee\SimpleRouter\Event\EventArgument;
use Pecee\SimpleRouter\Route\ILoadableRoute;
use Pecee\SimpleRouter\Handlers\EventHandler;

class Router extends SimpleRouter
{

  public function __construct()
  {
    $basePath = $_ENV['APP_URL'] ?? 'http://localhost:8000';
    $eventHandler = new EventHandler();
    $eventHandler->register(EventHandler::EVENT_ADD_ROUTE, function(EventArgument $event) use($basePath) {
      $route = $event->route;
      // Skip routes added by group as these will inherit the url
      if($event->isSubRoute) {
        return;
      }
      
      switch (true) {
        case $route instanceof ILoadableRoute:
          $route->prependUrl($basePath);
          break;
        case $route instanceof IGroupRoute:
          $route->prependPrefix($basePath);
          break;
    
      }
      
    });
    $this->addEventHandler($eventHandler);
  }
}