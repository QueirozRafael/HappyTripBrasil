<!DOCTYPE html>
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
<title>Holambra - Day Use</title>
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
				<img src="images/destinos/expoflora_holambra.jpg" data-thumb="" alt=""/>
			</div>
		</div>
	</div>

	<!-- PROJECT DESCRIPTION-->
	<div class="six columns img_detalhes">
		<div class="sectiontitle">
			<h4>Holambra - Expoflora</h4>
		</div>
		<div>
			<p>
        Holambra abriga os principais produtores de flores ornamentais.
        Apesar de contar com mais de 11 mil habitantes, a cidade é o maior centro de cultivo e
        comercialização de flores e plantas ornamentais do Brasil. Os produtores aproveitam a realização
        da Expoflora, entre agosto e Setembro para lançar as novas variedades de flores e plantas para avaliar
        a sua aceitação pelo consumidor.
			</p>
			<dl class="tabs">
				<dd class="active"><a href="#simple1">Pacotes</a></dd>
				<dd><a href="#simple2">Programação</a></dd>
				<dd><a href="#simple3">Valores</a></dd>
			</dl>
			<ul class="tabs-content">
				<li class="active" id="simple1Tab">
					<div class="columns noleftmargin">
						<p>
        			<img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
							<span>Transporte em Onibus de turismo;</span><br>
							<img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
							<span>Passeio pelas Plantações de Flores;</span><br>
							<img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
							<span>Entrada no Expoflora (ingresso incluso);</span><br>
						</p>
					</div>
				</li>
				<li id="simple2Tab">
					<div class="columns noleftmargin">
						<b>Domingo 24/09</b>
						<p>
							<img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
							<span>Saída às 07h00 - Rua Domingo Agostim (atrás do Shopping Metro Tatuapé);</span><br>
              <img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
              <span>10:00 - Chegada prevista em Holambra;</span><br>
              <img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
              <span>10:15 - Inicio do City Tour;</span><br>
              <img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
              <span>13:00-> Fim do City Tour;</span><br>
              <img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
              <span>13:30-> Almoço (não Incluso);</span><br>
              <img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
              <span>15:00 -> Tarde livre para Expoflora;</span><br>
              <img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
              <span>17:00 -> Retorno para São Paulo;</span><br>
              <img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
              <span>21:00 -> Chegada prevista no Tatuapé.</span><br>
            </p>
            <p>
							<span>
                <b>Obs: Os horários podem sofrer alterações devido ao trânsito no percurso.</b>
              </span>
						</p>
        	</div>
				</li>
				<li id="simple3Tab">
				<p>
					<img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
					<span>R$140,00 por pessoa.</span><br>
				</p>
			</li>
			</ul>
		</div>
	<!-- end main content-->
	</div>
	<a href="pre_reserva.php?destino=Holambra">
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
