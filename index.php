<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Fondation 4WINGS</title>
	<link rel="stylesheet" href="stylesheets/index.css">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<meta charset="utf-8">
 	
 	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" type="text/css" href="js/carousel/css/style_carousel.css" />
	<link rel="stylesheet" type="text/css" href="js/carousel/css/jquery.jscrollpane.css" media="all" />
 	 
</head>
<body>
<div class="container-fluid header"><span class="carreBleu"></span>
	<div class="container contenu">
			 <header>
			 	<nav>
			 	<div class="row">
				 	<div class="logo col-4">
				 		<a href="">
				 			<img src="img/logo_blanc.png" alt="">
				 		</a>
				 	</div>

				 	<div class="nav navbar-header">
				 		<ul class="nav navbar-nav navbar-right">
				 			<li class="dropdown list-inline-item menu">
						          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">A propos <span class="caret"></span></a>
						          <ul class="dropdown-menu">
						            <li><a href="#">Missions</a></li>
						            <li><a href="#">Valeurs</a></li>
						            <li><a href="#">Sélection de projets</a></li>
						            <li><a href="#">Équipe</a></li>
						            <li><a href="#">Conseil d'administration</a></li>
						            <li><a href="#">FAQ</a></li>
						            <li><a href="#">Réseau & partenaires</a></li>
						          </ul>
						    </li>
						    <li class="dropdown list-inline-item menu">
						          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Les projets <span class="caret"></span></a>
						          <ul class="dropdown-menu">
						            <li><a href="#">Logement</a></li>
						            <li><a href="#">Tech Éducation</a></li>
						            <li><a href="#">Santé par la nutrition</a></li>
						          </ul>
						    </li>
						    <li class="dropdown list-inline-item menu"><a href="#">Contact</a></li>
				 			
				 		</ul>
				 	</div>
			 	</div>
			 	</nav>
			 </header>

		
		<section>
				<div class="row">
					<div class="col-8">
						<h1>Lutter contre la précarité en Belgique</h1>
						<p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ipsam laudantium, accusantium in aliquam nihil ullam perferendis tempora doloribus atque sequi debitis quasi, aperiam minima quaerat accusamus recusandae deserunt! Nam.</p>
					</div>
					<div class="col">Libelulle</div>
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
			    <div class="row">
			    <div class="axe education col-sm">
			      <div class="imgAxe img-fluid"><img src="img/education.png" alt="">
			      	<h2>Technologie</h2>
			      	<h3>Éducation</h3>
			      	<p>Programmer le cercle vertueux de l'inclusion</p>
			      </div>
			    </div>
			    <div class="row">
			    <div class="axe sante col-sm">
			      <div class="imgAxe img-fluid"><img src="img/sante.png" alt="">
			      	<h2>Santé par la</h2>
			      	<h3>nutrition</h3>
			      	<p>La clé pour la santé de tous</p>
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
				</div>
		</div>
	</section>
	<section class="slider_projets">
				<?php include("js/carousel/carousel.php") ?>
	</section>
	<footer>
		

	</footer>
	
</div>
	<script src="js/script.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  	<script type="text/javascript" src="js/carousel/js/jquery.easing.1.3.js"></script>
		<!-- the jScrollPane script -->
	<script type="text/javascript" src="js/carousel/js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/carousel/js/jquery.contentcarousel.js"></script>
	<script type="text/javascript">
			$('#ca-container').contentcarousel();
	</script>
	
</body>
</html>
