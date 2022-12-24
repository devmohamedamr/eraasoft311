<?php
namespace Eraasoft311\Mvc\Contracts\Storage;

abstract class TypeInterface{ 
    public static abstract function set(string $key,mixed $value,int $time,$path):void;
    public static abstract function get(string $key):mixed;
    public static abstract function destroy($key):void;
}