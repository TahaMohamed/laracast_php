<?php

function dd($value)
{
    echo "<pre style='background-color: black; line-height:1.2em; font-size: large; font-weight:bold; color: green;'>";
    var_dump($value);
    echo "</pre>";
    die();
}

function authorize($condition, $status = Response::FPRBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}