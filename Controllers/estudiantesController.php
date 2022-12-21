<?php  
    namespace Controllers;
    use Models\Estudiante as Estudiante;
    use Models\Seccion as Seccion;

class estudiantesController{
    
    private $estudiante;
    private $seccion;

    public function __construct(){
        $this->estudiante = new Estudiante();
        $this->seccion = new Seccion;
    }
    
    //metodo
    public function index(){//esta funcion se llama por defecto
        $datos = $this->estudiante->listar();
        return $datos;
    }
 
    public function agregar(){
        if(!$_POST){
            $datos = $this->seccion->listar();
            return $datos;
        }else{
            $permitidos = array("image/jpeg","image/png","image/gif","image/jpg");
            $limite = 700;
            if (in_array($_FILES['imagen']['type'],$permitidos) && $_FILES['imagen']['size'] <= $limite * 1024) {
                $nombre = $_FILES['imagen']['name'];
                //$ruta = URL . "views" .DS."img".DS.$nombre;
                $ruta ="views/template/img/".$nombre;
                move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
                $this->estudiante->set("nombre", $_POST['name']);
                $this->estudiante->set("edad", $_POST['edad']);
                $this->estudiante->set("promedio", $_POST['promedio']);
                $this->estudiante->set("imagen", $nombre);
                $this->estudiante->set("id_seccion", $_POST['id_seccion']);
                $this->estudiante->add();
                header("Location:". URL. "estudiantes");       
            }
        }
    }
    //responde al formulario editar le pasamos como parametro el id del usuario
    public function editar($id){
        if (!$_POST) {   
            $this->estudiante->set("id", $id);
            $datos = $this->estudiante->view();
            return $datos;
        }else{
            $this->estudiante->set("id", $_POST['id']);
            $this->estudiante->set("nombre", $_POST['nombre']);
            $this->estudiante->set("edad", $_POST['edad']);
            $this->estudiante->set("promedio", $_POST['promedio']);
            $this->estudiante->set("id_seccion", $_POST['id_seccion']);
            $this->estudiante->edit();
            header("Location:". URL. "estudiantes");       
        }
    }

    public function eliminar($id){
        $this->estudiante->set("id", $id);
        $this->estudiante->delete();
        header("Location:". URL. "estudiantes");       
    }

    //lista las secciones en el archivo editar de estudiantes;
    public function listarSecciones(){
        $datos = $this->seccion->listar();
        return $datos;
    }
}

$estudiantes = new estudiantesController();

?>