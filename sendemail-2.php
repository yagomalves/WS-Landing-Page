<?php
    require 'lib/vendor/autoload.php';

    $email = new \SendGrid\Mail\Mail();

    $email->setFrom("weed.sistemas@gmail.com");       //quem vai enviar
    $email->addTo("weed.sistemas@gmail.com");         // quem vai receber
    $email->setSubject("Teste");                      // assunto
    $email->addContent('text/plain', 'sadasd');       // conteúdo
    $email->addContent(
        'text/html', '<strong>Conteúdo com html<strong>'
    );

    $sendgrid = new \SendGrid(getenv('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'));

    try {
        $response = $sendgrid->send($email);
        print $response->statusCode() . '\n';
        print_r($response->headers());
        print $response->body() . '\n';

    } catch(Exception $e){
        echo 'Caught exception: '. $e->getMessage() . '\n';
    }