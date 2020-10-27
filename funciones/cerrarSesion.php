<?php
session_start();
$cerrarSesion = $_GET['cerrarSesion'];

if($cerrarSesion==1){
    session_destroy();
    header("Location: ../login.php");
}
