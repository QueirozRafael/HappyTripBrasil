<?php

header('Content-Type: text/html; charset=utf-8');
mb_internal_encoding('UTF8');
mb_regex_encoding('UTF8');

require_once('class.phpmailer.php');
require_once('class.smtp.php');

//Retrieve form data.
//GET - user submitted data using AJAX
//POST - in case user does not support javascript, we'll use POST instead
$quantidade_passageiro = ($_GET['quantidade']) ? $_GET['quantidade'] : $_POST['quantidade'];
$destino = ($_GET['destino']) ? utf8_decode($_GET['destino']) : utf8_decode($_POST['destino']);

$pacote = ($_GET['pacote']) ? utf8_decode($_GET['pacote']) : utf8_decode($_POST['pacote']);
$name = ($_GET['name']) ? utf8_decode($_GET['name']) : utf8_decode($_POST['name']);
$email = ($_GET['email']) ? utf8_decode($_GET['email']) : utf8_decode($_POST['email']);
$doc = ($_GET['doc']) ? utf8_decode($_GET['doc']) : utf8_decode($_POST['doc']);
// $tel = ($_GET['tel']) ?$_GET['tel'] : $_POST['tel'];
$nasc = ($_GET['nasc']) ? utf8_decode($_GET['nasc']) : utf8_decode($_POST['nasc']);

if($quantidade_passageiro > 1) {
	$pacote2 = ($_GET['pacote2']) ? utf8_decode($_GET['pacote2']) : utf8_decode($_POST['pacote2']);
	$name2 = ($_GET['name2']) ? utf8_decode($_GET['name2']) : utf8_decode($_POST['name2']);
	$email2 = ($_GET['email2']) ? utf8_decode($_GET['email2']) : utf8_decode($_POST['email2']);
	$doc2 = ($_GET['doc2']) ? utf8_decode($_GET['doc2']) : utf8_decode($_POST['doc2']);
	$nasc2 = ($_GET['nasc2']) ? utf8_decode($_GET['nasc2']) : utf8_decode($_POST['nasc2']);
}

if($quantidade_passageiro > 2) {
	$pacote3 = ($_GET['pacote3']) ? utf8_decode($_GET['pacote3']) : utf8_decode($_POST['pacote3']);
	$name3 = ($_GET['name3']) ? utf8_decode($_GET['name3']) : utf8_decode($_POST['name3']);
	$email3 = ($_GET['email3']) ? utf8_decode($_GET['email3']) : utf8_decode($_POST['email3']);
	$doc3 = ($_GET['doc3']) ? utf8_decode($_GET['doc3']) : utf8_decode($_POST['doc3']);
	$nasc3 = ($_GET['nasc3']) ? utf8_decode($_GET['nasc3']) : utf8_decode($_POST['nasc3']);
}

if($quantidade_passageiro > 3) {
	$pacote = ($_GET['pacote4']) ? utf8_decode($_GET['pacote4']) : utf8_decode($_POST['pacote4']);
	$name4 = ($_GET['name4']) ? utf8_decode($_GET['name4']) : utf8_decode($_POST['name4']);
	$email4 = ($_GET['email4']) ? utf8_decode($_GET['email4']) : utf8_decode($_POST['email4']);
	$doc4 = ($_GET['doc4']) ? utf8_decode($_GET['doc4']) : utf8_decode($_POST['doc4']);
	$nasc4 = ($_GET['nasc4']) ? utf8_decode($_GET['nasc4']) : utf8_decode($_POST['nasc4']);
}

if($quantidade_passageiro > 4) {
	$pacote = ($_GET['pacote5']) ? utf8_decode($_GET['pacote5']) : utf8_decode($_POST['pacote5']);
	$name5 = ($_GET['name5']) ? utf8_decode($_GET['name5']) : utf8_decode($_POST['name5']);
	$email5 = ($_GET['email5']) ? utf8_decode($_GET['email5']) : utf8_decode($_POST['email5']);
	$doc5 = ($_GET['doc5']) ? utf8_decode($_GET['doc5']) : utf8_decode($_POST['doc5']);
	$nasc5 = ($_GET['nasc5']) ? utf8_decode($_GET['nasc5']) : utf8_decode($_POST['nasc5']);
}

