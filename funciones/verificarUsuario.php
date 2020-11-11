<?php
include_once 'MysqlDatabase.php';
function verificaUsuario($emailUsuario,$hashUsuario ){

    $config = parse_ini_file('config.ini');
    $database = new MysqlDatabase($config);
    if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
        // Verify data
        $email = $emailUsuario; // Set email variable
        $hash = $hashUsuario; // Set hash variable

        $sql = "SELECT Email, Hash, Active FROM usuario WHERE Email='".$email."' AND Hash='".$hash."' AND Active='0'";
        $buscar = $database->executeQuery($sql);

        $match  = mysqli_num_rows($buscar);
        if($match > 0){
            $sqlupd = "UPDATE usuario SET Active='1' WHERE Email='".$email."' AND Hash='".$hash."' AND Active='0'";
            $database->executeQuery($sqlupd);
            echo '<div class="alert alert-success">Su cuenta ha sido activada, ahora puede iniciar sesión</div>';
        }else{


            echo '<div class="alert alert-danger">La URL no es válida o ya ha activado su cuenta.</div>';
        }

    }else{

        echo '<div class="alert alert-danger">Enlace no válido, utilice el enlace que se le envió a su correo electrónico.</div>';
    }
}

?>