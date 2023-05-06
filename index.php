<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require 'functions.php';
//require 'router.php';
// Connect to MySQL database
$dsn = 'mysql:host=localhost;port=3306;dbname=laracasts_php;user=root;password=1;charset=utf8mb4;unix_socket=/tmp/mysql.sock';
$pdo = new PDO($dsn);
$statement = $pdo->prepare("select * from posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
