<?php require_once("../partials/header.php") ?>


<section> 
  <br>
    <div class="container">

      <div class="row">

       <div class="introHome col-md-12">
                <h1>F.A<span class="marron">.Q.</span></h1><p>Les questions les plus fréquement posées.</p>
                
              </div>
        </div>
               
        </div>
  
          <div class="tab-content panels-faq">

                  <div class="tab-pane active" id="tab1">
                    <input type="checkbox" id="question1" name="q"  class="questions">
                    <div class="plus">+</div>
                    <label for="question1" class="question">
                      This is the question that will be asked?
                    </label>
                    <div class="answers">
                      What if the answer is really long and wraps the whole page and you never want to finish it but you have to because its the answer!
                    </div>
                  </div>

                  <div class="tab-pane active" id="tab2">
                    <input type="checkbox" id="question2" name="q2"  class="questions">
                    <div class="plus">+</div>
                    <label for="question2" class="question">
                      Ceci est une deuxieme question
                    </label>
                    <div class="answers">
                      Et ceci est le texte de la deuxième réponse
                    </div>
                  </div>

           </div>    




            
</section>




</div>

<?php include("../partials/footer.php") ?>
