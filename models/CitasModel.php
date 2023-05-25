<?php

class CitasModel
{

    protected $db;
    protected $citas;

    public function __construct()
    {
       
        $this->db = Conexion::Conexion();
        $this->citas = array();
        
    }

    public function getCitas()
    {

        $sql = "SELECT * FROM registros_citas";
        $resultado = $this->db->query($sql);

        while ($row = $resultado->fetch_assoc()) {
            $this->citas[] = $row;
        }
        return $this->citas;
    }
    

    public function save($data){
        $sql = "INSERT INTO registro_citas (modo,id_paciente,id_medico,fecha_registro,horario,estado,created)
                            VALUES('" . $data["mode"] . "',
                                   '" . $data["id_paciente"] . "',
                                   '" . $data["id_medico"] . "',
                                   '" . $data["fecha_registro"] . "',
                                   '" . $data["horario"] . "',
                                   '" . $data["estado"] . "',
                                   '" . $data["created"] . "')";
        $this->db->query($sql);
    }
 

    public function getCitasID($id)
    {
        $sql = "SELECT * FROM registro_citas where id = $id limit 1";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        return $row;
    }
}

?>