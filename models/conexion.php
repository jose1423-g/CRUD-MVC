<?php

namespace Models;
    use mysqli;

    class Conexion{
        private $datos = array(
            "host" => "localhost",
            "user" => "root",
            "pass" => "",
            "db" => "prueba"
        );
        private $link;
        
        public function __construct(){
            $this->link = new \mysqli($this->datos['host'], $this->datos['user'], $this->datos['pass'], $this->datos['db']);
        }

        public function consultaSimple($sql){
            $this->link->query($sql);
        }

        public function consultaRetorno($sql){
            $datos = $this->link->query($sql);
            return $datos;
        }
    }

?>