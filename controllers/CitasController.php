<?php

class CitasController{

    protected $citas;
    protected $validaciones;
    //protected $errores;

    public function __construct(){

        session_start(); // iniciar una sesión 

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

    public function nuevo()
    {
        $data["titulo"] = "FORMULARIO DE REGISTRO DE USUARIOS";
        $data["contenido"] = "views/citas/citas_nuevo.php";
        require_once TEMPLATE;
    }


    public function registrar(){
        
        $nombres = $_POST["txtNombres"];
        $apellidos = $_POST["txtApellidos"];
        $email = $_POST["txtEmail"];
        $pass = $_POST["txtPassword"];
        $estado = $_POST["cboEstado"];
        $tipo = $_POST["cboTipo"];


        if (isset($_POST["btnEnviar"])) {

            $nomArchivo = $_FILES["imagen"]["name"];
            $nomTemporal = $_FILES["imagen"]["tmp_name"];
            $fileSize = $_FILES["imagen"]["size"];
            $extension =  pathinfo($nomArchivo, PATHINFO_EXTENSION);
            $nomArchivo = substr(md5(time()), 0, 10) . "." . $extension;

            $this->validarNombres($nombres);
            $this->validarApellidos($apellidos);
            $this->validarEmail($id = null, $email);
            $this->validarpass($pass);
            $this->validarImagen($extension, $fileSize);
            $this->validarEstado($estado);
            $this->validarTipo($tipo);


            if ($this->errores) {
                $data["errores"] = $this->errores;
                $data["titulo"] = "FORMULARIO DE REGISTRO DE USUARIOS";
                $data["contenido"] = "views/usuarios/usuario_nuevo.php";
                require_once TEMPLATE;
            } else {

                move_uploaded_file($nomTemporal, "public/users/" . $nomArchivo);

                $data = array(
                    "nombres" => $_POST["txtNombres"],
                    "apellidos" => $_POST["txtApellidos"],
                    "email" => $_POST["txtEmail"],
                    "pass" => $_POST["txtPassword"],
                    "imagen" => $nomArchivo,
                    "estado" => $_POST["cboEstado"],
                    "tipo" => $_POST["cboTipo"],
                    "fechaRegistro" => date("Y-m-d H:i:s")
                );

                $this->usuarios->save($data);
                $_SESSION['mensaje'] = "Datos registrados correctamente";

                header("Location: index.php?c=UsuarioController");
            }
        } else {
            require_once ERROR404;
        }
    }





    



    


}



?>