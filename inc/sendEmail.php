<?php
/*
// Replace this with your own email address
$siteOwnersEmail = 'elisio.just.99@gmail.com';


if($_POST) {

   $name = trim(stripslashes($_POST['contactName']));
   $email = trim(stripslashes($_POST['contactEmail']));
   $subject = trim(stripslashes($_POST['contactSubject']));
   $contact_message = trim(stripslashes($_POST['contactMessage']));

   // Check Name
	if (strlen($name) < 2) {
		$error['name'] = "Elisio Monjane";
	}
	// Check Email
	if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
		$error['email'] = "Please enter a valid email address.";
	}
	// Check Message
	if (strlen($contact_message) < 15) {
		$error['messagem'] = "Please enter your message. It should have at least 15 characters.";
	}
   // Subject
	if ($subject == '') { $subject = "Contact Form Submission"; }

$message="";
$error="";
   // Set Message
   $message .= "Email from: " . $name . "<br />";
	$message .= "Email address: " . $email . "<br />";
   $message .= "Message: <br />";
   $message .= $contact_message;
   $message .= "<br /> ----- <br /> This email was sent from your site's contact form. <br />";

   // Set From: header
   $from =  $name . " <" . $email . ">";

   // Email Headers
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $email . "\r\n";
 	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


   if (!$error) {

      ini_set("sendmail_from", $siteOwnersEmail); // for windows server
      $mail = mail($siteOwnersEmail, $subject, $message, $headers);

		if ($mail) { echo "OK"; }
      else { echo "Something went wrong. Please try again."; }
		
	} # end if - no validation error

	else {

		$response = (isset($error['name'])) ? $error['name'] . "<br /> \n" : null;
		$response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
		$response .= (isset($error['message'])) ? $error['message'] . "<br />" : null;
		
		echo $response;

	} # end if - there was a validation error

}

?>*/

use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';
/*
 "vendor/phpmailer/src/Exception.php";
 "vendor/phpmailer/src/PHPMailer.php";
 "vendor/phpmailer/src/SMTP.php";
*/

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
