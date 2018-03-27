<?php echo $this->render('./partials/header.php',NULL,get_defined_vars(),0); ?>

<div class="container" id="logement">
    <div class="row header_rose" >
      <div class="TechEducation col-md-8">
        <span class="icon-home-outline"></span><h1>Logement</h1>
        <span>Une priorité pour l'intégration</span>
      </div>
      <div class="col-md-4 col-sm-6 col-12 ImageHeader">
          <img src="../img/img_header_logement.png" alt="ImageLogement">
      </div>
    </div>

 <!-- Row -->
    <div class="row">
	  	<div class="col-sm-9">
		    <div class="TechFirst">
		      <h2>En Belgique, 180.000 familles sont en attente d’un logement accessible financièrement</h2>
		      <p>L’accès à un logement décent constitue le point de départ de l’inclusion. Sous l’effet combiné de l’étendue de la pauvreté structurelle, de la crise migratoire et de l’augmentation des loyers, l’accès au logement à prix abordable est insuffisant en Belgique. Actuellement, plus de 180.000 ménages sont en attente. Des initiatives de terrain, multiples, innovantes, ouvrent de nouvelles voies et cherchent des partenaires pour changer d’échelle.</p>
		    </div>

        <div class="TechSecond LogementSecond">
          <p> <span class="lettrine1">"</span>La fondation se sont engagés 4WINGS en devenant ambassadeurs de la cause du mal logement. Ensemble, nous pouvons loger plus de personnes en situation de précarité, tout en étant atten- tifs aux besoins de chacun. C’est ce type le monde d’initiatives !<span class="lettrine2"> " </span>
            </p>
          <h5>Arnold Dupont <br/> de Becode</h5>
            <div class="TechSecond">
              <img src="../img/homme.png" alt="femme">
            </div>
         </div>

		  </div>
	    <div class="col-ms-3 TechSecondRight" >
	      <h5>Un projet ?</h5>
	      <a class="btn btn_success" href="soumission.php" target="blank">Nous contacter</a>
	      <img src="../img/libelulle_transparente.png" alt="libellule">
	    </div>


    </div>
  <!-- fin row-->
</div>

</div>


<div class="logementProjets TechThird">
  <div class="container LogementFifth">
         <div class="row" >
          <div class="col-sm-1"> <span class="icon-home-outline"> </span></div>
          <div class="LogementFifth col-sm-11 ">
            <h3>Les projets Logement</h3>
          </div>
        </div>
  </div>
</div>


<div class="container" id="TechForth">
  <div class="row">
    <!-- projet-->
     <div class="col-sm-12 col-md-6">
        <div class="TechForth border_rose">
          <a href="projet_logement.php"><img src="../img/projets/logo_habitat_humanism.jpg" alt="Vignette Logement"></a>
          <div class="rubrique rose">
            <h4> <a href="projet_logement.php">Habitat et Humanisme</a> </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo dicta ducimus voluptates, ullam optio ea excepturi numquam possimus nihil fugiat! Quas consequuntur, numquam repudiandae animi. Nam nulla repudiandae, itaque dolor?</p>
          </div>
        </div>
      </div>
    <!-- fin projet-->

        <!-- projet-->
     <div class="col-sm-12 col-md-6">
        <div class="TechForth border_rose">
          <a href="projet_logement.php"><img src="../img/projets/logo_habitat_humanism.jpg" alt="Vignette Logement"></a>
          <div class="rubrique rose">
            <h4> <a href="projet_logement.php">Habitat et Humanisme</a> </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo dicta ducimus voluptates, ullam optio ea excepturi numquam possimus nihil fugiat! Quas consequuntur, numquam repudiandae animi. Nam nulla repudiandae, itaque dolor?</p>
          </div>
        </div>
      </div>
    <!-- fin projet-->

  </div>
</div>



<?php echo $this->render('./partials/footer.php',NULL,get_defined_vars(),0); ?>
