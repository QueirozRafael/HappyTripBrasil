<!DOCTYPE html>
<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pt">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width"/>
<title>Happy Trip | Pré reserva</title>
<?php
  include('scripts.php');
?>
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
			<p class="left">
				 Pré reserva - <b><span id="destino" value=""></span></b>
			</p>
		</div>
	</div>
</div>

<!-- CONTENT
================================================== -->
<div class="row">
	<!-- CONTACT FORM -->
	<div>
		<!-- <div class="wrapcontact"> -->
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
			<form id="reservaform">
				<div id="loading" class="loading">
					<div class="loading_ball_outside">
						<div class="loading_inside"></div>
					</div>
				</div>
				<div class="select columns noleftmargin">
					<h5>Quantidade de passageiros</h5>
          <input id="quantidade_passageiros" type="number" name="quantidade_passageiros" class="smoothborder" value="1" min="1" max="5" style="width:100px">
				</div>
				<p>
				<div class="passageiro1">
					<h5>Passageiro 1</h5>
					<div class="form">
            <div class="twelve columns noleftmargin">
							<label>Pacote:</label>
							<input id="pacote" type="text" name="pacote" class="smoothborder" placeholder="Camping, Quarto, Pousada..." required/>
						</div>
						<div class="six columns noleftmargin">
							<label>Nome</label>
							<input id="nome" type="text" name="name" class="smoothborder" required/>
						</div>
						<div class="six columns noleftmargin">
							<label>E-mail</label>
							<input id="email" type="email" name="email" class="smoothborder" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/>
						</div>
						<div class="six columns noleftmargin">
							<label>CPF</label>
							<input id="doc" type="text" name="doc" class="doc smoothborder" required/>
						</div>
						<!-- <div class="six columns noleftmargin">
							<label>Telefone</label>
							<input id="telefone" type="tel" name="tel" class="phone smoothborder" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" maxlength="15"/>
						</div> -->
						<div class="six columns noleftmargin">
							<label>Data de Nascimento</label>
							<input id="data_nasc" type="date" format="ddMMyyyy" name="nasc" class="smoothborder" required/>
						</div>
					</div>
				</div>
				</p>
				<p>
				<div id="passageiro2">
					<h5>Passageiro 2</h5>
					<div class="form">
            <div class="twelve columns noleftmargin">
							<label>Pacote:</label>
							<input id="pacote2" type="text" name="pacote2" class="smoothborder" placeholder="Camping, Quarto, Pousada..." required/>
						</div>
				    <div class="six columns noleftmargin">
							<label>Nome</label>
							<input id="nome2" type="text" name="name2" class="name smoothborder" placeholder="seu nome *"/>
						</div>
						<div class="six columns noleftmargin">
							<label>E-mail</label>
							<input id="email2" type="email" name="email2" class="email smoothborder" placeholder="seu email *" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
						</div>
						<div class="six columns noleftmargin">
							<label>CPF</label>
							<input id="doc2" type="text" name="doc" class="doc smoothborder"/>
						</div>
						<!-- <div class="six columns noleftmargin">
							<label>Telefone</label>
							<input type="tel" name="tel2" class="phone smoothborder" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" maxlength="15"/>
						</div> -->
						<div class="six columns noleftmargin">
							<label>Data de Nascimento</label>
							<input id="data_nasc2" type="date" name="nasc2" class="data_nasc smoothborder"/>
						</div>
					</div>
				</div>
				</p>
				<p>
				<div id="passageiro3">
					<h5>Passageiro 3</h5>
					<div class="form">
            <div class="twelve columns noleftmargin">
							<label>Pacote:</label>
							<input id="pacote3" type="text" name="pacote3" class="smoothborder" placeholder="Camping, Quarto, Pousada..." required/>
						</div>
				    <div class="six columns noleftmargin">
							<label>Nome</label>
							<input id="nome3" type="text" name="name3" class="name smoothborder" placeholder="seu nome *"/>
						</div>
						<div class="six columns noleftmargin">
							<label>E-mail</label>
							<input id="email3" type="email" name="email3" class="email smoothborder" placeholder="seu email *" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
						</div>
						<div class="six columns noleftmargin">
							<label>CPF</label>
							<input id="doc3" type="text" name="doc3" class="doc smoothborder"/>
						</div>
						<!-- <div class="six columns noleftmargin">
							<label>Telefone</label>
							<input type="tel" name="tel2" class="phone smoothborder" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" maxlength="15"/>
						</div> -->
						<div class="six columns noleftmargin">
							<label>Data de Nascimento</label>
							<input id="data_nasc3" type="date" name="nasc3" class="data_nasc smoothborder"/>
						</div>
					</div>
				</div>
				</p>
				<p>
				<div id="passageiro4">
					<h5>Passageiro 4</h5>
					<div class="form">
            <div class="twelve columns noleftmargin">
							<label>Pacote:</label>
							<input id="pacote4" type="text" name="pacote4" class="smoothborder" placeholder="Camping, Quarto, Pousada..." required/>
						</div>
				    <div class="six columns noleftmargin">
							<label>Nome</label>
							<input id="nome4" type="text" name="name4" class="name smoothborder" placeholder="seu nome *"/>
						</div>
						<div class="six columns noleftmargin">
							<label>E-mail</label>
							<input id="email4" type="email" name="email4" class="email smoothborder" placeholder="seu email *" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
						</div>
						<div class="six columns noleftmargin">
							<label>CPF</label>
							<input id="doc4" type="text" name="doc4" class="doc smoothborder"/>
						</div>
						<!-- <div class="six columns noleftmargin">
							<label>Telefone</label>
							<input type="tel" name="tel2" class="phone smoothborder" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" maxlength="15"/>
						</div> -->
						<div class="six columns noleftmargin">
							<label>Data de Nascimento</label>
							<input id="data_nasc4" type="date" name="nasc4" class="data_nasc smoothborder"/>
						</div>
					</div>
				</div>
				</p>
				<p>
				<div id="passageiro5">
					<h5>Passageiro 5</h5>
					<div class="form">
            <div class="twelve columns noleftmargin">
							<label>Pacote:</label>
							<input id="pacote5" type="text" name="pacote5" class="smoothborder" placeholder="Camping, Quarto, Pousada..." required/>
						</div>
				    <div class="six columns noleftmargin">
							<label>Nome</label>
							<input id="nome5" type="text" name="name5" class="name smoothborder" placeholder="seu nome *"/>
						</div>
						<div class="six columns noleftmargin">
							<label>E-mail</label>
							<input id="email5" type="email" name="email5" class="email smoothborder" placeholder="seu email *" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
						</div>
						<div class="six columns noleftmargin">
							<label>CPF</label>
							<input id="doc5" type="text" name="doc5" class="doc smoothborder"/>
						</div>
						<!-- <div class="six columns noleftmargin">
							<label>Telefone</label>
							<input type="tel" name="tel2" class="phone smoothborder" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" maxlength="15"/>
						</div> -->
						<div class="six columns noleftmargin">
							<label>Data de Nascimento</label>
							<input id="data_nasc5" type="date" name="nasc5" class="data_nasc smoothborder"/>
						</div>
					</div>
				</div>
				</p>
				<input type="submit" class="readmore" value="Enviar">
			</form>
		<!-- </div> -->
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
<script src="javascripts/bootstrap/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script type="text/javascript">
	var vars = [], hash;
	var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
	for(var i = 0; i < hashes.length; i++)
	{
		hash = hashes[i].split('=');
		vars.push(hash[0]);
		vars[hash[0]] = hash[1];
	}
	var destino = $("#destino");
	var parametro = vars[hash[0]].replace(/_/g," ").replace(/%C3%A9/g, "é").replace(/%C3%A3/g, "ã").replace(/%C3%BA/g, "ú").replace(/%C3%B3/g, "ó").replace(/%C3%AD/g,"í").replace(/%20/g, "-");
	destino.val(parametro);
  destino.append(parametro);
</script>
<script type="text/javascript">
    $(function() {
        $.mask.definitions['~'] = "[+-]";
        $(".date").mask("99/99/9999",{completed:function(){alert("completed!");}});
        // $(".phone").mask("(99)9999-9999");
        $(".doc").mask("999.999.999-99");

        $("input").blur(function() {
            $("#info").html("Unmasked value: " + $(this).mask());
        }).dblclick(function() {
            $(this).unmask();
        });
    });
</script>
<script src="javascripts/passageiros.js"></script>
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
<script src="javascripts/jquery.tweet.js"></script>
<script src="javascripts/envia_email.js"></script>
<script src="javascripts/jquery.maskedinput.min.js" type="text/javascript"></script>

</body>
</html>
