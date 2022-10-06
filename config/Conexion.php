<?php

include_once "strategy/EstrategiaConexion.php";
include_once "strategy/EstrategiaConexionMySql.php";
include_once "strategy/EstrategiaConexionPostgresql.php";

class Conexion{
    private $strategy;

    function __construct()
    {
        $this->setEstrategiaConexion(new EstrategiaConexionMySql);
//        $this->setEstrategiaConexion(new EstrategiaConexionPostgresql);
    }

    public function setEstrategiaConexion(EstrategiaConexion $estrategia)
    {
        $this->strategy = $estrategia;
    }

    public function abrirConexion()
    {
        return $this->strategy->abrirConexion();
    }
}