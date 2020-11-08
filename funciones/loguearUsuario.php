 <?php

 include 'MysqlDatabase.php';

 $config = parse_ini_file('config.ini');
 $database = new MysqlDatabase($config);


if(isset($_POST['email']) && !empty($_POST['email']) AND isset($_POST['password']) && !empty($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT Email, Password, Active FROM usuario WHERE Email='".$email."' AND Password='".$password."' AND Active='1'" ;

    $resultado = $database->executeQuery($sql);

    $cantidadDeFilas  = mysqli_num_rows($resultado);
}

if ($cantidadDeFilas == 1) {
    $_SESSION["logueado"] = 1;
    $_SESSION["email"] = $_POST['email'];;
    header("Location: ../index.php");
} else {
    $_SESSION['mensaje'] = "Usuario y/o contraseña invalido";
    header("Location: ../login.php");

}

