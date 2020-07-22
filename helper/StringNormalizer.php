<?php
/**
 * Created by PhpStorm.
 * User: Sensetivity
 * Date: 22.07.2020
 * Time: 23:23
 */

namespace JikanPHP\Helper;


class StringNormalizer
{
    public static function normalizeName(string $name):string
    {
        return str_replace([' ', '-'], ['_', '_'], strtolower($name));
    }
}