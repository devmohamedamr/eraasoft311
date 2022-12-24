<?php

namespace Eraasoft311\Mvc\Session;

use Eraasoft311\Mvc\Contracts\Storage\TypeInterface;

class SessionDash extends TypeInterface{
    public function __construct()
    {
        session_start();
        return new static;
    }
    public static function set(string $key,mixed $value,int $time,$path):void
    {
        $_SESSION[$key] = $value;
    }
    public static function get(string $key):mixed
    {
        return $_SESSION[$key];
    }
    public static function destroy($key):void
    {
        session_destroy();
    }
}