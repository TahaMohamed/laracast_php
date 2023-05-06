<?php

function dd($value)
{
    echo "<pre style='background-color: black; color: green; font-size: larger;'>";
    var_dump($value);
    echo "</pre>";
    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}