<?php

class CarreraModel{

    private $connection;

    function __construct()
    {
        $this->connection = new Conexion();
    }

    public function ListarCarreras()
    {
        try{
            $connection = $this->connection->abrirConexion();
            $sql = "select * from carrera";
            $result = $connection->prepare($sql);
            $result->execute();
//            echo ('<br>'.'Consulta correcta para el listado de carreras: ');
            return $result->fetchAll();
        }catch (\Throwable $th){
            printf("No se pudo concretar la consulta ". $th);
            return [];
        }
    }

    public function crearCarrera($nombre, $descripcion)
    {
        try{
            $connection = $this->connection->abrirConexion();
            $sql = "insert into carrera(nombre,descripcion)
                    values(:nombre,:descripcion)";
            $result = $connection->prepare($sql);
            $result->bindParam(':nombre', $nombre);
            $result->bindParam(':descripcion', $descripcion);
            $result->execute();
//            echo ('<br>'.'Query correcto para el Creado de carreras: '.'<br>');
            return "Carrera guardada con Éxito";
        }catch (\Throwable $th){
            printf("<br>"."No se pudo guardar ". $th);
            return "Ocurrio un error";
        }
    }

    public function editarCarrera($id, $nombre, $descripcion)
    {
        try{
            $connection = $this->connection->abrirConexion();
            $sql = "update carrera
                    set nombre=:nombre, descripcion=:descripcion
                    where id=:id";
            $result = $connection->prepare($sql);
            $result->bindParam(':id', $id);
            $result->bindParam(':nombre', $nombre);
            $result->bindParam(':descripcion', $descripcion);
            $result->execute();
//            echo ('<br>'.'Query correcto para el Editado de carreras: '.'<br>');
            return "Carrera actualizada con éxito";
        }catch (\Throwable $th){
            printf("<br>"."No se pudo editar ". $th);
            return "Ocurrio un error";
        }
    }
}
