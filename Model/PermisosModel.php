<?php

class PermisosModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getUsuarios(){
        return $this->database->query("SELECT * FROM vTipoxUsuario");
    }

    public function getUsuario($idUsuario){
        $sql = "SELECT * FROM vTipoxUsuario where idUsuario = " . $idUsuario;
        return $this->database->query($sql);
    }
}