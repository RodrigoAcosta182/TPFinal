<?php

include("conexion.php");
$conexion = conectarBaseDeDatos();
session_start();

if(isset($_POST['email']) && !empty($_POST['email']) AND isset($_POST['password']) && !empty($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $resultado = mysqli_query($conexion,"SELECT Email, Password, Active FROM usuario WHERE Email='".$email."' AND Password='".$password."' AND Active='1'") or die(mysqli_error());
    $cantidadDeFilas  = mysqli_num_rows($resultado);
}

if ($cantidadDeFilas == 1) {
    $_SESSION["logueado"] = 1;
    $_SESSION["email"] = $_POST['email'];;
    header("Location: ../index.php");
} else {
    $_SESSION['mensaje'] = "Usuario y/o contraseña invalido";
    //header("Location: ../index.php");
    echo "no se logueo";
}

