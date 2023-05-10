<?php

use Core\{Database, Validator};

$config = require base_path('config.php');
$db = new Database($config['database']);

$data = ['heading' => 'Create Note.'];

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $errors = [];

    if (! Validator::string($_POST['body'], 1, 500)){
        $errors['body'] = 'A body of no more than 500 characters is required.';
    }
    $data['errors'] = $errors;

    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES (:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}
view('notes/create.view.php', $data);
