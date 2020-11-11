<?php
include_once 'MysqlDatabase.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../recursos/PHPMailer/src/Exception.php';
require '../recursos/PHPMailer/src/PHPMailer.php';
require '../recursos/PHPMailer/src/SMTP.php';


function enviaMailConfirmacion($nombreUsuario,$emailUsuario,$passwordUsuario,$hashUsuario){
    //enviar mail confirmacion
    $config = parse_ini_file('config.ini');
    $database = new MysqlDatabase($config);

    $sql = "SELECT Email , Password from usuario where Id = 1 ";
    $result = $database->executeQuery($sql);
    $mostrar = $result->fetch_assoc();


    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = $mostrar['Email'];                      // SMTP username
        $mail->Password   = $mostrar['Password'];                   // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom($mostrar['Email'], 'Garlopa Company');
        $mail->addAddress($emailUsuario);     // Add a recipient


        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Account confirmation Garlopa Company';
        $mail->Body    = '

Gracias por registrarte! "<br>" Su cuenta ha sido creada. Puede iniciar sesión con las siguientes credenciales después de haber activado su cuenta presionando la URL a continuación.
"<br>"
------------------------"<br>"
Username: '.$nombreUsuario.' "<br>"
Password: '.$passwordUsuario.' "<br>"
------------------------"<br>"
 "<br>"
Haga click en este enlace para activar su cuenta:"<br>"
http://localhost/tpfinal/verificar.php?email='.$emailUsuario.'&hash='.$hashUsuario.'
 
';

        $mail->send();
        echo 'El mensaje se envio correctamente';
    } catch (Exception $e) {
        echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
    }
}