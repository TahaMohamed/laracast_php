<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

}
$currentUser = 1;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_GET['id'];
    $note = $db->query(
        "SELECT * FROM notes WHERE id = :id",
        ['id' => $id]
    )->findOrFail();

    authorize($note['user_id'] === $currentUser);

    $db->query('DELETE FROM notes WHERE id = :id', [
        'id' => $id
    ]);

    header('location: /notes');
    exit();
} else {
    $note = $db->query(
        'SELECT * FROM notes WHERE id = :id',
        ['id' => $_GET['id']]
    )->findOrFail();

    authorize($note['user_id'] === $currentUser);

    view('notes/show.view.php', [
        'heading' => 'My Note.',
        'note' => $note
    ]);
}

