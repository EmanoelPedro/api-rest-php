<?php

namespace App\Models;
use Firebase\JWT\JWT;
use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{

  public function __construct()
  {
    parent::__construct('users',['name','email','password']); 
  }

  public function login($email, $password): false|string
  {
    $user = $this->find()->in('email', $email)->fetch();
    if(!$user) {
      return false;
    }

    if(!password_verify($password, $user->password)) {
      return false;
    } 

    return $this->generateToken($user);
  }
    
    private function generateToken(User $user): string
    {
      
    $key = 'example_key';
    $payload = [
      'iss' => $_SERVER['HTTP_HOST'],
      'sub' => [
        'email' => $user->email 
      ],
      'iat' => time(),
      'nbf' => time(),
      'exp' => time() + (60 * 60 * 2) // Two Hours
    ];

    $jwt = JWT::encode($payload, $key, 'HS256');
    return $jwt;
    }

  }