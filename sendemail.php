<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

if(isset($_POST["send"])) {
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.google.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'hartzleryago@gmail.com';             //SMTP username
        $mail->Password   = 'ukbljcltuyvtqusc';                     //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('hartzleryago@gmail.com', 'Weed');
        $mail->addAddress('yago.melo@souunit.com.br', 'Yago');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        $mail->addReplyTo('hartzleryago@gmail.com', 'Information');


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Nova mensagem da weed';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Erro: {$mail->ErrorInfo}";
    }
} else {
    echo "Erro ao enviar email. Acesso não foi via formulário.";
}

?>