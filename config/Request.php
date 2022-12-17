<?php  namespace Config;

    class Request{
        private $controlador;
        private $metodo;
        private $argumento;
        
        public  function __construct(){
            if (isset($_GET['url'])) {
                $ruta = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
                $ruta = explode("/", $ruta);
                $ruta = array_filter($ruta);
                print_r($ruta);
                
                if ($ruta[0] == "index.php") {
                    $this->controlador = "secciones";
                    echo "pero no entra aqui";
                }else{
                    $this->controlador = strtolower(array_shift($ruta));
                    echo "entro aqui";
                }
                
                $this->metodo = strtolower(array_shift($ruta));
                if (!$this->metodo) {
                    $this->metodo = "index";
                }
                $this->argumento = $ruta;
            }
            /*else{
                $this->controlador = "estudiantesController";
                $this->metodo = "index";
            }*/
        }
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

