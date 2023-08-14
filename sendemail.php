<?php

    if(isset($_POST['email'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if(mail('weed.sistemas@gmail.com', 'Orçamento WEED', 'Nome: ' . $name . 'Email remetente: ' . $email . 'Mensagem: ' . $message)) {

            echo 'Mensagem enviada com sucesso!';
            
        } else {

            echo 'Falha no envio. Tente novamente mais tarde.';

        }

    }

?>