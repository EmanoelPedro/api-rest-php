<?php

namespace Framework\Container;
use App\Http\Controllers\AuthController;
use Framework\Http\Controller;

use Framework\Http\Response;
use Framework\Http\Request;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use function DI\create;

return [
  RequestInterface::class, \DI\autowire(Request::class),
];
