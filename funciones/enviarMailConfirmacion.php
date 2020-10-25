<?php
include_once "conexion.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../recursos/PHPMailer/src/Exception.php';
require '../recursos/PHPMailer/src/PHPMailer.php';
require '../recursos/PHPMailer/src/SMTP.php';

function enviaMailConfirmacion($nombreUsuario,$emailUsuario,$passwordUsuario,$hashUsuario){
    //enviar mail confirmacion



    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'garlopacompany@gmail.com';                     // SMTP username
        $mail->Password   = 'Unlam2020';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('garlopacompany@gmail.com', 'Garlopa Company');
        $mail->addAddress($emailUsuario);     // Add a recipient


        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Account confirmation Garlopa Company';
        $mail->Body    = '
 
Gracias por registrarte!
Su cuenta ha sido creada. Puede iniciar sesión con las siguientes credenciales después de haber activado su cuenta presionando la URL a continuación.
 
------------------------
Username: '.$nombreUsuario.'
Password: '.$passwordUsuario.'
------------------------
 
Haga click en este enlace para activar su cuenta:
http://localhost/tpfinal/verificar.php?email='.$emailUsuario.'&hash='.$hashUsuario.'
 
';

        $mail->send();
        echo 'El mensaje se envio correctamente';
    } catch (Exception $e) {
        echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
    }
}