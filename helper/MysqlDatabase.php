<?php

class MysqlDatabase
{
    private $config;
    private $connection;

    public function __construct(array $config)
    {
        $this->config = $config;
        $conexion = mysqli_connect(
            $this->config["host"],
            $this->config["usuario"],
            $this->config["password"],
            $this->config["basededatos"]
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
        return mysqli_query($this->connection, $sql);
    }

}