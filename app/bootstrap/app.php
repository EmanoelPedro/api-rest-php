<?php

namespace App\Bootstrap;

use App\Http\Controllers\AuthController;
use Framework\Http\ClassLoader;
use DI\Container;
use DI\ContainerBuilder;
use FastRoute\Dispatcher;
use Framework\Container\Application;
use Framework\Http\Router;
use Framework\Http\Request;
use Pecee\SimpleRouter\Route\Route;

$app = new Application();
$app->create();

$router = new Router();
$classLoader = new ClassLoader();
// $router->setCustomClassLoader(new ClassLoader());


// $router->setDefaultNamespace('\App\Http\Controllers');
Router::get('/', [AuthController::class,'login']);

$router->group(['prefix' => 'papa'], function(){
});
$router->start();