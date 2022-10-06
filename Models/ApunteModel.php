<?php

class ApunteModel
{
    private $connection;

    function __construct()
    {
        $this->connection = new Conexion();
    }

    public function ListarApuntes()
    {
        try{
            $connection = $this->connection->abrirConexion();
            $sql = "select * from apunte";
            $result = $connection->prepare($sql);
            $result->execute();
//            echo ('<br>'.'Consulta correcta para el listado de apuntes: ');
            return $result->fetchAll();
        }catch (\Throwable $th){
            printf("No se pudo concretar la consulta ". $th);
            return [];
        }
    }

    public function crearApunte($titulo, $detalle, $bibliografia, $estudiante_id, $materia_id)
    {
        try{
            $connection = $this->connection->abrirConexion();
            $sql = "insert into apunte(titulo,detalle,bibliografia,estudiante_id,materia_id)
                    values(:titulo,:detalle,:bibliografia,:estudiante_id,:materia_id)";
            $result = $connection->prepare($sql);
            $result->bindParam(':titulo', $titulo);
            $result->bindParam(':detalle', $detalle);
            $result->bindParam(':bibliografia', $bibliografia);
            $result->bindParam(':estudiante_id', $estudiante_id);
            $result->bindParam(':materia_id', $materia_id);
            $result->execute();
//            echo ('<br>'.'Query correcto para el Creado de apuntes: '.'<br>');
            return "Apunte guardado con Éxito";
        }catch (\Throwable $th){
            printf("<br>"."No se pudo guardar ". $th);
            return "Ocurrio un error";
        }
    }

    public function editarApunte($id,$titulo, $detalle, $bibliografia, $estudiante_id, $materia_id)
    {
        try {
            $connection = $this->connection->abrirConexion();
            $sql = "update apunte 
                    set titulo=:titulo, detalle=:detalle, bibliografia=:bibliografia,
                    estudiante_id=:estudiante_id,materia_id=:materia_id 
                    where id=:id";
            $result = $connection->prepare($sql);
            $result->bindParam(':id', $id);
            $result->bindParam(':titulo', $titulo);
            $result->bindParam(':detalle', $detalle);
            $result->bindParam(':bibliografia', $bibliografia);
            $result->bindParam(':estudiante_id', $estudiante_id);
            $result->bindParam(':materia_id', $materia_id);
            $result->execute();
//            echo ('<br>'.'Query correcto para Modificar el Apunte: '.'<br>');
            return "Apunte actualizado con éxito";
        } catch (\Throwable $th) {
            printf("<br>"."No se pudo editar ". $th);
            var_dump($th->getMessage());
            return "Ocurrió un error";
        }
    }

    public function eliminarApunte($id)
    {
        try{
            $connection = $this->connection->abrirConexion();
            $sql = "delete from apunte where id=:id";
            $result = $connection->prepare($sql);
            $result->bindParam(':id', $id);
            $result->execute();
//            echo ('<br>'.'Query correcto para eliminar el Apunte: '.'<br>');
            return "Apunte eliminado con éxito";
        }catch (\Throwable $th) {
            return "Ocurrió un error";
        }
    }
}