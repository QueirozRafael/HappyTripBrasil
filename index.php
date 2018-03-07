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
  <title>Happy Trip</title>
  <!-- Scripts -->
  <?php
    include('scripts.php');
  ?>
  <style media="screen">
    .subtitulo {
      /* background-color: #b89b73; */
      background-color: #d6d6d6;
      color: #000;
      padding: 15px;
      margin-bottom: 0;
    }
  </style>
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
    include("slider.php");
?>

<!-- Destinos
================================================== -->
<div id="subheader">
	<div class="row">
		<div class="twelve columns">
			<p class="center">
				 <h4>Roteiros em Destaque</h4>
				 <h5><a class="destaque" href="destinos.php">clique aqui e veja agenda completa</a></h5>
			</p>
		</div>
	</div>
</div>
<div class="hr">
</div>

<div class="row">
	<div>
		<!-- Roteiro Beto Carrero -->
    <div class="six columns">
			<h5 class="subtitulo">Beto Carrero World</h5>
			<div class="portofoliothumb">
        <a href="detalhes_beto_carrero.php">
  				<img src="images/destinos/beto_carrero.jpg" alt="Beto Carrero"/>
				</a>
        <p style="float:right;padding-top:5px">
          <a class="projectdetail" href="detalhes_beto_carrero.php">Detalhes e reservas</a>
        </p>
        <p>
          <img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
          <span>02/03/2018 à 05/03/2018;</span><br>
          <img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
          <span>Hospedagem com Café da manhã;</span><br>
          <img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
          <span>Ingresso para o Beto Carrero World (03/03/2018);</span><br>
          <img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
          <span>A partir de R$350,00.</span>
  			</p>
      </div>
		</div>
    <!-- Roteiro Ponta Negra -->
		<div class="six columns category isotope-item">
      <h5 class="subtitulo">Ponta Negra</h5>
      <div class="portofoliothumb">
		    <a href="detalhes_ponta_negra.php">
          <img src="images/destinos/ponta_negra.jpg" alt="Ponta Negra"/>
        </a>
			  <p style="float:right;padding-top:5px">
          <a class="projectdetail" href="detalhes_ponta_negra.php">Detalhes e reservas</a>
        </p>
        <p>
          <img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
          <span>27/04/2018 à 01/05/2018;</span><br>
          <img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
          <span>Festa na praia;</span><br>
          <img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
          <span>a partir de R$320,00.</span><br>
        </p>
      </div>
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
<script src="javascripts/bootstrap/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
