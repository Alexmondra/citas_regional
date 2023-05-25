<?php

class PacienteController{
    private $pacienteModel;
    protected $pacientes;

    public function __construct()
    {
        session_start();
        require_once "models/PacienteModel.php";
        $this->pacientes = new PacienteModel();
    }

    public function index()
    {
        $data["titulo"] = "GESTIÓN DE PACIENTES";
        $data["resultado"] = $this->pacientes->getPacientes();
        $data["contenido"] = "views/pacientes/list.php";
        require_once TEMPLATE;
    } 

    public function agregar()
    {
        // Verificar si se ha enviado el formulario
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $datos = array(
                'apellido_paterno' => $_POST['apellido_paterno'],
                'apellido_materno' => $_POST['apellido_materno'],
                'nombre' => $_POST['nombre'],
                'fecha_nacimiento' => $_POST['fecha_nacimiento'],
                'sexo' => $_POST['sexo'],
                'estado_civil' => $_POST['estado_civil'],
                'numero_documento' => $_POST['numero_documento'],
                'direccion' => $_POST['direccion'],
                'telefono' => $_POST['telefono'],
                'email' => $_POST['email'],
                'ocupacion' => $_POST['ocupacion'],
                'persona_responsable' => $_POST['persona_responsabe'],
                'alergias' => $_POST['alergias'],
                'intervenciones_quirurgicas' => $_POST['intervenciones_quirurgicas'],
                'vacunas_completas' => $_POST['vacunas_completas']
            );

            // Agregar el paciente a la base de datos
            $this->pacienteModel->agregarPaciente($datos);

            // Redirigir a la lista de pacientes
            header('Location: index.php?action=list');
            exit;
        }

        // Mostrar el formulario para agregar pacientes
         require_once 'views/add.php';
    }

    public function editar()
    {
        // Verificar si se ha enviado el formulario
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener los datos del formulario
            $id = $_POST['id'];
            $datos = array(
                'apellido_paterno' => $_POST['apellido_paterno'],
                'apellido_materno' => $_POST['apellido_materno'],
                'nombre' => $_POST['nombre'],
                'fecha_nacimiento' => $_POST['fecha_nacimiento'],
                'sexo' => $_POST['sexo'],
                'estado_civil' => $_POST['estado_civil'],
                'numero_documento' => $_POST['numero_documento'],
                'direccion' => $_POST['direccion'],
                'telefono' => $_POST['telefono'],
                'email' => $_POST['email'],
                'ocupacion' => $_POST['ocupacion'],
                'persona_responsable' => $_POST['persona_responsable'],
                'alergias' => $_POST['alergias'],
                'intervenciones_quirurgicas' => $_POST['intervenciones_quirurgicas'],
                'vacunas_completas' => $_POST['vacunas_completas']
            );

            // Editar los datos del paciente en la base de datos
            $this->pacienteModel->editarPaciente($id, $datos);

            // Redirigir a la lista de pacientes
            header('Location: index.php?action=list');
            exit;
        }

        // Obtener el ID del paciente a editar
        $id = $_GET['id'];

        // Obtener los datos del paciente de la base de datos
        $paciente = $this->pacienteModel->obtenerPaciente($id);
        

        // Mostrar el formulario para editar pacientes
        require 'views/paciente/edit.php';
    }

    public function eliminar()
    {
        // Obtener el ID del paciente a eliminar
        $id = $_GET['id'];

        // Eliminar el paciente de la base de datos
        $this->pacienteModel->eliminarPaciente($id);

        // Redirigir a la lista de pacientes
        header('Location: index.php?action=list');
        exit;
    }

    public function listar()
    {
        // Obtener todos los pacientes de la base de datos
        $pacientes = $this->pacienteModel->obtenerPacientes();

        // Mostrar la lista de pacientes
        require 'views/list.php';
    }
}
