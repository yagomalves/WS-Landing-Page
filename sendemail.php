<?php

    if(isset($_POST['email'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if(mail('yago.melo@souunit.com.br', 'Orçamento WEED', 'Nome: ' . $name . '<br> Email remetente: ' . $email . '<br> Mensagem: ' . $message)) {

            echo 'Mensagem enviada com sucesso!';
            
        } else {

            echo 'Falha no envio. Tente novamente mais tarde.';

        }

    }

?>