<?php

require_once 'Models/ApunteModel.php';
require_once 'Views/ApunteView.php';

class ApunteController
{
    private $apunteModel;
    public $apunteView;

    public function __construct()
    {
        $this->apunteModel = new ApunteModel();
        $this->apunteView = new ApunteView();
    }

    function listar()
    {
        $this->apunteView->listar();
    }

    function guardarApunte()
    {
        if(isset($_POST)) {
//            echo("Ingresando para guardar "."<br>");
            $titulo = $_POST['titulo'];
            $detalle = $_POST['detalle'];
            $bibliografia = $_POST['bibliografia'];
            $estudiante_id = $_POST['estudiante_id'];
            $materia_id = $_POST['materia_id'];
            $this->apunteView->message = $this->apunteModel->crearApunte($titulo,$detalle,$bibliografia,$estudiante_id,$materia_id);
            $this->apunteView->listar();
        }else{
            echo("Hubo un error al guardar ");
        }
    }

    function modificarApunte()
    {
        if(isset($_POST)) {
//            echo("Ingresando para editar "."<br>");
            $id = $_POST['id'];
            $titulo = $_POST['titulo'];
            $detalle = $_POST['detalle'];
            $bibliografia = $_POST['bibliografia'];
            $estudiante_id = $_POST['estudiante_id'];
            $materia_id = $_POST['materia_id'];
            $this->apunteView->message = $this->apunteModel->editarApunte($id,$titulo, $detalle, $bibliografia, $estudiante_id, $materia_id);
            $this->listar();
        }else{
            echo("Hubo un error al Editar ");
        }
    }

    function eliminar()
    {
        if(isset($_POST)) {
            $id = $_GET["id"];
            $this->apunteView->message = $this->apunteModel->eliminarApunte($id);
            $this->listar();
        }else{
            echo("Hubo un error al Eliminar ");
        }
    }
}