<?php

namespace Eraasoft311\Mvc\Cookies;

use Eraasoft311\Mvc\Contracts\Storage\TypeInterface;

class CookiesDash extends TypeInterface{

    public static function set(string $key,mixed $value,int $time = 3600*24,$path = "/"):void
    {
       setcookie($key,$value,time() + $time,$path);
    }
    public static function get(string $key):mixed
    {
        return $_COOKIE[$key];
    }
    public static function destroy($key):void
    {
        setcookie($key,"",time() - 100,"/");
        unset($_COOKIE[$key]);
    }
}