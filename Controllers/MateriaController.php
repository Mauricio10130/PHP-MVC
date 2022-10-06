<?php

require_once 'Models/MateriaModel.php';
require_once 'Views/MateriaView.php';

class MateriaController
{
    private $materiaModel;
    private $materiaView;

    public function __construct()
    {
        $this->materiaModel = new MateriaModel();
        $this->materiaView = new MateriaView();
    }

    public function listar()
    {
        $this->materiaView->listar();
    }

//    public function ver()
//    {
//        if(isset($_POST)) {
//            $id = $_POST["id"];
//            $this->materiaView->ver($id);
//        }else{
//            echo("Hubo un error al ver");
//        }
//    }

    public function guardarMateria()
    {
        if(isset($_POST)) {
//            echo("Ingresando para guardar "."<br>");
            $id = $_POST["id"];
            $nombre = $_POST["nombre"];
            $sigla = $_POST["sigla"];
            $listaCarrerasId = $_POST["MateriaCarrera"];
            $this->materiaModel->crearMateria($id,$nombre,$sigla, $listaCarrerasId);
            $this->materiaView->listar();
        }else{
            echo("Hubo un error al guardar la Materia");
        }
    }
}