<?php  namespace Config;

    class Enrutador{

    public static function run(Request $request){

        $controlador = $request->getControlador() . "Controller";//obtenemos el controlador con la funcion getControlador 
        $ruta = ROOT . "Controllers"  . DS . $controlador . ".php";//creamos una ruta 
        $metodo = $request->getMetodo();//obtenemos el metodo de la funcion getMetodo

        if ($metodo == "index.php") {
            $metodo = "index";
        }
        $argumento = $request->getArgumento();//obtenemos el argumento de la funcion getArgumento
        if (is_readable($ruta)) {//si la ruta es leible sera true 
            require_once $ruta;
            $mostrar = "Controllers\\". $controlador;
            $controlador = new $mostrar;
            if (!isset($argumento)) {//si el argumento no existe
                //call_user_func = Llamar a una llamada de retorno dada por el primer parámetro
               $datos =  call_user_func(array($controlador, $metodo));//array crea un array
            }else{
                //call_user_func = Llamar a una llamada de retorno dada por el primer parámetro
               $datos = call_user_func_array(array($controlador, $metodo), $argumento);
            }
        }   
        
       //carga las vista para el usuario
       //creamos una ruta
        $ruta  = ROOT ."views". DS .$request->getControlador(). DS .$request->getMetodo(). ".php";
        if (is_readable($ruta)){//si el archivo es leible sera true
            include_once $ruta;
        }else{
            print "no se puede cargar la vista";
        }
    }
}

?>