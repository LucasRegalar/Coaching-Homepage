<?php 

use core\Router;
use core\Session;

session_start();

const BASE_PATH = __DIR__ . "/../";

require BASE_PATH . "core/functions.php";

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require base_path("{$class}.php");
});

$router = new Router();
require base_path("routes/web.php");

$uri = parse_url(($_SERVER["REQUEST_URI"]))["path"];
$method = $_POST["_method"] ?? $_SERVER["REQUEST_METHOD"];


$router->route($uri, $method);

Session::unflash();

