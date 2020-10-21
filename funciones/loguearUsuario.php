<?php

include("conexion.php");
$conexion = conectarBaseDeDatos();
session_start();
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "select * from usuario where Usuario = '$usuario' and Password = '$password'";

$resultado = $conexion->query($sql);

$cantidadDeFilas = mysqli_num_rows($resultado);


if ($cantidadDeFilas == 1) {
    $_SESSION["logueado"] = 1;
    $_SESSION["usuario"] = $_POST['usuario'];;
    header("Location: ../index.php");
} else {
    $_SESSION['mensaje'] = "Usuario y/o contraseña invalido";
    //header("Location: ../index.php");
    echo "no se logueo";
}
