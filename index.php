 <header>
	<?php include("partials/header.php") ?>
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

	<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <a class="navbar-brand" href="#">Navbar</a>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav">
		      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
		      <a class="nav-item nav-link" href="#">Features</a>
		      <a class="nav-item nav-link" href="#">Pricing</a>
		      <a class="nav-item nav-link disabled" href="#">Disabled</a>
		    </div>
		  </div>
		</nav>

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