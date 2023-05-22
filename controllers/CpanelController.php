<?php

class CpanelController{

    public function __construct(){
        #echo "Este es el controlador por defecto - CPANEL";
    }

    public function index(){

       $data["titulo"] = "Administración principal";
       require_once TEMPLATE;
    }
    
}
