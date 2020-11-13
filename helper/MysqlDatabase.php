<?php

class MysqlDatabase
{
    private $connection;

    public function __construct($host,$usuario,$password,$basededatos){
        $conexion = mysqli_connect(
            $host,
            $usuario,
            $password,
            $basededatos
        );

        if (!$conexion){
            die("Fallo la conexion: " . mysqli_connect_error());
        }
        $this->connection = $conexion;
    }

    public function query($sql){
        $result = mysqli_query($this->connection, $sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    public function execute($sql){
        mysqli_query($this->connection, $sql);
    }

}