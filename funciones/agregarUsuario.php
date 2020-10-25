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


/*probando la validacion por mail

if(isset($msg)){  // Check if $msg is not empty
    echo '<div class="statusmsg">'.$msg.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
}

if(isset($_POST['nombre']) && !empty($_POST['nombre']) AND isset($_POST['email']) && !empty($_POST['email'])){
    $name = mysqli_escape_string($_POST['name']); // Turn our post into a local variable
    $email = mysqli_escape_string($_POST['email']); // Turn our post into a local variable
    //verificar si el mail es valido
    if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
        // Return Error - Invalid Email
        $msg = 'The email you have entered is invalid, please try again.';
    }else{
        // Return Success - Valid Email
        $msg = 'Your account has been made, <br /> please verify it by clicking the activation link that has been send to your email.';

    }
}*/
?>