<?php 
    namespace models;

    class estudiante{
        //atributos
        private $id;
        private $nombre;
        private $edad;
        private $promedio;
        private $imagen;
        private $id_seccion;
        private $fecha;
        private $link;

        public function __construct(){
            $this->link = new conexion;
        }

        public function listar(){
            $sql= "SELECT t1.*, t2.nombre as nombre_seccion from estudiantes t1 INNER JOIN secciones t2 on t1.id_seccion = t2.id";
            $datos = $this->link->consultaRetorno($sql);
            return $datos;
        }

        public function add(){
            $sql = "INSERT INTO estudiantes(id, nombre, edad, promedio, imagen, id_seccion, fecha) VALUES (null,
            '{$this->nombre}','{$this->edad}','{$this->promedio}','{$this->imagen}','{$this->id_seccion}', NOW())";
            $this->link->consultaSimple($sql);
        }

        public function delete(){
            $sql = "DELETE FROM estudiantes WHERE id= '{$this->id}'";
            $this->link->consultaSimple($sql);
        }

        public function edit(){
            $sql = "UPDATE FROM estudiantes SET nombre = '{$this->nombre}', edad = '{$this->edad}', promedio = '{$this->promedio},
            id_seccion = '{$this->id_seccion}' WHERE id = '{$this->id}'";
            $this->link->consultaSimple($sql);
        }

        public function view(){
            $sql = "SELECT t1.*, t2.nombre as nombre_seccion FROM estudiantes t1 INNER JOIN secciones t2 ON 
            t1.id_seccion = t2.id where id = '{$this->id}'";
            $datos = $this->link->consultaRetorno($sql);
        }
    }



?>