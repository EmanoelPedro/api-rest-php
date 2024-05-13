<?php 
declare(strict_types=1);

use App\Http\Middlewares\UserAuthMiddleware;
use CoffeeCode\Router\Router;
use Dotenv\Dotenv;

include 'vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$router = new Router('http://localhost/jwtlearn', '@');
$router->namespace('App\Http\Controllers');

$router->post('/login', 'AuthController@login', 'login');
$router->get('/test', 'AuthController@test', middleware: [UserAuthMiddleware::class]);

$router->dispatch();

if($router->error()){
  $router->redirect("error/{$router->error()}");
}