<?php

require_once 'Models/EstudianteModel.php';
require_once 'Views/EstudianteView.php';

class EstudianteController
{
    private $estudianteModel;
    public $estudianteView;

    public function __construct()
    {
        $this->estudianteModel = new EstudianteModel(); # instancia del Modelo
        $this->estudianteView = new EstudianteView(); # instancia del Modelo
    }

    function listar()
    {
        $this->estudianteView->listar();
//        var_dump($this->estudianteView->listar());
    }

    function guardarEstudiante()
    {
//        if(isset($_POST)) {
//            echo("Ingresando para guardar "."<br>");
//            $datos = (object)array();
//            $datos->nombre = $_POST['nombre'];
//            $datos->apellidos = $_POST['apellidos'];
//            $datos->correo = $_POST['correo'];
//            $datos->edad = $_POST['edad'];
//            $datos->genero = $_POST['genero'];
//            var_dump($datos);
//            $this->estudianteView->message = $this->estudianteModel
//                ->crearEstudiante($datos->nombre, $datos->apellidos, $datos->correo, $datos->edad, $datos->genero);
//
//            $this->estudianteView->listar();
//        }else{
//            echo("Hubo un error al guardar ");
//        }


        if(isset($_POST)) {
//            echo("Ingresando para guardar "."<br>");
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $correo = $_POST['correo'];
            $edad = $_POST['edad'];
            $genero = $_POST['genero'];

            $this->estudianteView->message = $this->estudianteModel
                ->crearEstudiante($nombre, $apellidos, $correo, $edad, $genero);
            $this->estudianteView->listar();
        }else{
            echo("Hubo un error al guardar ");
        }

    }

    function modificarEstudiante()
    {
        if(isset($_POST)) {
//            echo("Ingresando para editar "."<br>");
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $correo = $_POST['correo'];
            $edad = $_POST['edad'];
            $genero = $_POST['genero'];
            $this->estudianteView->message = $this->estudianteModel
                ->editarEstudiante($id, $nombre, $apellidos, $correo, $edad, $genero);
            $this->listar();
        }else{
            echo("Hubo un error al Editar ");
        }

    }
}