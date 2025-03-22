<?php

namespace App\Utilities;


class Asset
{

    public static function get(string $route): string
    {
        return $_ENV['HOST'] . 'assets/'.$route;
    }


    public static function __callStatic($name, $route)
    {
        return $_ENV['HOST'] . 'assets/'.$name . '/'. implode(',', $route);
    }
}
