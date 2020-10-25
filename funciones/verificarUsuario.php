<?php include "funciones/conexion.php";


function verificaUsuario($emailUsuario,$hashUsuario ){

    $conexion = conectarBaseDeDatos();
    if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
        // Verify data
        $email = $emailUsuario; // Set email variable
        $hash = $hashUsuario; // Set hash variable


        $buscar = mysqli_query($conexion,"SELECT Email, Hash, Active FROM usuario WHERE Email='".$email."' AND Hash='".$hash."' AND Active='0'") or die(mysqli_error());
        $match  = mysqli_num_rows($buscar);
        if($match > 0){
            mysqli_query($conexion,"UPDATE usuario SET Active='1' WHERE Email='".$email."' AND Hash='".$hash."' AND Active='0'") or die(mysqli_error());
            echo '<div class="alert alert-success">Su cuenta ha sido activada, ahora puede iniciar sesión</div>';
        }else{


            echo '<div class="alert alert-danger">La URL no es válida o ya ha activado su cuenta.</div>';
        }

    }else{

        echo '<div class="alert alert-danger">Enlace no válido, utilice el enlace que se le envió a su correo electrónico.</div>';
    }
}

?>