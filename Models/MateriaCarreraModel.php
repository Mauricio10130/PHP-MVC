<?php

class MateriaCarreraModel
{
    private $connection;

    public function __construct()
    {
        $this->connection = new Conexion();
    }

    public function ListarMateriaCarrera($id)
    {
        try{
            $connection = $this->connection->abrirConexion();
            $sql = "select * from materia_carrera where materia_id=:materia_id";
            $result = $connection->prepare($sql);
            $result->bindParam(":materia_id", $id);
            $result->execute();
//            echo ('<br>'.'Consulta correcta para el listado de materia_carrera: ');
            return $result->fetchAll();
        }catch (\Throwable $th){
            printf("No se pudo concretar la consulta listar_carrera ". $th);
            return [];
        }
    }

    public function crearMateriaCarrera($id, $carrera_id)
    {
        try{
            $connection = $this->connection->abrirConexion();
            $sql = "insert into materia_carrera(materia_id,carrera_id)values(:materia_id,:carrera_id)";
            $result = $connection->prepare($sql);
            $result->bindParam(":materia_id", $id);
            $result->bindParam(":carrera_id", $carrera_id);
//            var_dump($result);
            $result->execute();
//            echo ('<br>'.'Creado MateriaCarrera correctamente: ');
            return [];
        }catch (\Throwable $th){
            printf("No se pudo concretar la consulta listar_carrera ". $th);
            return [];
        }
    }


}