<?php  namespace Config;//nombre de espacios

    class Request{
        private $controlador;
        private $metodo;
        private $argumento;
        
        public  function __construct(){
            if (isset($_GET['url'])) {//si la variable url esta declarda es true en caso contrario false
                $ruta = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
                $ruta = explode("/", $ruta);//divide un string en varios string.
                $ruta = array_filter($ruta);//Filtra elementos de un array usando una función de devolución de llamada

                if ($ruta[0] == "index.php") {//si la ruta esta en la posicion cero es iual al index.php 
                    $this->controlador = "estudiantes";//asignamos un controlador a la variable controlador 
                    //echo "pero no entra aqui";
                }else{
                    //funcion strtolower =  Convierte un string a minúsculas
                    //array_shift = Quita un elemento del principio del array
                    $this->controlador = strtolower(array_shift($ruta));//si el controlador se declara con letras mayusculas se vuelven minusculas
                }
                
                $this->metodo = strtolower(array_shift($ruta));
                if (!$this->metodo) {//si metodo es diferente de false ingresa true 
                    $this->metodo = "index";//asignamos el metodo index para que lo cargue por default
                }
                $this->argumento = $ruta;//¿Que hace aqui?
            }
            else{
                /*le asignamos un controlodaro a la variable controlador para que muestre ese controlador 
                en caso de que no este declarada la variable GET*/
                $this->controlador = "estudiantes";
                $this->metodo = "index";//asignamos un metodo por defecto a la variable metodo;
            }
        }
        //Retornamos las variables controlador, metodo y argumento
        public function getControlador(){
            return $this->controlador;
        }
        public function getMetodo(){
            return $this->metodo;
        }
        public function getArgumento(){
            return $this->argumento;
        }
    }

