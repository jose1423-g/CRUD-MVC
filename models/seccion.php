<?php 

namespace models;
use mysqli;

    class Seccion{
        private $id;
        private $nombre;

        public function __construct(){
            $this->link = new Conexion();
        }
        
        public function set($atributo, $contenido){
            $this->$atributo = $contenido;
        }

        public function  get($atributo){
            return $this->$atributo;
        }

        public function listar(){
            $sql = "SELECT * FROM secciones";
            $datos = $this->link->consultaRetorno($sql);
            return $datos;
        }
        
        public function add(){
            $sql = "INSERT INTO secciones (id, nombre) VALUES (null,'{$this->nombre}')";
            $this->link->consultaSimple($sql);
        }

        public function delete(){
            $sql = "DELETE FROM secciones WHERE id = '{$this->id}'";
            $this->link->consultaRetorno($sql);
        }

        public function edit(){
            $sql = "UPDATE FROM secciones SET nombre = '{$this->nombre}' WHERE id = '{$this->id}'";
            $this->link->consultaSimple($sql);
        }

        public function view(){
            $sql = "SELECT * FROM secciones WHERE id = '{$this->id}'";
            $datos = $this->link->consultaRetorno($sql);
            $row = mysqli_fetch_assoc($datos);
            return $row;
        }
   
    }



?>