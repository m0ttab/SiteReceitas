<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

if (isset($_POST['enviar'])) {
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';

        $mail->SMTPAuth = true;
        $mail->Username = 'sitereceitas@gmail.com';

        $mail->Password = 'senha';
        $mail->Port = 587; 

        $mail->setFrom('sitereceitas@gmail.com', 'Fale Conosco');
        $mail->addAddress('sitereceitas@gmail.com', 'Site Receitas');
        $mail->addReplyTo('sitereceitas@gmail.com', 'Fale Conosco');

        $mail->isHTML(true);
        $mail->Subject = "Novo email de SiteReceitas";

        $body = "Mensagem enviada através do site: <br>
                    Nome: " . $_POST['nome'] . " <br>
                    E-mail: " . $_POST['email'] . "<br>
                    Mensagem:<br>" . $_POST['mensagem'];

        $mail->Body = $body;
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Erro ao enviar o email: {$mail->ErrorInfo}";
    } finally {
        header("location: http://localhost/SiteReceitas/frontend/index.php");
    }
} else {
    echo "Erro ao enviar e-mail :(";
}