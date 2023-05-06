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

function filter($items, $fn)
{
    $filteredItems = [];
    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
}

//Define function on the fly (on run time)
$filteredBooks = filter($books, function ($book) {
    return $book['release_year'] >= 2000;
});

require "index.view.php";
