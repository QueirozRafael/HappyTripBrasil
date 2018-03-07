<!DOCTYPE html>
<?php
header('Content-Type: text/html; charset=utf-8');
?>
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
<title>Happy Trip | Fotos</title>
<?php
    include("scripts.php");
?>
<link rel="stylesheet" href="stylesheets/pictures.css">
<!-- IE Fix for HTML5 Tags -->
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

<!-- Fonts awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
			<p class="left">
				 Fotos
			</p>
		</div>
	</div>
</div>

<!-- CONTENT
================================================== -->
  <div class="row">
    <div class="center">
      <div class="gallery">
        <figure>
          <a target="_blank" href="https://www.facebook.com/pg/happytripbrasil/photos/?tab=album&album_id=700880003441528">
            <figcaption>Reveillon em Búzios</figcaption>
            <img src="images/fotos/buzios.jpg" alt="Búzios">
          </a>
        </figure>
      </div>
      <div class="gallery">
        <figure>
          <a target="_blank" href="https://www.facebook.com/pg/happytripbrasil/photos/?tab=album&album_id=686395331556662">
            <figcaption>Bonito 2ª edição</figcaption>
            <img src="images/fotos/bonito.jpg" alt="Bonito">
          </a>
        </figure>
      </div>
      <div class="gallery">
        <figure>
          <a target="_blank" href="https://www.facebook.com/pg/happytripbrasil/photos/?tab=album&album_id=675588742637321">
            <figcaption>Cabo Frio, Búzios e Arraial</figcaption>
            <img src="images/fotos/cabo_frio.jpg" alt="Cabo Frio, Búzios e Arraial">
          </a>
        </figure>
      </div>
      <div class="gallery">
        <figure>
          <a target="_blank" href="https://www.facebook.com/pg/happytripbrasil/photos/?tab=album&album_id=595992837263579">
            <figcaption>Capitólio</figcaption>
            <img src="images/fotos/capitolio.jpg" alt="Capitólio">
          </a>
        </figure>
      </div>
    </div>
  </div>

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
  <script src="javascripts/jquery.tweet.js"></script>
  <script src="javascripts/envia_email.js"></script>
  </body>
  </html>
