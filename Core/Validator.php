<?php

namespace Core;
class Validator
{
    /**
     * This method called pure method.
     * Pure method is not depended on outside var or data (not include $this->)
     * So, we can make it static method to call it directly
     */
    public static function string($value, $min = 1, $max = INF): bool
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email($value): bool
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}