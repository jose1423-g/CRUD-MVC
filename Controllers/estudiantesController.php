<?php  namespace Controllers;
    use Models\Estudiante as Estudiante;

class estudiantesController{
    
    private $estudiante;

    public function __construct(){
        $this->estudiante = new Estudiante();
    }
    
    //metodo
    public function index(){//esta funcion se llama por defecto
        $datos = $this->estudiante->listar();
        return $datos;
    }
    
}

$estudiantes = new estudiantesController();