//flag to indicate which method it uses. If POST set it to 1
if ($_POST) $post=1;

//Simple server side validation for POST data, of course, you should validate the email
if (!$pacote) $errors[count($errors)] = 'Please enter your package.';
if (!$name) $errors[count($errors)] = 'Please enter your name.';
if (!$email) $errors[count($errors)] = 'Please enter your email.';
if (!$doc) $errors[count($errors)] = 'Please enter your cpf.';
// if (!$tel) $errors[count($errors)] = 'Please enter your telephone.';
if (!$nasc) $errors[count($errors)] = 'Please enter your date.';

if($quantidade_passageiro == 2) {
	if (!$pacote2) $errors[count($errors)] = 'Please enter your package.';
	if (!$name2) $errors[count($errors)] = 'Please enter your name.';
	if (!$email2) $errors[count($errors)] = 'Please enter your email.';
	if (!$doc2) $errors[count($errors)] = 'Please enter your cpf.';
	if (!$nasc2) $errors[count($errors)] = 'Please enter your date.';
}

if($quantidade_passageiro == 3) {
	if (!$pacote3) $errors[count($errors)] = 'Please enter your package.';
	if (!$name3) $errors[count($errors)] = 'Please enter your name.';
	if (!$email3) $errors[count($errors)] = 'Please enter your email.';
	if (!$doc3) $errors[count($errors)] = 'Please enter your cpf.';
	if (!$nasc3) $errors[count($errors)] = 'Please enter your date.';
}

if($quantidade_passageiro == 4) {
	if (!$pacote4) $errors[count($errors)] = 'Please enter your package.';
	if (!$name4) $errors[count($errors)] = 'Please enter your name.';
	if (!$email4) $errors[count($errors)] = 'Please enter your email.';
	if (!$doc4) $errors[count($errors)] = 'Please enter your cpf.';
	if (!$nasc4) $errors[count($errors)] = 'Please enter your date.';
}

if($quantidade_passageiro == 5) {
	if (!$pacote5) $errors[count($errors)] = 'Please enter your package.';
	if (!$name5) $errors[count($errors)] = 'Please enter your name.';
	if (!$email5) $errors[count($errors)] = 'Please enter your email.';
	if (!$doc5) $errors[count($errors)] = 'Please enter your cpf.';
	if (!$nasc5) $errors[count($errors)] = 'Please enter your date.';
}

