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

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
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
				 <h5><a href="destinos.php">clique aqui e veja agenda completa</a></h5>
			</p>
		</div>
	</div>
</div>
<div class="hr">
</div>

<div class="row">
	<div>
		<!-- Roteiro Bonito-MT -->
    <div class="six columns">
			<h5>Bonito-MT</h5>
			<div class="portofoliothumb">
        <a href="detalhes_bonito.php">
          <img src="images/destinos/bonito_esgotado.jpg" alt="Bonito-MT"/>
        </a>
        <p style="float:right;">
          <a class="projectdetail" href="detalhes_bonito.php">Detalhes</a>
        </p>
        <p>
          <img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
          <span>17/11/17 à 21/11/17</span><br>
          <img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
          <span>a partir de R$1.500,00</span>
  			</p>
      </div>
		</div>
    <!-- Roteiro Parque Maeda -->
		<div class="six columns category isotope-item">
      <h5>Parque Maeda</h5>
      <div class="portofoliothumb">
				<!-- <div class="portofoliothumboverlay">
					<div class="inner">
						<a class="projectdetail" href="detalhes_parque_maeda.php">Saiba mais</a>
					</div>
				</div> -->
        <a href="detalhes_parque_maeda.php">
          <img src="images/destinos/parque_maeda.jpg" alt="Parque Maeda"/>
        </a>
			  <p style="float:right;">
          <a class="projectdetail" href="detalhes_parque_maeda.php">Detalhes e reservas</a>
        </p>
        <p>
          <img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
          <span>26/11/17</span><br>
          <img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
          <span>Day Use</span><br>
          <img src="http://www.wowthemes.net/demo/studiofrancesca/images/check.png" alt="">
          <span>a partir de R$130,00</span><br>
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
<script src="javascripts/bootstrap/bootstrap.min.js"></script>
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
