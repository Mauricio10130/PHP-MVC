<?php

require_once 'Models/CarreraModel.php';

class CarreraView
{
    private $carreraModel;
    private $carreras;
    public $message;

    public function __construct()
    {
        $this->carreraModel = new CarreraModel();
        $this->message = "";
        $this->carreras = [];
    }

    function listar()
    {
        $this->carreras = $this->carreraModel->ListarCarreras();
        $this->render();
    }

    function render()
    {
        require 'Views/html/carrera.php';
    }
}