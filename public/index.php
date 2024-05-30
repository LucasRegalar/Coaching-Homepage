<?php

const BASE_PATH = __DIR__ . "/../";
require BASE_PATH . "core/functions.php";
require base_path("vendor/autoload.php");

use core\Router;
use core\Session;
use Dotenv\Dotenv;


session_start();

$rootDir = __DIR__ . "/../";
$dotenv = Dotenv::createImmutable($rootDir);
$dotenv->load();

$router = new Router();
require base_path("routes/web.php");

$uri = parse_url(($_SERVER["REQUEST_URI"]))["path"];
$method = $_POST["_method"] ?? $_SERVER["REQUEST_METHOD"];

$router->route($uri, $method);

Session::unflash();

