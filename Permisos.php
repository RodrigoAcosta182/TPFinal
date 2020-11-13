<?php
class Permisos
{

    public function __construct()
    {
    }

    public function getUsuarios()
    {

        include_once 'funciones/MysqlDatabase.php';
        $config = parse_ini_file('funciones/config.ini');
        $database = new MysqlDatabase($config);
        $sql = "select * from vTipoxUsuario ";
        $result = $database->execute($sql);

        $permisos = Array();
        if (mysqli_num_rows($result) > 0){
            while($mostrar = mysqli_fetch_assoc($result)) {

                $usuario = Array();
                $usuario['IdUsuario'] = $mostrar['IdUsuario'];
                $usuario['Nombre'] = $mostrar['Nombre'];
                $usuario['Apellido'] = $mostrar['Apellido'];
                $usuario['Email'] = $mostrar['Email'];
                $usuario['Password'] = $mostrar['Password'];
                $usuario['Descripcion'] = $mostrar['Descripcion'];
                $usuario['Active'] = $mostrar['Active'];
                $permisos[] = $usuario;
            }
        }
        return $permisos;
    }

}