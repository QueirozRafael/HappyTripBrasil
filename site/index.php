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
<title>Happy Trip Brasil</title>
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

<!-- SLIDER
================================================== -->
<?php
    $cabecalho_title= "Mirror Fashion";
    include("slider.php");
?>

<!-- Destinos
================================================== -->
<div id="subheader">
	<div class="row">
		<div class="twelve columns">
			<p class="center">
				 <h4>Próximos Destinos</h4>
				 <h5><a href="destinos.php">clique aqui e veja agenda completa</a></h5>
			</p>
		</div>
	</div>
</div>
<div class="hr">
</div>

<div class="row">
	<div id="portofolio">
		<!-- Destino 1-->
		<div class="four columns threeportofolio category trains">
			<h5>Rafting Socorro</h5>
			<div class="portofoliothumb">
				<div class="portofoliothumboverlay threeoverlay">
					<div class="inner threedetail">
						<a class="projectdetail" href="detalhes_rafting_socorro.php">Saiba mais</a>
					</div>
				</div>
				<img src="images/destinos/rafting_socorro.jpg" class="threeimage" alt=""/>
        <p>
          <img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
          <span>05/08</span><br>
          <img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
          <span>a partir de R$330,00</span><br>
  			</p>
      </div>
		</div>
		<!-- Project 2-->
		<div class="four columns threeportofolio category trains">
			<h5>Campos do Jordão - Day Use</h5>
			<div class="portofoliothumb">
				<div class="portofoliothumboverlay threeoverlay">
          <!-- <div class="inner threedetail">
						<a class="projectdetail" href="portofoliodetail.html">Saiba mais</a>
					</div> -->
				</div>
				<img src="images/destinos/campos_jordao_esgotado.jpg" class="threeimage" alt=""/>
        <p>
          <img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
          <span>20/08</span><br>
          <img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
          <span>a partir de R$290,00</span>
    		</p>
      </div>
		</div>
    <!-- Project Capitólio-->
    <div class="four columns threeportofolio category trains">
			<h5>Capitólio</h5>
			<div class="portofoliothumb">
				<div class="portofoliothumboverlay threeoverlay">
					<div class="inner threedetail">
						<a class="projectdetail" href="detalhes_capitolio.php">Saiba mais</a>
					</div>
				</div>
				<img src="images/destinos/capitolio.jpg" class="threeimage" alt=""/>
        <p>
          <img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
          <span>15/09 à 17/09</span><br>
          <img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
          <span>a partir de R$450,00</span>
        </p>
      </div>
    </div>
    <!-- Project Fazenda dos Contos-->
		<!-- <div class="four columns threeportofolio category trains">
			<h5>Fazenda dos contos</h5>
			<div class="portofoliothumb">
				<div class="portofoliothumboverlay threeoverlay">
					<div class="inner threedetail">
						<a class="projectdetail" href="detalhes_fazenda_dos_contos.php">Saiba mais</a>
					</div>
				</div>
				<img src="images/destinos/fazenda_contos.jpg" class="threeimage" alt=""/>
			</div>
			<p>
				 <h6>a partir de R$135,00</h6>
			</p>
		</div> -->
	</div>
</div>
<div class="hr">
</div>

<!-- FOOOTER
================================================== -->
<?php
    include("rodape.php");
  ?>

<!-- JAVASCRIPTS
================================================== -->
<!-- Javascript files placed here for faster loading -->
<script src="javascripts/foundation.min.js"></script>
<script src="javascripts/jquery.easing.1.3.js"></script>
<script src="javascripts/elasticslideshow.js"></script>
<script src="javascripts/jquery.carouFredSel-6.0.5-packed.js"></script>
<script src="javascripts/jquery.cycle.js"></script>
<script src="javascripts/app.js"></script>
<script src="javascripts/modernizr.foundation.js"></script>
<script src="javascripts/slidepanel.js"></script>
<script src="javascripts/scrolltotop.js"></script>
<script src="javascripts/hoverIntent.js"></script>
<script src="javascripts/superfish.js"></script>
<script src="javascripts/responsivemenu.js"></script>
</body>
</html>
