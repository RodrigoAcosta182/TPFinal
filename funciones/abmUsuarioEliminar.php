<?php

include("conexion.php");

$conexion = conectarBaseDeDatos();

//ELIMINAR

if (isset($_GET['eliminar'])) {
    $id = $_GET['eliminar'];
    echo $id;
    $sql = "delete from usuario where Id = '$id'";
    $conexion->query($sql) or die($conexion->error());

    header("Location: ../abmUsuario.php");
}