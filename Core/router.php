<?php

$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)){
        require base_path($routes[$uri]);
    }else{
        abort();
    }
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.view.php";
    die();
}

routeToController($uri, $routes);