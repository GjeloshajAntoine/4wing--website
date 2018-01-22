<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Fondation 4WINGS</title>
  
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <meta charset="utf-8">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  
  <link rel="stylesheet" type="text/css" href="stylesheets/jquery.jscrollpane.css" media="all" />

  <link rel="stylesheet" type="text/css" href="stylesheets/style_carousel.css" />
  <link rel="stylesheet" type="text/css" href="stylesheets/jquery.jscrollpane.css" media="all" />

  <link rel="stylesheet" href="stylesheets/index.css">
  <link rel="stylesheet" href="stylesheets/tech.css">
  <link rel="stylesheet" href="stylesheets/footer.css">
  <link rel="stylesheet" href="stylesheets/icomoon.css">
  <link rel="stylesheet" href="stylesheets/nav.css">
  <link rel="stylesheet" href="stylesheets/mobile.css">
  
  <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre" rel="stylesheet"> 

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid header">
  <div class="container contenu">
    <header>
      <nav>
        <div class="row">
          <div class="logo col-4">
            <a href="../index_lucile.php">
              <img src="img/logo_blanc.png" alt="">
            </a>
          </div>
          <div>
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
                        <li><a href="#">Santé et nutrition</a></li>
                      </ul>
                </li>
                <li class="dropdown list-inline-item menu"><a href="#">Contact</a></li>
              
            </ul>
          </div>
        </div>
      </nav>
    </header>
		
	<section> 
		<div class="container contenu">
			<div class="row">
					  <div class="intro col-sm-9">
					  	<h1>Lutter contre la précarité en <span class="marron">Belgique</span></h1>
							<p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ipsam laudantium, accusantium in aliquam nihil ullam perferendis tempora doloribus atque sequi debitis quasi, aperiam minima quaerat accusamus recusandae deserunt! Nam.</p>
					  </div>
				  	  <div class="col-sm-3 libellule"></div>
				</div> 
		</div>
	</section>

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
			    	<a href="Views/tech_education.php">
			      <div class="imgAxe img-fluid">
			      	<img src="img/education.png" alt="">
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
</div>

 <footer> 
 	<?php include("partials/footer.php") ?>
 </footer>