<?php

function dd($var)
{
    var_dump($var);
    exit();
}

function site_url($route)
{
    return $_ENV['HOST'].$route;
}


function random_element($array)
{
    shuffle($array);
    return array_pop($array);
}

