<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
<h1>
    Recommended Books
</h1>

<?php
$books = [
    [
        "name" => "Do Androids Dream of Electric Sheep",
        "author" => "Philip K. Dick",
        "purchase_url" => "http://example.com",
    ],
    [
        "name" => "The Langoliers",
        "author" => "Jeffery Way",
        "purchase_url" => "http://example.com",
    ],
    [
        "name" => "Project Hail Mary",
        "author" => "Andy Weir",
        "purchase_url" => "http://example.com",
    ],
];
?>

<ul>
    <?php foreach ($books as $book): ?>
        <a href="<?= $book['purchase_url'] ?>">
            <?= $book['name'] ?>
        </a>
        <br/>
    <?php endforeach; ?>
</ul>
</body>
</html>
