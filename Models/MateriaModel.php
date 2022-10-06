<?php

require_once 'Models/MateriaCarreraModel.php';

class MateriaModel
{
    private $connection;
    private $MateriaCarreraModel;

    public function __construct()
    {
        $this->connection = new Conexion();
        $this->MateriaCarreraModel = new MateriaCarreraModel();
    }

    public function ListarMaterias()
    {
        try{
            $connection = $this->connection->abrirConexion();
            $sql = "select * from materia";
            $result = $connection->prepare($sql);
            $result->execute();
            $materia = $result->fetchAll();
            for($i = 0; $i < count($materia); $i++){
                $materia[$i]["MateriaCarrera"] = $this->MateriaCarreraModel->ListarMateriaCarrera($materia[$i]["id"]);
            }
//            echo ('<br>'.'Consulta correcta para el listarMaterias: ');
            return $materia;
        }catch (\Throwable $th){
            printf("No se pudo concretar la consulta ListarMaterias ". $th);
            return [];
        }
    }

//    public function ListaMateria($id)
//    {
//        try{
//            $connection = $this->connection->abrirConexion();
//            $sql = "select * from materia where id=:id";
//            $result = $connection->prepare($sql);
//            $result->bindParam(":id", $id);
//            $result->execute();
//            $materia = $result->fetchAll();
//            $materia[0]["MateriaCarrera"] = $this->MateriaCarreraModel->ListarMateriaCarrera($id);
//            echo ('<br>'.'Consulta correcta para el listarMateria: ');
//            return $materia;
//        }catch (\Throwable $th){
//            printf("No se pudo concretar la consulta ListarMateria". $th);
//            return [];
//        }
//    }

//    public function crearMateria($materia_id, $nombre, $sigla, $listaCarrerasId)
    public function crearMateria($id, $nombre, $sigla, $listaCarrerasId)
    {
        try{
            $connection = $this->connection->abrirConexion();
            $sql = "insert into Materia(id,nombre,sigla) values(:id,:nombre,:sigla);";
            $result = $connection->prepare($sql);
            $result->bindParam(":id", $id);
            $result->bindParam(":nombre", $nombre);
            $result->bindParam(":sigla", $sigla);
            $result->execute();
            foreach ($listaCarrerasId as $key => $carrera){
                $result2 = $this->MateriaCarreraModel->crearMateriaCarrera($id, $carrera["carrera_id"]);
                var_dump($result2);
            }
//            echo ('<br>'.'Materia creada correctamente: ');
            return [];
        }catch (\Throwable $th){
            printf("No se pudo crear la Materia ". $th);
            return [];
        }
    }
}