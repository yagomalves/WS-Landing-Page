<?php
if (isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Validar os dados (você pode adicionar mais validações aqui)

    $to = 'weed.sistemas@gmail.com';
    $subject = 'Orçamento WEED';
    $email_content = "Nome: $name\n";
    $email_content .= "Email remetente: $email\n";
    $email_content .= "Telefone: $phone\n";
    $email_content .= "Mensagem: $message\n";

    if (mail($to, $subject, $email_content)) {
        header('Location: index.php?emailSent=true');
        exit(); // Certifique-se de sair após o redirecionamento
    } else {
        // Captura o erro do envio de email
        $errorMessage = error_get_last()['message'];

        // Redireciona para a página index.php e passa o erro como parâmetro
        header('Location: index.php?emailSent=false&errorMessage=' . urlencode($errorMessage));
        exit();
    }
}
