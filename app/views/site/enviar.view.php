<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$nome = utf8_encode($_POST['nome']);
$telefone = utf8_encode($_POST['telefone']);
$email = utf8_encode($_POST['email']);
$assunto = utf8_encode($_POST['assunto']);
$mensagem = utf8_encode($_POST['mensagem']);

$mail = new PHPMailer;
$mail->isSMTP();


$mail->Host = "smtp.gmail.com";
$mail->Port = "587";
$mail->SMTPsecure= "tls";
$mail->SMTPAuth = "true";
$mail->Username = "AnnaSunTrainee@gmail.com";
$mail->Password = "grupo1trainee";



$mail->setFrom('AnnaSunTrainee@gmail.com', 'anna');
$mail->addAddress('AnnaSunTrainee@gmail.com', 'anna');
$mail->Subject = "Entre em contato";

$conteudo_email = "
Você recebeu uma mensagem de {$nome} ({$telefone}) ({$email}):
<br><br>
Mensagem<br>
{$mensagem}";

$mail->IsHTML(true);
$mail->Body = $conteudo_email;

if($mail->send()){
    return view('site/contato');
}
else{
    echo "Falha ao enviar" . $mail->ErrorInfo;
}