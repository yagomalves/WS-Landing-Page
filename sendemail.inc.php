<?php
if (isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    require_once 'Send.php';
    // Validar os dados (pode adicionar mais validações aqui)

    $sendEmail = new Email($name, $email, $phone, $message);
    $sendEmail->sendEmail();
} else {
    echo "erro sendemail.inc";
}
?>