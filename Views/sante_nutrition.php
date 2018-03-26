<include href="./partials/header.php" />

<div class="container" id="sante">
    <div class="row header_bleu2" >
      <div class="TechEducation col-md-8">
        <span class="icon-leaf"></span><h1>{{@titre}}</h1>
        <span>{{@sous_titre_petit}}</span>
      </div>
       <div class="col-md-4 col-sm-6 col-12 ImageHeaderNutrition">
          <img src="../img/img_header_sante.png" alt="ImageLogement">
      </div>
    </div>

 <!-- Row -->
    <div class="row">
	  	<div class="col-sm-9">
		    <div class="TechFirst">
		      <h2>{{@sous_titre_grand}}</h2>
		      <p>{{@paragraphe_1}}</p>
		    </div>

        <div class="TechSecond LogementSecond">
          <p> <span class="lettrine1">"</span> {{@citation.citation}}<span class="lettrine2"> " </span>
            </p>
          <h5>Arnold Dupont <br/> de Becode</h5>
            <div class="homme2">
              <img src="../img/homme2.png" alt="homme">
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


<div class="TechThird santeBleu">
  <div class="container">
         <div class="row " >
          <div class="col-sm-1"> <span class="icon-leaf"> </span></div>
          <div class="TechEducation Santebas col-sm-11 ">
            <h3>Les projets Santé par la nutrition</h3>
          </div>
        </div>
  </div>
</div>


<div class="container" id="TechForth">
  <div class="row">
    <!-- projet-->
     <div class="col-sm-12 col-md-6">
        <div class="TechForth ">
          <a href="projet_sante.php"><img src="../img/projets/vignette-sante.jpg" alt="logo border_bleu2"></a>
          <div class="rubrique">
            <h4> <a href="projet_sante.php">Titre nutrition</a> </h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam tempora pariatur, doloribus fugiat totam earum ad expedita officiis consequuntur distinctio reiciendis ab quas, deleniti nostrum deserunt libero aspernatur ipsum reprehenderit.</p>
          </div>
        </div>
    </div>

    <!-- fin projet-->


  </div>
</div>



<include href="./partials/footer.php" />
