<?php

include("conexion.php");
$conexion = conectarBaseDeDatos();

if (isset($_POST['idpersona'])) {
    $id = $_POST["idpersona"];
    $name = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $mail = $_POST["email"];
    $active = $_POST["active"];

    echo $id;
    //Hace el update de los input
    $sql = "update usuario 
            set Nombre = '$name'
            ,Apellido = '$apellido'
            ,Email = '$mail'
            ,Active = '$active'
            where id = '$id'
            ";
     $conexion->query($sql);

    if ($conexion->error) {
        echo "Ha ocurrido un error";
        echo $conexion->error . " - " . $conexion->error;
    } else {
        echo "filas afectadas " . $conexion->affected_rows . "<br>";
        $last_id = $conexion->insert_id;

        header("Location: ../abmUsuario.php");
    }
}
echo $_POST["idpersona"];
echo $_GET["idpersona"];