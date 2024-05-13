<?php
namespace Config;

use PDO;
const DATA_LAYER_CONFIG = [
  "driver" => "mysql",
  "host" => "localhost",
  "port" => "3306",
  "dbname" => "jwtlearn",
  "username" => "root",
  "passwd" => $_ENV[''],
  "options" => [
      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
      PDO::ATTR_CASE => PDO::CASE_NATURAL
  ]
];