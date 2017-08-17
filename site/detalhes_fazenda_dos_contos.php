<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width"/>
<title>Detalhes Fazenda dos Contos</title>
<!-- CSS Files-->
<link rel="stylesheet" href="stylesheets/style.css">

<link rel="stylesheet" href="stylesheets/skins/dourado.css">
<!-- skin color -->
<link rel="stylesheet" href="stylesheets/responsive.css">

<link rel="stylesheet" href="stylesheets/estilo.css">
<!-- IE Fix for HTML5 Tags -->
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

<!-- Fonts awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
			<p class="center">
				 Detalhes
			</p>
		</div>
	</div>
</div>

<!-- CONTENT
================================================== -->
<div class="row">
	<!-- SLIDER-->
	<div class="six columns img_detalhes">
		<div class="slider-wrapper theme-default">
			<div id="slider" class="nivoSlider detailslider">
				<img src="images/destinos/fazenda_contos.jpg" data-thumb="" alt=""/>
				<!-- <img src="http://www.wowthemes.net/demo/studiofrancesca/images/temp/nivo1.jpg" data-thumb="" alt=""/> -->
			</div>
		</div>
	</div>

	<!-- PROJECT DESCRIPTION-->
	<div class="six columns img_detalhes">
		<div class="sectiontitle">
			<h4>Fazenda dos Contos</h4>
		</div>
		<div>
			<p>
        Pintar o rosto, brincar, conhecer animais, assistir peças teatrais, conhecer o ateliê; é nesse ritmo de descobertas, aprendizado e várias interferências artísticas que as crianças passam o dia na Fazenda dos Contos.
      </p>
      <p>
        Um dia totalmente diferente do cotidiano, propiciando sempre a alegria, novas experiências e um mundo cheio de arte para explorar.
      </p>
      <p>
        Visita ao Ateliê
      </p>
      <p>
        Fascinados com os figurinos, acessórios e adereços, as crianças descobrem como funciona o processo de produção.
      </p>
      <p>
        Trilha na Floresta
      </p>
      <p>
        Uma grande aventura dentro da floresta, onde os alunos encontram alguns personagens das peças e entenderão princípios de preservação ambiental.
      </p>
      <p>
        E muito mais!
			</p>
			<dl class="tabs">
				<dd class="active"><a href="#simple1">Pacote</a></dd>
				<dd><a href="#simple2">Programação</a></dd>
				<dd><a href="#simple3">Valor</a></dd>
			</dl>
			<ul class="tabs-content">
				<li class="active" id="simple1Tab">
					<div class="columns noleftmargin">
						<p>
							<img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
							<span>Trasporte Onibus Turismo;</span><br>
							<img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
							<span>Guia de Turismo;</span><br>
							<img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
							<span>Seguro Viagem;</span><br>
							<img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
							<span>Cafe da Manhã;</span><br>
							<img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
							<span>Almoço;</span><br>
							<img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
							<span>Lanche da tarde.</span><br>
						</p>
					</div>
				</li>
				<li id="simple2Tab">
					<div class="columns noleftmargin">
						<b>Domingo 08/10</b>
						<p>
							<img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
							<span>Saída às 07h00 Rua Domingo Agostim, (parte de trás do Shopping Metro Tatuapé);</span><br>
							<img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
							<span>Previsão de chegada na Fazenda de Contos às 09h00;</span><br>
							<img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
							<span>Brincadeira e entretenimento durante todo o dia, com monitores especializados;</span><br>
							<img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
							<span>Retorno às 16h00.</span><br>
						</p>
					</div>
				</li>
				<li id="simple3Tab">
				<p>
					<img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
					<span>R$135,00 por pessoa.</span><br>
				</p>
			</li>
			</ul>
		</div>
	<!-- end main content-->
	</div>
	<a href="pre_reserva.php?destino=Fazenda_dos_Contos">
		<input type="submit" id="submit" class="readmore" value="Reservar">
	</a>
</div>

<!-- FOOOTER
================================================== -->
<?php
    include("rodape.php");
  ?>

<!-- JAVASCRIPTS
================================================== -->
<!-- Javascript files placed here for faster loading -->
<!-- Javascript files placed here for faster loading -->
<script src="javascripts/foundation.min.js"></script>
<script src="javascripts/jquery.cycle.js"></script>
<script src="javascripts/app.js"></script>
<script src="javascripts/modernizr.foundation.js"></script>
<script src="javascripts/slidepanel.js"></script>
<script src="javascripts/scrolltotop.js"></script>
<script src="javascripts/hoverIntent.js"></script>
<script src="javascripts/superfish.js"></script>
<script src="javascripts/responsivemenu.js"></script>
<script src="javascripts/elasticslideshow.js"></script>
</body>
</html>
