<?php
include 'enviarMailConfirmacion.php';
$conexion = conectarBaseDeDatos();

if (isset($_POST['nombre']) && !empty($_POST['nombre']) AND isset($_POST['email'])) {
    $nombre = mysqli_escape_string($conexion,$_POST['nombre']) ;
    $apellido = mysqli_escape_string($conexion,$_POST["apellido"]) ;
    $email = mysqli_escape_string($conexion,$_POST['email']) ;
    $password = mysqli_escape_string($conexion,$_POST["password"]) ;
    $hash = mysqli_escape_string($conexion,md5( rand(0,1000)) );
}

$sql = "insert into usuario (Nombre, Apellido, Email , Password, Hash) VALUES ('$nombre', '$apellido','$email','$password', '$hash')";

$conexion->query($sql);

enviaMailConfirmacion($nombre,$email,$password,$hash);

if ($conexion->errno) {
    echo "Ha ocurrido un error";
    echo $conexion->errno . " - " . $conexion->error;
} else {
    header("Location: ../login.php");
}


?>