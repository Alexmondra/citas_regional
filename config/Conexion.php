<?php



class Conexion{
    public static function Conexion(){
        $host = "db4free.net:3306";
        $pass = "ussbdroot666";
        $bd ="citas_medicas";
        $user = "bdroot";
        
        //$conexion = new mysqli("$host","$user","$pass","$bd");
        $conexion = new mysqli("localhost", "root", "root", "citas_regional");
        if($conexion->connect_errno){
            die("Error inesperado en la conexión a base de datos: ". $conexion->connect_errno);
        }else{
            return $conexion; 
        }
    }

}
