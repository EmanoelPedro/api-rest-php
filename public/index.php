<?php 
declare(strict_types=1);

use Dotenv\Dotenv;

use function FastRoute\simpleDispatcher;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

require_once __DIR__ . '/../app/bootstrap/app.php';