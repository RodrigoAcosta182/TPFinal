<?php

include_once 'MysqlDatabase.php';

$config = parse_ini_file('config.ini');
$database = new MysqlDatabase($config);

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
     $database->executeQuery($sql);

     header("Location: ../abmUsuario.php");
}
echo $_POST["idpersona"];
echo $_GET["idpersona"];