<?php  namespace Config;

    class Enrutador{

    public static function run(Request $request){

        $controlador = $request->getControlador() . "controllers";
        $ruta = ROOT . "controllers" . DS . $controlador . ".php";
        $metodo = $request->getMetodo();
        
        if ($metodo == "index.php") {
            $metodo = "index";
        }
        
        $argumento = $request->getArgumento();
        if (is_readable($ruta)) {
            require_once $ruta;
            $mostrar = "controllers\\". $controlador;
            $controlador = new $mostrar;
            if (!isset($argumento)) {
                call_user_func(array($controlador, $metodo));
            }else{
                call_user_func_array(array($controlador, $metodo), $argumento);
            }
        }   
        
      /*  //cargar vistas
        $ruta  = ROOT . "views" . DS . $request->getControlador() . DS . $request->getMetodo(). ".php";
        print $ruta;*/

    }
}

?>