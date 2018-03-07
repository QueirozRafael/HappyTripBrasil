<!DOCTYPE html>
<?php
header('Content-Type: text/html; charset=utf-8');
?>
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width"/>
<title>Happy Trip | Contato</title>
<?php
    include("scripts.php");
?>
<link rel="stylesheet" href="stylesheets/msg_aguarde.css">
</head>

<body>
<p class="slide">
</p>

<!-- HEADER
================================================== -->
<?php
    include("cabecalho.php");
?>

<!-- SUBHEADER
================================================== -->
<div id="subheader">
	<div class="row">
		<div class="twelve columns">
			<p>
				 Contato
			</p>
		</div>
	</div>
</div>
<div class="hr">
</div>

<!-- CONTENT
================================================== -->
<div class="row">
  <!-- GOOGLE MAP IFRAME -->
	<div>
		<iframe class="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.1061585260622!2d-46.655789385022146!3d-23.564630484681263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c7d3a04d29%3A0xd7035ad82107a00d!2sAv.+Paulista%2C+1159+-+Bela+Vista%2C+S%C3%A3o+Paulo+-+SP%2C+01310-100!5e0!3m2!1spt-BR!2sbr!4v1501165007116"> -->
    </iframe>
	</div>
</div>
<div class="row">
<!-- CONTACT FORM -->
<div class="four columns">
  <h5>Telefone</h5>
  <div>
    <p>
      <b>Junior</b><br>
      <i class="fa fa-whatsapp fa"></i>(11) 98181-6252
    </p>
    <p>
      <b>Cibele</b><br>
      <i class="fa fa-whatsapp fa"></i>(11) 98779-7735
    </p>
  </div>
  <div class="eight columns">
    <h5>Mensagem</h5>
		<form id="contactform">
      <div class="form">
        <div id="loading" class="loading">
					<div class="loading_ball_outside">
						<div class="loading_inside"></div>
					</div>
				</div>
		    <div class="noleftmargin">
					<label>Nome</label>
					<input type="text" id="name" name="name" class="smoothborder" required/>
				</div>
				<div class="noleftmargin">
					<label>E-mail</label>
					<input type="email" id="email" name="email" class="smoothborder" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/>
				</div>
				<label>Mensagem</label>
				<textarea id="comment" name="comment" class="smoothborder ctextarea" rows="14" placeholder="Deixe aqui sua crítica, sugestão ou agradecimento" required></textarea>
				<input type="submit" class="readmore" value="Enviar">
			</div>
		</form>
  </div>
</div>
<div class="clear">
</div>
<div class="sucesso alerta done">
  <div class="alert-box success">
   Mensagem enviada com sucesso! <a href="" class="close">x</a>
  </div>
</div>
<div class="erro alerta done">
  <div class="alert-box alert">
   Desculpe, falha ao enviar e-mail! Por favor, tente mais tarde. <a href="" class="close">x</a>
  </div>
</div>
</div>
<p class="slide">
</p>

<!-- FOOOTER
================================================== -->
<?php
    include("rodape.php");
  ?>

<!-- JAVASCRIPTS
================================================== -->
<!-- Javascript files placed here for faster loading -->
<script src="javascripts/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="javascripts/foundation.min.js"></script>
<script src="javascripts/formvalidation.js"></script>
<script src="javascripts/jquery.cycle.js"></script>
<script src="javascripts/app.js"></script>
<script src="javascripts/modernizr.foundation.js"></script>
<script src="javascripts/slidepanel.js"></script>
<script src="javascripts/scrolltotop.js"></script>
<script src="javascripts/hoverIntent.js"></script>
<script src="javascripts/superfish.js"></script>
<script src="javascripts/responsivemenu.js"></script>
<script src="javascripts/envia_email.js"></script>
</body>
</html>
