<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require 'functions.php';
require 'Database.php';
//require 'router.php';

$db = new Database();
$posts = $db->query("select * from posts");
dd($posts);

