<?php

$configs = require 'config.php';
$db = new Database($configs['database']);

$heading = 'My Notes';

$notes = $db->query("SELECT * FROM notes WHERE user_id = :user_id", ['user_id' => 1])->get();

require "views/notes.view.php";