<?php

class LoginModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getUsuarios(){
        return $this->database->execute("SELECT * FROM usuario");
    }

    public function getUsuario($email,$password){
        $sql = "SELECT Email, Password, Active FROM usuario WHERE Email='".$email."' AND Password='".$password."' AND Active='1'" ;
        $resultado =  $this->database->execute($sql);
        return mysqli_num_rows($resultado);
    }
}