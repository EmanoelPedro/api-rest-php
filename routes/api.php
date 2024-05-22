<?php
use App\Http\Middlewares\UserAuthMiddleware;

$router->get('/login', 'AuthController@login');
$router->get('/test', 'AuthController@test', middleware: [UserAuthMiddleware::class]);
