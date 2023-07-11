<?php


use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

//Load Composer's autoloader
require 'vendor/autoload.php';

// Instanciar o objeto PHPMailer
 $mail = new PHPMailer(true);

try {
    // Configurações do servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'seu_email@example.com';
    $mail->Password = 'sua_senha';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Remetente e destinatário
    $mail->setFrom('seu_email@example.com', 'Seu Nome');
    $mail->addAddress('elisio.just.99@gmail.com');

    // Conteúdo do e-mail
    $mail->isHTML(false);
    $mail->Subject = 'Assunto do email';
    $mail->Body = "Olá,\n\nEste é um exemplo de email enviado via PHP usando o PHPMailer.\n\nAtenciosamente,\nRemetente";

    // Enviar o e-mail
    $mail->send();
    echo 'Email enviado com sucesso!';
} catch (Exception $e) {
    echo 'Falha ao enviar o email: ' . $mail->ErrorInfo;
}
?>
