<?php
// Incluir los archivos de PHPMailer


require ('PHPMailer-6.9.1/src/Exception.php');

require ('PHPMailer-6.9.1/src/PHPMailer.php');

require ('PHPMailer-6.9.1/src/SMTP.php');


?>





<?php

// Crear una instancia de PHPMailerSS
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Configurar y enviar el correo
$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Servidor SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'yamquis654@gmail.com'; // Tu correo
    $mail->Password = 'jxuk sayf wwzo xlmt'; // Tu contraseña
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Destinatarios
    $mail->setFrom('yamquis654@gmail.com', 'Yam');
    $mail->addAddress('yaquispeq@unjbg.edu.pe', 'Yo');

    // Contenido del correo
    $mail->isHTML(true);
    $mail->Subject = 'Tu pedido esta en proceso';
       // Este es el HTML que copiaste para el diseño del correo
       $mail->Body = file_get_contents('mail.php');

       // Texto alternativo para clientes que no soporten HTML
       $mail->AltBody = 'Este es el texto plano para clientes de correo que no soportan HTML. Código de compra: #_id. Fecha de compra: fecha.';
   
       // Enviar correo
       $mail->send();

       
    $mail->send();
    echo 'El mensaje ha sido enviado';
} catch (Exception $e) {
    echo "El mensaje no se pudo enviar. Mailer Error: {$mail->ErrorInfo}";
}
?>
