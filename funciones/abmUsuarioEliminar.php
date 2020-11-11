<?php

include_once 'MysqlDatabase.php';

$config = parse_ini_file('config.ini');
$database = new MysqlDatabase($config);

//ELIMINAR

if (isset($_GET['eliminar'])) {
    $id = $_GET['eliminar'];
    echo $id;
    $sql = "delete from usuario where Id = '$id'";
    $database->executeQuery($sql) or die();

    header("Location: ../abmUsuario.php");
}