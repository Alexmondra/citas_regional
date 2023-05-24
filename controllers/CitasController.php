<?php

class CitasController{

    protected $citas;
    protected $validaciones;
    //protected $errores;

    public function __construct(){

        session_start(); // esto es una función de PHP para iniciar una sesión 

        require_once "models/CitasModel.php";
        require_once "controllers/ValController.php";
        $this->citas = new CitasModel(); 
        $this->validaciones = new ValController();
        //$this->errores = array();

    }

    public function index() {
        $data["titulo"] = "GESTIÓN DE CITAS";
        $data["resultado"] = $this->citas->getCitas();
        $data["contenido"] = "views/citas/citas.php";
        require_once TEMPLATE;
    }



    


}



?>