<?php

header('Content-Type: text/html; charset=utf-8');
mb_internal_encoding('UTF8');
mb_regex_encoding('UTF8');

require_once('class.phpmailer.php');
require_once('class.smtp.php');

//Retrieve form data.
//GET - user submitted data using AJAX
//POST - in case user does not support javascript, we'll use POST instead
$name = ($_GET['name']) ? utf8_decode($_GET['name']) : utf8_decode($_POST['name']);
$email = ($_GET['email']) ? utf8_decode($_GET['email']) : utf8_decode($_POST['email']);
$comment = ($_GET['comment']) ? utf8_decode($_GET['comment']) : utf8_decode($_POST['comment']);

//flag to indicate which method it uses. If POST set it to 1
if ($_POST) $post=1;

//Simple server side validation for POST data, of course, you should validate the email
if (!$name) $errors[count($errors)] = 'Please enter your name.';
if (!$email) $errors[count($errors)] = 'Please enter your email.';
if (!$comment) $errors[count($errors)] = 'Please enter your comment.';

//if the errors array is empty, send the mail
if (!$errors) {

	//recipient - replace your email here
	$to = 'contato@happytripbrasil.com.br';

	//sender - from the form
	$from = 'Contato  <' . $email . '>';

	//subject and the html message
	$subject = 'Message from ' . $name;

	$message = 'Name: ' . $name . '<br/>
		       		Email: ' . $email . '<br/>
		       		Message: ' . $comment . '<br/>';

	//send the mail
	$result = sendmail($to, $subject, $message, $from, $email);

	//if POST was used, display the message straight away
	if ($_POST) {
		if ($result) echo 'E-mail enviado com sucesso!';
		else echo 'Desculpe, erro inesperado! Por favor, tente mais tarde';

	//else if GET was used, return the boolean value so that
	//ajax script can react accordingly
	//1 means success, 0 means failed
	} else {
		echo $result;
	}

//if the errors array has values
} else {
	//display the errors message
	for ($i=0; $i<count($errors); $i++) echo $errors[$i] . '<br/>';
	echo '<a href="index.html">Back</a>';
	exit;
}

//Simple mail function with HTML header
function sendmail($to, $subject, $message, $from, $email) {
	$mailer = new PHPMailer(true);
	$mailer->IsSMTP();

	try {
		// configuração do email
		// $mailer->SMTPDebug = 1;
		$mailer->Port = 587; //Indica a porta de conexão para a saída de e-mails. Utilize obrigatoriamente a porta 587.
		$mailer->Host = 'smtp.happytripbrasil.com.br'; //Onde em 'servidor_de_saida' deve ser alterado por um dos hosts abaixo:

		// $mailer->SMTPSecure = 'tls';
		$mailer->SMTPAuth = true; //Define se haverá ou não autenticação no SMTP

		//autenticação do email de disparo
		$mailer->Username = $to; //Informe o e-mai o completo
		$mailer->Password = '30416697'; //Senha da caixa postal

		// dados do remetente
		$mailer->FromName = $from; //Nome que será exibido para o destinatário
		$mailer->From = $to; //Obrigatório ser a mesma caixa postal indicada em "username"
		$mailer->AddAddress($to); //Destinatários

		// titulo e corpo do email
		$mailer->Subject = $subject;
		$mailer->MsgHTML($message);

		if(!$mailer->Send())
		{
			return 0;
		}
		else
		{
			return 1;
		}
	} catch (phpmailerException $e) {
		return $e->errorMessage();
	}
}
?>
