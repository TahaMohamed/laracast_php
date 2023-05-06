<?php

$configs = require 'config.php';
$db = new Database($configs['database']);

$heading = 'Note';
$currentUser = 1;

$note = $db->query(
    "SELECT * FROM notes WHERE id = :id",
    ['id' => $_GET['id']]
)->fetch();

if (! $note){
    abort();
}

if ($note !== $currentUser){
    abort(Response::FPRBIDDEN);
}

require "views/note.view.php";
