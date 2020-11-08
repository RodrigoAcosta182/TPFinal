<?php
function conectarBaseDeDatos(){
    $archivoConfig = "config.ini";
    $configuracion = parse_ini_file($archivoConfig, true);

    $host = $configuracion["bd"]["host"];
    $usuario = $configuracion["bd"]["usuario"];
    $clave = $configuracion["bd"]["password"];
    $bd = $configuracion["bd"]["basededatos"];

    $conexion = mysqli_connect($host,$usuario,$clave, $bd);

    if (!$conexion){
        die("Fallo la conexion: " . mysqli_connect_error());
    }

    return $conexion;

}


