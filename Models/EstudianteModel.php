<?php

//require_once "config/Conexion.php";

class EstudianteModel{

    private $connection;

    function __construct()
    {
        $this->connection = new Conexion();
    }

    public function ListarEstudiantes()
    {
        try{
//            $connection = $this->connection->abrirConexion();
//            $sql = "select * from estudiante";
//            $result = $connection->query($sql);
//            echo ('<br>'.'Consulta correcta para el listado de estudiantes: ');
//            return $result;

            $connection = $this->connection->abrirConexion();
            $sql = "select * from estudiante";
//            $result = $connection->query($sql);
            $result = $connection->prepare($sql);
            $result->execute();
//            echo ('<br>'.'Consulta correcta para el listado de estudiantes: ');
            return $result->fetchAll();

        }catch (\Throwable $th){
            printf("No se pudo concretar la consulta ". $th);
            return [];
        }
    }

    public function crearEstudiante($nombre, $apellidos, $correo, $edad, $genero)
    {
        try{
//            $this->getConnection();
//            $sql = "insert into estudiante(nombre,apellidos,correo,edad,genero)
//                    values(:nombre,:apellidos,:correo,:edad,:genero)";
//            $stm = $this->connection->prerae($sql);
//            $stm->bindParam(':nombre', $nombre);
//            $stm->bindParam(':apellidos', $apellidos);
//            $stm->bindParam(':correo', $correo);
//            $stm->bindParam(':edad', $edad);
//            $stm->bindParam(':genero', $genero);
//            $stm->execute();
//            return "Estudiante guardado con Éxito";

//            $connection = $this->connection->abrirConexion();
//            $sql = "insert into estudiante(nombre,apellidos,correo,edad,genero)
//                    values(:nombre,:apellidos,:correo,:edad,:genero)";
//            $result = $connection->query($sql);
//            echo ('<br>'.'Query correcto para el Creado de estudiantes: '.'<br>');
//            return $result . "Estudiante guardado con Éxito";

            $connection = $this->connection->abrirConexion();
            $sql = "insert into estudiante(nombre,apellidos,correo,edad,genero)
                    values(:nombre,:apellidos,:correo,:edad,:genero)";
//            $result = $connection->query($sql);
            $result = $connection->prepare($sql);
            $result->bindParam(':nombre', $nombre);
            $result->bindParam(':apellidos', $apellidos);
            $result->bindParam(':correo', $correo);
            $result->bindParam(':edad', $edad);
            $result->bindParam(':genero', $genero);
            $result->execute();
//            echo ('<br>'.'Query correcto para el Creado de estudiantes: '.'<br>');
            return "Estudiante guardado con Éxito";

        }catch (\Throwable $th){
            printf("<br>"."No se pudo guardar ". $th);
            return "Ocurrio un error";
        }
    }

    public function editarEstudiante($id, $nombre, $apellidos, $correo, $edad, $genero)
    {
        try{
            $connection = $this->connection->abrirConexion();
            $sql = "update estudiante
                    set nombre=:nombre, apellidos=:apellidos, correo=:correo, edad=:edad, genero=:genero
                    where id=:id";
            $result = $connection->prepare($sql);
            $result->bindParam(':id', $id);
            $result->bindParam(':nombre', $nombre);
            $result->bindParam(':apellidos', $apellidos);
            $result->bindParam(':correo', $correo);
            $result->bindParam(':edad', $edad);
            $result->bindParam(':genero', $genero);
            $result->execute();
//            echo ('<br>'.'Query correcto para el Editado de estudiantes: '.'<br>');
            return "Estudiante actualizado con éxito";
        }catch (\Throwable $th){
            printf("<br>"."No se pudo editar ". $th);
            return "Ocurrio un error";
        }
    }
}