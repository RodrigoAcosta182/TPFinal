<?php
session_start();
require_once '../model/LoginModel.php';
include_once '../helper/MysqlDatabase.php';
$config = parse_ini_file('../config/config.ini');
$database = new MysqlDatabase($config);
$loginModel = new LoginModel($database);

class loginController{
    private $loginModel;
    private $render;

    /*public function __construct($loginModel)
    {
        $this->loginModel - $loginModel;
    }*/

}

if(isset($_POST['email']) && !empty($_POST['email']) AND isset($_POST['password']) && !empty($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $cantidadDeFilas = $loginModel->getUsuario($email,$password);
    /*$cantidadDeFilas = $this->loginModel->getUsuario($email,$password);*/

    /*$sql = "SELECT Email, Password, Active FROM usuario WHERE Email='".$email."' AND Password='".$password."' AND Active='1'" ;

    $resultado = $database->execute($sql);

    $cantidadDeFilas  = mysqli_num_rows($resultado);*/
}

if ($cantidadDeFilas == 1) {
    $_SESSION["logueado"] = 1;
    $_SESSION["email"] = $_POST['email'];
    header("Location: ../index.php");
} else {
    $_SESSION['mensaje'] = "Usuario y/o contraseña invalido";
    header("Location: ../view/login.php");
}