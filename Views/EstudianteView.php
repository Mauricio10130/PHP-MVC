<?php

require_once 'Models/EstudianteModel.php';

class EstudianteView
{
    private $estudianteModel;
    private $estudiantes;
    public $message;

    public function __construct()
    {
        $this->estudianteModel = new EstudianteModel();
        $this->message = "";
        $this->estudiantes = [];
    }

    function listar()
    {
        $this->estudiantes = $this->estudianteModel->ListarEstudiantes();
        $this->render();
    }

    function render()
    {
        require 'Views/html/estudiante.php';
    }
}