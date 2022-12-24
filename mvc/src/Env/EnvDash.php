<?php

namespace Eraasoft311\Mvc\Env;

use Eraasoft311\Mvc\Contracts\Env\EnvInterface;

class EnvDash implements EnvInterface{

    public static $path;

    public static function load():array 
    {
       if(file_exists("env.json")){
          $JsonContent = file_get_contents("env.json");
          
          return json_decode($JsonContent,true);
          }else{
               echo "File is not exist";
       } 
    }

    public static function env(string $key):mixed
    {
         $content =   self::load();
          if(array_key_exists($key,$content)){
               return $content[$key];
          }
          return "key is not exist";
    }
}