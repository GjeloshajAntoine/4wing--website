<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Fondation 4WINGS</title>
	
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<meta charset="utf-8">
 	
 	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" type="text/css" href="stylesheets/jquery.jscrollpane.css" media="all" />

	<link rel="stylesheet" type="text/css" href="stylesheets/style_carousel.css" />
	<link rel="stylesheet" type="text/css" href="stylesheets/jquery.jscrollpane.css" media="all" />

	<link rel="stylesheet" href="stylesheets/index.css">
	<link rel="stylesheet" href="stylesheets/footer.css">
	<link rel="stylesheet" href="stylesheets/icomoon.css">
</head>
<body>
<div class="container-fluid header"><span class="carreBleu"></span>
	<div class="container contenu">


			 <header>
			 		<?php include("partials/header.php") ?>
			 </header>

		
		<section> <div class="row">
					  <div class="intro col-sm-9">
					  	<h1>Lutter contre la précarité en <span class="marron">Belgique</span></h1>
							<p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ipsam laudantium, accusantium in aliquam nihil ullam perferendis tempora doloribus atque sequi debitis quasi, aperiam minima quaerat accusamus recusandae deserunt! Nam.</p>
					  </div>
				  	  <div class="col-sm-3 libellule"></div>
				</div> 
		</section>
	</div>
	<section>
		<div class="axes">
			<div class="container">
			  <div class="row">
			    <div class="axe logement col-sm">
			      <div class="imgAxe img-fluid"><img src="img/logement.png" alt="">
			      	<h2>Logement</h2>
			      	<p>Une priorité pour l'intégration</p>
			      </div>
			    </div>
			    <div class="axe education col-sm">
			      <div class="imgAxe img-fluid"><img src="img/education.png" alt="">
			      	<h2>Tech-Éducation</h2>
			      	<p>Programmer le cercle vertueux &nbsp; de l'inclusion</p>
			      </div>
			    </div>
			    <div class="axe sante col-sm">
			      <div class="imgAxe img-fluid"><img src="img/sante.png" alt="">
			      	<h2>Santé et</h2>
			      	<h3>nutrition</h3>
			      	<p>L'alimentation,<br> la clé pour la santé de tous</p>
			      </div>
			    </div>
			 </div>
					
		</div>
	</section>
	<section class="citation">
		<div class="container">
				<div class="row">
					<div class="citation_image"></div>
					<div class="auteur">Virginie Samyn <br> Directrice de la fondation</div>
					<div class="citation_texte">"Une forte volonté d'agir <br>pour renforcer les liens sociaux"</div>
					<div class="libellule_blanche"> </div>
				</div>
		</div>
	</section>
	<section class="slider_projets">
			<?php include("js/carousel/carousel_4wings.php") ?>
	</section>

 <footer> 
 	<?php include("partials/footer.php") ?>
 </footer>

</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/carousel/js/jquery.contentcarousel.js"></script>
	<script type="text/javascript">
			$('#ca-container').contentcarousel();
	</script>
	
	<script type="text/javascript"  src="js/lucid.js"></script>
	<script src="js/script.js"></script>

	<script>
		$(window).on('load', function() {

		  $(this).impulse();
		});
	</script>

	 <script type="text/javascript"> $(document).ready(function(){ $('.top').click(function(){ $('html,body').animate({scrollTop: 0},'slow'); }); }); </script>

	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<!-- the jScrollPane script -->
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
	<script type="text/javascript">
			$('#ca-container').contentcarousel();
	</script>
	 	 
	
</body>
</html>