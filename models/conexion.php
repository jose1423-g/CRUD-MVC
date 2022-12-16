<?php

namespace models;

use mysqli;

    class conexion{
        private $datos = array(
            "host" => "tu host",
            "user" => "tu usuario",
            "pass" => "tu password",
            "db" => "nombre de la base de datos"
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