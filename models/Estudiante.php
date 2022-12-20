<?php 
    namespace Models;
    use mysqli;

    class Estudiante{
        //atributos
        private $id;
        private $nombre;
        private $edad;
        private $promedio;
        private $imagen;
        private $id_seccion;
        private $link;

        public function __construct(){
            $this->link = new conexion;
        }

        public function set($atributo, $contenido){
            $this->$atributo = $contenido;
        }

        public function  get($atributo){
            return $this->$atributo;
        }

        public function listar(){
            //$sql= "SELECT t1.*, t2.nombre as nombre_seccion from estudiantes t1 INNER JOIN secciones t2 on t1.id_seccion = t2.id";
            $sql = "SELECT * FROM estudiantes";
            $datos = $this->link->consultaRetorno($sql);
            return $datos;
        }

        public function add(){
            $sql = "INSERT INTO estudiantes(nombre, edad, promedio, imagen, id_seccion)
            VALUES('{$this->nombre}','{$this->edad}','{$this->promedio}','{$this->imagen}','{$this->id_seccion}')";
            $this->link->consultaSimple($sql);
        }

        public function delete(){
            $sql = "DELETE FROM estudiantes WHERE id= '{$this->id}'";
            $this->link->consultaSimple($sql);
        }

        public function edit(){
            $sql = "UPDATE estudiantes SET nombre = '{$this->nombre}', edad = '{$this->edad}', promedio = '{$this->promedio},
            id_seccion = '{$this->id_seccion}' WHERE id = '{$this->id}'";
            $this->link->consultaSimple($sql);
        }

        public function view(){
            $sql = "SELECT t1.*, t2.nombre as nombre_seccion FROM estudiantes t1 INNER JOIN secciones t2 ON 
            t1.id_seccion = t2.id where t1.id = '{$this->id}'";
            $datos = $this->link->consultaRetorno($sql);
            $row = mysqli_fetch_assoc($datos);
            return $row;
        }
    }



?>