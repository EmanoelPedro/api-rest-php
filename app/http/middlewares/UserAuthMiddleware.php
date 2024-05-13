<?php

namespace App\Http\Middlewares;

use CoffeeCode\Router\Router;
use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class UserAuthMiddleware
{
  public function handle(Router $router): bool
  {
    $token = getallheaders()['Authorization'];
    if(!$token)
    {
      http_response_code(401);
      return false;
    }

    $token = str_replace('Bearer ','', $token);

    try {
      $data = JWT::decode($token, new Key($_ENV['JWT_DEFAULT_KEY'], $_ENV['JWT_DEFAULT_ALGO']));

    } catch (Exception $exception) {
      http_response_code(401);
      return false;
    }


    return true;
  }
}