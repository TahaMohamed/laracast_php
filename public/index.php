<?php
const BASE_PATH = __DIR__ . '/../';

error_reporting(E_ALL);
ini_set('display_errors', '1');


require BASE_PATH . 'functions.php';

spl_autoload_register(function ($class){
    require base_path("Core/{$class}.php");
});

require base_path('router.php');


