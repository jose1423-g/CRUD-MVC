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
     //responde al formulario editar le pasamos como parametro el id del usuario
     public function editar($id){
        if (!$_POST) {   
            $this->secciones->set("id", $id);
            $datos = $this->secciones->view();
            return $datos;
        }else{
            $this->secciones->set("id", $_POST['id']);
            $this->secciones->set("nombre", $_POST['nombre']);
            $this->secciones->edit();
            header("Location:". URL. "secciones");       
        }
    }

    public function eliminar($id){
        $this->secciones->set("id",$id);
        $this->secciones->delete();
        header("Location:". URL. "secciones");       
    }


}
