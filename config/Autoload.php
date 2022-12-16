<?php 
namespace config;

class Autoload{
    public static function run(){
        spl_autoload_register(function($class){
            $ruta  = str_replace("\\", "/", $class);
            print $ruta;
        });
    }
}


?>