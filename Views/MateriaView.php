<?php

require_once 'Models/CarreraModel.php';
require_once 'Models/MateriaModel.php';

class MateriaView
{
    private $carreraModel;
    private $materiaModel;

    private $carreras;
    private $materia;
    public $message;

    public function __construct()
    {
        $this->carreraModel = new CarreraModel();
        $this->message = "";
        $this->carreras = $this->carreraModel->ListarCarreras();
        $this->materiaModel = new MateriaModel();
        $this->materia = [];
    }

    public function listar()
    {
        $this->materia = $this->materiaModel->ListarMaterias();
        $this->render();
    }

//    public function ver($id)
//    {
//        $matery = $this->materiaModel->ListaMateria($id)[0];
//        require 'Views/html/materia_carrera.php';
//    }

    public function render()
    {
        require 'Views/html/materia.php';
    }
}