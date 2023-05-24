<?php

require_once "core/routes.php";
require_once "config/config.php";
require_once "config/Conexion.php";

if(isset($_GET["controller"])){
    $controller = validarControlador($_GET["controller"]);

    if(isset($_GET["action"])){
        
        if(isset($_GET["id"])){
            validarAccion($controller, $_GET["action"],$_GET["id"]);
        }else{
            validarAccion($controller, $_GET["action"]);
        }
          
    }else{
        validarAccion($controller, ACCION_DEFAULT);
    }


}else{
    $control = validarControlador(CONTROLADOR_DEFAULT);
    $accionTMP = ACCION_DEFAULT;
    $control->$accionTMP();
}



