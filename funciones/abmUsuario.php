<?php

include("conexion.php");
$conexion = conectarBaseDeDatos();
if (isset($_GET['idpersona'])) {
    $id = $_POST["idpersona"];
    $name = $_POST["nombre"];
    $apellido = $_POST["apellido"];

    //Hace el update de los input
    $sql = "update usuario 
            set Nombre = '$name'
            ,Apellido = '$apellido'
            where id = '$id'
            ";
     $conexion->query($sql);

    if ($conexion->errno) {
        echo "Ha ocurrido un error";
        echo $conexion->errno . " - " . $conexion->error;
    } else {
        echo "filas afectadas " . $conexion->affected_rows . "<br>";
        $last_id = $conexion->insert_id;

        header("Location: ../index.php");
    }
}