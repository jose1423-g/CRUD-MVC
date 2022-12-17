<?php  namespace Config;

    class Enrutador{

    public static function run(Request $request){

        $controlador = $request->getControlador() . "Controller";
        $ruta = ROOT . "Controllers" . DS . $controlador . ".php";
        $metodo = $request->getMetodo();
        echo $ruta ."<br>";
        
        if ($metodo == "index.php") {
            $metodo = "index";
        }else{
            echo "aqui perro";
        }
        
        $argumento = $request->getArgumento();
        if (is_readable($ruta)) {
            require_once $ruta;
            $mostrar = "Controllers\\". $controlador;
            $controlador = new $mostrar;
            if (!isset($argumento)) {
                call_user_func(array($controlador, $metodo));
            }else{
                call_user_func_array(array($controlador, $metodo), $argumento);
            }
        }   
        
       //cargar vistas
        //$ruta  = ROOT ."views". DS .$request->getControlador(). DS .$request->getMetodo(). ".php";
        //print $ruta;
        /*  
        if (is_readable($ruta)) {
            include_once $ruta;
        }else{
            print "no se puede";
        }
*/
    }
}

?>