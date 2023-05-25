<?php

class PacienteModel
{
    protected $db;


    public function __construct()
    {
        $this->db = Conexion::Conexion();
        $this->usuario = array();
    }

    
    public function getPacientes()
    {

        $sql = "SELECT * FROM pacientess";
        $resultado = $this->db->query($sql);

        while ($row = $resultado->fetch_assoc()) {
            $this->usuario[] = $row;
        }
        return $this->usuario;
    }


    public function agregarPaciente($datos)
    {
        $apellidoPaterno = $datos['apellido_paterno'];
        $apellidoMaterno = $datos['apellido_materno'];
        $nombre = $datos['nombre'];
        $fechaNacimiento = $datos['fecha_nacimiento'];
        $sexo = $datos['sexo'];
        $estadoCivil = $datos['estado_civil'];
        $numeroDocumento = $datos['numero_documento'];
        $direccion = $datos['direccion'];
        $telefono = $datos['telefono'];
        $email = $datos['email'];
        $ocupacion = $datos['ocupacion'];
        $personaResponsable = $datos['persona_responsable'];
        $alergias = $datos['alergias'];
        $intervencionesQuirurgicas = $datos['intervenciones_quirurgicas'];
        $vacunasCompletas = $datos['vacunas_completas'];

        // Preparar la consulta SQL
        $stmt = $this->db->prepare("INSERT INTO pacientes (apellido_paterno, apellido_materno, nombre, fecha_nacimiento, sexo, estado_civil, numero_documento, direccion, telefono, email, ocupacion, persona_responsable, alergias, intervenciones_quirurgicas, vacunas_completas) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
        // Vincular los parámetros de la consulta
        $stmt->bind_param("sssssssssssssss", $apellidoPaterno, $apellidoMaterno, $nombre, $fechaNacimiento, $sexo, $estadoCivil, $numeroDocumento, $direccion, $telefono, $email, $ocupacion, $personaResponsable, $alergias, $intervencionesQuirurgicas, $vacunasCompletas);
        
        // Ejecutar la consulta
        $stmt->execute();
        
        // Cerrar la consulta y la conexión
        $stmt->close();
    }

    public function editarPaciente($id, $datos)
    {
        $apellidoPaterno = $datos['apellido_paterno'];
        $apellidoMaterno = $datos['apellido_materno'];
        $nombre = $datos['nombre'];
        $fechaNacimiento = $datos['fecha_nacimiento'];
        $sexo = $datos['sexo'];
        $estadoCivil = $datos['estado_civil'];
        $numeroDocumento = $datos['numero_documento'];
        $direccion = $datos['direccion'];
        $telefono = $datos['telefono'];
        $email = $datos['email'];
        $ocupacion = $datos['ocupacion'];
        $personaResponsable = $datos['persona_responsable'];
        $alergias = $datos['alergias'];
        $intervencionesQuirurgicas = $datos['intervenciones_quirurgicas'];
        $vacunasCompletas = $datos['vacunas_completas'];

        // Preparar la consulta SQL
        $stmt = $this->db->prepare("UPDATE pacientes SET apellido_paterno = ?, apellido_materno = ?, nombre = ?, fecha_nacimiento = ?, sexo = ?, estado_civil = ?, numero_documento = ?, direccion = ?, telefono = ?, email = ?, ocupacion = ?, persona_responsable = ?, alergias = ?, intervenciones_quirurgicas = ?, vacunas_completas = ? WHERE id = ?");
        
        // Vincular los parámetros de la consulta
        $stmt->bind_param("ssssssssssssssi", $apellidoPaterno, $apellidoMaterno, $nombre, $fechaNacimiento, $sexo, $estadoCivil, $numeroDocumento, $direccion, $telefono, $email, $ocupacion, $personaResponsable, $alergias, $intervencionesQuirurgicas, $vacunasCompletas, $id);
        
        // Ejecutar la consulta
        $stmt->execute();
        
        // Cerrar la consulta
        $stmt->close();
    }

    public function eliminarPaciente($id)
    {
        // Preparar la consulta SQL
        $stmt = $this->db->prepare("DELETE FROM pacientes WHERE id = ?");
        
        // Vincular el parámetro de la consulta
        $stmt->bind_param("i", $id);
        
        // Ejecutar la consulta
        $stmt->execute();
        
        // Cerrar la consulta
        $stmt->close();
    }

    public function obtenerPacientes()
    {
        // Consulta SQL para obtener todos los pacientes
        $sql = "SELECT * FROM pacientes";
        
        // Ejecutar la consulta
        $result = $this->db->query($sql);
        
        // Obtener los datos en forma de arreglo asociativo
        $pacientes = [];
        while ($row = $result->fetch_assoc()) {
            $pacientes[] = $row;
        }
        
        // Liberar el resultado de la consulta
        $result->free();

        return $pacientes;
    }
}

?>
