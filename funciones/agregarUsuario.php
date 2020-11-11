<?php
include 'enviarMailConfirmacion.php';
include_once 'MysqlDatabase.php';

$config = parse_ini_file('config.ini');
$database = new MysqlDatabase($config);

if (isset($_POST['nombre']) && !empty($_POST['nombre']) AND isset($_POST['email'])) {
    $nombre = $_POST['nombre'] ;
    $apellido = $_POST["apellido"] ;
    $email = $_POST['email'] ;
    $password = $_POST["password"] ;
    $hash = md5( rand(0,1000));
}

$sql = "insert into usuario (Nombre, Apellido, Email , Password, Hash) VALUES ('$nombre', '$apellido','$email','$password', '$hash')";

$database->executeQuery($sql);


enviaMailConfirmacion($nombre,$email,$password,$hash);
header("Location: ../login.php");

?>