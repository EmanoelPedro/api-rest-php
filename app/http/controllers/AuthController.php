<?php

namespace App\Http\Controllers;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class AuthController 
{
  public function login()
  {
    
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