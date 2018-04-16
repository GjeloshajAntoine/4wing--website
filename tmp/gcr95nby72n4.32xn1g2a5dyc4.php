<?php echo $this->render('./partials/header.php',NULL,get_defined_vars(),0); ?>

<div class="container" id="logement">
    <div class="row header_rose" >
      <div class="TechEducation col-md-8">
        <span class="icon-home-outline"></span><h1><?= $titre ?></h1>
        <span><?= $sous_titre_petit ?></span>
      </div>
      <div class="col-md-4 col-sm-6 col-12 ImageHeader">
          <img src="../img/img_header_logement.png" alt="ImageLogement">
      </div>
    </div>

 <!-- Row -->
    <div class="row">
	  	<div class="col-sm-9">
		    <div class="TechFirst">
		      <h2><?= $sous_titre_grand ?></h2>
		      <p><?= $paragraphe_1 ?></p>
        </div>

        <div class="TechSecond LogementSecond">
          <p> <span class="lettrine1">"</span><?= $citation['citation'] ?><span class="lettrine2"> " </span>
            </p>
          <h5><?= $citation['auteur'] ?></h5>
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
    <?php foreach (($projets?:[]) as $projet): ?>
        <p></p>
        <p></p>
        <!-- projet-->
     <div class="col-sm-12 col-md-6">
        <div class="TechForth border_rose">
          <a href="projet_logement.php"><img src="<?= $subrootpath ?>/projects_logo/<?= $projet['logo_file_name'] ?>" alt="Vignette Logement"></a>
          <div class="rubrique rose">
            <h4> <a href="projet_logement.php"><?= $projet['title'] ?></a> </h4>
            <p><?= $projet['le_projet'] ?></p>
          </div>
        </div>
      </div>
    <!-- fin projet-->
    <?php endforeach; ?>

  </div>
</div>



<?php echo $this->render('./partials/footer.php',NULL,get_defined_vars(),0); ?>