//if the errors array is empty, send the mail
if (!$errors) {
	//recipient - replace your email here
	$to = 'contato@happytripbrasil.com.br';

	//sender - from the form
	$from = 'Reserva - ' . $destino . ' <' . $email . '>';

	//subject and the html message
	$subject = 'Mensagem de ' . $name;

	if($quantidade_passageiro == 2) {
		$message =  'Destino: ' . $destino . '<br/><br/>
								===========Passageiro 1===========<br/>
								Pacote: ' . $pacote . '<br/>
								Nome: ' . $name . '<br/>
			       		Email: ' . $email . '<br/>
	              Documento: ' . $doc . '<br/>
	              Nascimento: ' . date('d/m/Y',strtotime($nasc)) . '<br/><br/>
							  ===========Passageiro 2===========<br/>
								Pacote: ' . $pacote2 . '<br/>
							  Nome: ' . $name2 . '<br/>
			       		Email: ' . $email2 . '<br/>
	              Documento: ' . $doc2 . '<br/>
	              Nascimento: ' . date('d/m/Y',strtotime($nasc2)) . '<br/><br/>';
	}
	else if($quantidade_passageiro == 3) {
		$message = 'Destino: ' . $destino . '<br/><br/>
								===========Passageiro 1===========<br/>
								Pacote: ' . $pacote . '<br/>
								Nome: ' . $name . '<br/>
			       		Email: ' . $email . '<br/>
	              Documento: ' . $doc . '<br/>
	              Nascimento: ' . date('d/m/Y',strtotime($nasc)) . '<br/><br/>
							  ===========Passageiro 2===========<br/>
								Pacote: ' . $pacote2 . '<br/>
							  Nome: ' . $name2 . '<br/>
			       		Email: ' . $email2 . '<br/>
	              Documento: ' . $doc2 . '<br/>
	              Nascimento: ' . date('d/m/Y',strtotime($nasc2)) . '<br/><br/>
								===========Passageiro 3===========<br/>
								Pacote: ' . $pacote3 . '<br/>
							  Nome: ' . $name3 . '<br/>
			       		Email: ' . $email3 . '<br/>
	              Documento: ' . $doc3 . '<br/>
	              Nascimento: ' . date('d/m/Y',strtotime($nasc3)) . '<br/><br/>';
	}
	else if($quantidade_passageiro == 4) {
		$message = 'Destino: ' . $destino . '<br/><br/>
								===========Passageiro 1===========<br/>
								Pacote: ' . $pacote . '<br/>
								Nome: ' . $name . '<br/>
			       		Email: ' . $email . '<br/>
	              Documento: ' . $doc . '<br/>
	              Nascimento: ' . date('d/m/Y',strtotime($nasc)) . '<br/><br/>
							  ===========Passageiro 2===========<br/>
								Pacote: ' . $pacote2 . '<br/>
							  Nome: ' . $name2 . '<br/>
			       		Email: ' . $email2 . '<br/>
	              Documento: ' . $doc2 . '<br/>
	              Nascimento: ' . date('d/m/Y',strtotime($nasc2)) . '<br/><br/>
								===========Passageiro 3===========<br/>
								Pacote: ' . $pacote3 . '<br/>
							  Nome: ' . $name3 . '<br/>
			       		Email: ' . $email3 . '<br/>
	              Documento: ' . $doc3 . '<br/>
	              Nascimento: ' . date('d/m/Y',strtotime($nasc3)) . '<br/><br/>
							  ===========Passageiro 4===========<br/>
								Pacote: ' . $pacote4 . '<br/>
							  Nome: ' . $name4 . '<br/>
			       		Email: ' . $email4 . '<br/>
	              Documento: ' . $doc4 . '<br/>
	              Nascimento: ' . date('d/m/Y',strtotime($nasc4)) . '<br/><br/>';
	}
	else if($quantidade_passageiro == 5) {
		$message = 'Destino: ' . $destino . '<br/><br/>
								===========Passageiro 1===========<br/>
								Pacote: ' . $pacote . '<br/>
								Nome: ' . $name . '<br/>
			       		Email: ' . $email . '<br/>
	              Documento: ' . $doc . '<br/>
	              Nascimento: ' . date('d/m/Y',strtotime($nasc)) . '<br/><br/>
							  ===========Passageiro 2===========<br/>
								Pacote: ' . $pacote2 . '<br/>
							  Nome: ' . $name2 . '<br/>
			       		Email: ' . $email2 . '<br/>
	              Documento: ' . $doc2 . '<br/>
	              Nascimento: ' . date('d/m/Y',strtotime($nasc2)) . '<br/><br/>
								===========Passageiro 3===========<br/>
								Pacote: ' . $pacote3 . '<br/>
							  Nome: ' . $name3 . '<br/>
			       		Email: ' . $email3 . '<br/>
	              Documento: ' . $doc3 . '<br/>
	              Nascimento: ' . date('d/m/Y',strtotime($nasc3)) . '<br/><br/>
							  ===========Passageiro 4===========<br/>
								Pacote: ' . $pacote4 . '<br/>
							  Nome: ' . $name4 . '<br/>
			       		Email: ' . $email4 . '<br/>
	              Documento: ' . $doc4 . '<br/>
	              Nascimento: ' . date('d/m/Y',strtotime($nasc4)) . '<br/><br/>
							  ===========Passageiro 5===========<br/>
								Pacote: ' . $pacote5 . '<br/>
							  Nome: ' . $name5 . '<br/>
			       		Email: ' . $email5 . '<br/>
	              Documento: ' . $doc5 . '<br/>
	              Nascimento: ' . date('d/m/Y',strtotime($nasc5)) . '<br/><br/>';
	}
	else {
		$message = 'Destino: ' . $destino . '<br/><br/>
								===========Passageiro 1===========<br/>
								Pacote: ' . $pacote . '<br/>
								Nome: ' . $name . '<br/>
			       		Email: ' . $email . '<br/>
	              Documento: ' . $doc . '<br/>
	              Nascimento: ' . date('d/m/Y',strtotime($nasc)) . '<br/><br/>';
	}

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
