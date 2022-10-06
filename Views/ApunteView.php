<?php

require_once 'Models/ApunteModel.php';
require_once 'Models/EstudianteModel.php';
require_once 'Models/MateriaModel.php';

class ApunteView
{
    private $apunteModel;
    private $apuntes;
    public $message;
    private $estudiante;
    private $estudiantes;
    private $materia;
    private $materias;

    public function __construct()
    {
        $this->apunteModel = new ApunteModel();
        $this->message = "";
        $this->apuntes = [];
        $this->estudiante = new EstudianteModel();
        $this->estudiantes = $this->estudiante->ListarEstudiantes();
        $this->materia = new MateriaModel();
        $this->materias = $this->materia->ListarMaterias();
    }

    function listar()
    {
        $this->apuntes = $this->apunteModel->ListarApuntes();
        $this->render();
    }

    function render()
    {
        require 'Views/html/apunte.php';
    }
}