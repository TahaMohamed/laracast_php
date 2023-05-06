<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require 'functions.php';
require 'Database.php';
$configs = require 'config.php';

$db = new Database($configs['database']);
$id = $_GET['id'];
$query ="SELECT * FROM posts WHERE id = ?";

$posts = $db->query($query, [$id])->fetch();

dd($posts);

