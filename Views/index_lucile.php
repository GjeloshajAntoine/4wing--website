<?php require_once("../partials/header.php") ?>


  <section> 
    <div class="container">
      <div class="row">
            <div class="intro col-sm-9">
              <h1>Lutter contre la précarité en <span class="marron">Belgique</span></h1>
              <p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ipsam laudantium, accusantium in aliquam nihil ullam perferendis tempora doloribus atque sequi debitis quasi, aperiam minima quaerat accusamus recusandae deserunt! Nam.</p>
            </div>
              <div class="col-sm-3 libellule"></div>
        </div> 
    </div>
  </section>


  
  <section >
    <div class="axes contenu">
      <div class="container">
        <div class="row">
          <div class="axe logement col-sm">
            <a href="logement.php">
              <div class="imgAxe img-fluid"><img src="../img/logement.png" alt="">
                <h2>Logement</h2>
                <p>Une priorité pour l'intégration</p>
              </div>
            </a>
          </div>
          <div class="axe education col-sm">
            <a href="tech_education.php">
            <div class="imgAxe img-fluid"><img src="../img/education.png" alt="">
              <h2>Tech-Éducation</h2>
              <p>Programmer le cercle vertueux &nbsp; de l'inclusion</p>
            </div>
          </a>
          </div>
          <div class="axe sante col-sm">
            <a href="sante_nutrition.php">
            <div class="imgAxe img-fluid"><img src="../img/sante.png" alt="">
              <h2>Santé et</h2>
              <h3>nutrition</h3>
              <p>L'alimentation,<br> la clé pour la santé de tous</p>
            </div>
          </a>
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
      <?php include("../js/carousel/carousel_4wings.php") ?>
  </section>

	
</div>






<?php include("../partials/footer.php") ?>
