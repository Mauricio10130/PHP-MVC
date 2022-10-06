<?php

class EstrategiaConexionMySql implements EstrategiaConexion
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $db = 'apuntes';

    public function __construct()
    {
    }

    public function abrirConexion(): PDO
    {
        try {
            $conexion = new PDO('mysql:host='.$this->host.';'.'dbname='.$this->db, $this->user , $this->password);
//            echo("Conexión exitosa a MySql: ");
            return $conexion;
        }catch (Exception $e){
            echo 'Conexión Rechazada: ',  $e->getMessage(), "\n";
        }
    }
}