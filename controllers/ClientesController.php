<?php

class ClientesController{

    public function __construct(){
        echo "Hola clase Clientes";
    }

    public function index(){
        echo "<br> Hola index - Clientes";
    }

    public function editar($id){
        echo "<br>Hola editar - clientes: $id";
    }

}

