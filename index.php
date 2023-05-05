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
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'release_year' => 1968,
        'purchase_url' => 'http://example.com',
    ],
    [
        'name' => 'The Langoliers',
        'author' => 'Andy Weir',
        'release_year' => 2021,
        'purchase_url' => 'http://example.com',
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'release_year' => 2011,
        'purchase_url' => 'http://example.com',
    ],
];

function filterByAuthor($books, $author){
   $filteredBooks = [];
   foreach ($books as $book){
       if ($book['author'] === $author){
           $filteredBooks[] = $book;
       }
   }
   return $filteredBooks;
}
?>

<ul>
    <?php foreach (filterByAuthor($books, 'Andy Weir') as $book): ?>
        <li>
            <a href="<?= $book['purchase_url'] ?>">
                <?= $book['name'] ?> (<?= $book['release_year'] ?>) - By <?= $book['author'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>
