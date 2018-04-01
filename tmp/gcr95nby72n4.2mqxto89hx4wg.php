<?php echo $this->render('./partials/header.php',NULL,get_defined_vars(),0); ?>

<div class="container" id="TechEd">
    <div class="row header_bleu" >
      <div class="TechEducation col-md-8">
        <span class="icon-monitor"></span><h1><?= $titre ?> </h1>
        <span><?= $sous_titre_petit ?></span>
      </div>
    </div>

 <!-- Row -->
    <div class="row">
	  	<div class="col-sm-9">
		    <div class="TechFirst">
		      <h2><?= $sous_titre_grand ?></h2>
		      <p><?= $paragraphe_1 ?></p>
		    </div>

        <div class="TechSecond">
          <p> <span class="lettrine1">"</span> <?= $citation['citation'] ?><span class="lettrine2"> " </span>
            </p>
          <h5><?= $citation['auteur'] ?></h5>
            <div class="TechSecond">
              <img src="<?= $subrootpath ?>/img/femme2.png" alt="femme">
            </div>
         </div>

		  </div>
	    <div class="col-ms-3 TechSecondRight" >
	      <h5>Un projet ?</h5>
	      <a class="btn btn_success" href="soumission.php" target="blank">Nous contacter</a>
	      <img src="<?= $subrootpath ?>/img/libelulle_transparente.png" alt="libellule">
	    </div>


    </div>
  <!-- fin row-->
</div>

</div>


<div class="TechThird">
  <div class="container">
         <div class="row" >
          <div class="col-sm-1"> <span class="icon-monitor"> </span></div>
          <div class="TechEducation col-sm-11">
            <h3>Les projets Tech - Education</h3>
          </div>
        </div>
  </div>
</div>


<div class="container" id="TechForth">
  <div class="row">
    <!-- projet-->
     <div class="col-sm-12 col-md-6">
        <div class="TechForth">
          <a href="projet_tech.php"><img src="../img/projets/SmallLogo.png" alt="logo becode"></a>
          <div class="rubrique">
            <h4> <a href="projet_tech.php">Becode</a> </h4>
            <p>BeCode est une start-up à impact social
                élevé qui, inspirée par le modèle français
                de Simplon, vise à développer le talent de
                jeunes infra-qualifiés pour leur permettre
                de devenir les développeurs de demain.</p>
          </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-6">
        <div class="TechForth">
          <a href="projet_tech.php"><img src="../img/projets/SmallLogo.png" alt="logo becode"></a>
          <div class="rubrique">
            <h4> <a href="projet_tech.php">Becode</a> </h4>
            <p>BeCode est une start-up à impact social
                élevé qui, inspirée par le modèle français
                de Simplon, vise à développer le talent de
                jeunes infra-qualifiés pour leur permettre
                de devenir les développeurs de demain.</p>
          </div>
        </div>
    </div>
    <!-- fin projet-->


  </div>
</div>



<?php echo $this->render('./partials/footer.php',NULL,get_defined_vars(),0); ?>
