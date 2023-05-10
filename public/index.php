<?php
const BASE_PATH = __DIR__ . '/../';

error_reporting(E_ALL);
ini_set('display_errors', '1');


require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class){
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});

require base_path('Core/router.php');


