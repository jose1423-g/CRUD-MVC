<?php  namespace Config;//creamos un nombre de espacio para ahorrarnos la herencia entre clases

class Autoload{
    public static function run(){
        spl_autoload_register(function($class){//si 
            $ruta  = str_replace("\\", "/", $class) . ".php";//reemplaza las \\ por / y la $class es donde se busca //
            include_once $ruta;//incluye la ruta en el archivo index
        });
    }
}


?>