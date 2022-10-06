<?php

class EstrategiaConexionPostgresql implements EstrategiaConexion
{
    private $host = 'localhost';
    private $user = 'postgres';
    private $password = 'admin_123';
    private $db = 'apuntes';

    public function __construct()
    {
    }

    public function abrirConexion(): PDO
    {
        try {
            $conexion = new PDO('pgsql:host='.$this->host.';'.'dbname='.$this->db, $this->user , $this->password);
//            echo("Conexión exitosa a PostgreSql: ");
            return $conexion;
        }catch (Exception $e){
            echo 'Conexión Rechazada: ',  $e->getMessage(), "\n";
        }
    }
}