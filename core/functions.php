<?php

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function base_path($path) {
    return BASE_PATH . $path;
}

function view($path, $attributes = []) {

    extract($attributes);

    require base_path("views/" . $path);
}

function abort($code = "404") {
    http_response_code($code);
    view("error/$code.view.php");
    die();
}

function redirect ($path) {
    header("location: {$path}");
    exit();
}
