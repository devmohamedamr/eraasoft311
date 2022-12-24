<?php


namespace Eraasoft311\Mvc\Contracts\Env;


interface EnvInterface{
    public static function load():array;
    public static function env(string $key):mixed;
}