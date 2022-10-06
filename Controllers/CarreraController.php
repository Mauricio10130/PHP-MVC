<?php

require_once 'Models/CarreraModel.php';
require_once 'Views/CarreraView.php';

class CarreraController
{
    private $carreraModel;
    public $carreraView;

    public function __construct()
    {
        $this->carreraModel = new CarreraModel(); # instancia del Modelo
        $this->carreraView = new CarreraView(); # instancia del Modelo
    }

    function listar()
    {
        $this->carreraView->listar();
    }

    function guardarCarrera()
    {
        if(isset($_POST)) {
//            echo("Ingresando para guardar "."<br>");
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $this->carreraView->message = $this->carreraModel
                ->crearCarrera($nombre, $descripcion);
            $this->carreraView->listar();
        }else{
            echo("Hubo un error al guardar ");
        }
    }

    function modificarCarrera()
    {
        if(isset($_POST)) {
//            echo("Ingresando para editar "."<br>");
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $this->carreraView->message = $this->carreraModel
                ->editarCarrera($id, $nombre, $descripcion);
            $this->listar();
        }else{
            echo("Hubo un error al Editar ");
        }
    }
}