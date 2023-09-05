<?php

class Email
{
    public $name;
    public $email;
    public $phone;
    public $message;

    private $to;
    private $subject;
    private $email_content;
    private $headers;
    

    public function __construct($name, $email, $phone, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->message = $message;

        $this->to = "weed.sistemas@gmail.com";
        $this->subject = "Orçamento WEED";
        $this->email_content = "
        Nome: $this->name\n
        Email remetente: $this->email\n
        Telefone: $this->phone\n
        Mensagem: $this->message\n";

        
        $this->headers = "MIME-Version: 1.1\r\n";
        $this->headers .= "Content-type: text/plain; charset=UTF-8\r\n";
        $this->headers = "From: eu@weedsistemas.com.br\r\n";
        $this->headers .= "Return-Path: eu@weedsistemas.com.br\r\n";
        
    }

    public function sendEmail()
    {

        if(mail($this->to, $this->subject, $this->email_content, $this->headers)) {
            header('Location: index.php?emailSent=true');
            exit();
        } else {
            header('Location: index.php?emailSent=false');
        exit();
        }

    }
}
