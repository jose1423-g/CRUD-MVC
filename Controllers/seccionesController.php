<?php  
    namespace Controllers;
    use Models\Estudiante as Estudiante;
    use Models\Seccion as Seccion;


class seccionesController{
    private $estudiante;
    private $secciones;
    
    public function __construct(){
        $this->estudiante = new Estudiante;
        $this->secciones = new Seccion();
    }
    
    public function  index(){       
       $datos = $this->secciones->listar();
       return $datos;
    }

    public function agregar(){
        if ($_POST) {
            $this->secciones->set("nombre", $_POST['nombre']);
            $this->secciones->add();
            header("Location:".URL."secciones");
        }   
    }


}
