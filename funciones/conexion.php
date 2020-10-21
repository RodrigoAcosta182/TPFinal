<?php
function conectarBaseDeDatos(){
    $archivoConfig = "config.ini";
    $configuracion = parse_ini_file($archivoConfig, true);

    $host = $configuracion["bd"]["host"];
    $usuario = $configuracion["bd"]["usuario"];
    $clave = $configuracion["bd"]["password"];
    $bd = $configuracion["bd"]["basededatos"];

    $conexion = new mysqli($host,$usuario,$clave, $bd);

    return $conexion;
}


