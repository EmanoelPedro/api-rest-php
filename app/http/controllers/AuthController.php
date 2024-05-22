<?php

namespace App\Http\Controllers;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Framework\Http\Controller;
use Framework\Http\Request;
use Psr\Http\Message\RequestInterface;

class AuthController
{

  public function __construct(private RequestInterface $request)
  {
  }

  public function login()
  {
   var_dump($this->request->getBody());
  }
  
  public function test()
  {
    $key = 'example_key';

    if(!getallheaders()['Authorization']) {
      header('HTTP/1.1 401 Unauthorized');
      echo '{"mensagem": "Credenciais não enviadas"}';
      die();
    }

    $token = str_replace('bearer ', '', getallheaders()['Authorization']);
    
    $decoded = JWT::decode($token, new Key($key, 'HS256'));
  }
}