


<section> 
  <br>
    <div class="container">

      <div class="row">

       <div class="introHome col-md-12">
                <h1>F.A<span class="marron">.Q.</span></h1><p> <?= $title ?> <?= $message ?> </p><br>
          </div>
         </div>       
        </div>

              <div class class="col-md-10">

                <div class="tab-content panels-faq">

                                      <!-- FAQ BOUCLE -->
            <?php $ctr=0; foreach (($paf?:[]) as $tap): $ctr++; ?>

                  <div class="tab-pane active" id="tab1">
                    <div class="panel-group" id="help-accordion-1">
                      <div class="panel panel-default panel-help">
                        <a href="#opret-produkt" data-toggle="collapse" data-parent="#help-accordion-1">
                          <div class="panel-heading">

                              <h3>Question 

                                      <!-- InjectMysql Q1 -->
                                 
                                      <span><?= $ctr ?> : <?= $tap['questions'] ?></span>
                                  
                              </h3> <br>
                                  
                          </div>

                        </a>
                        <div id="opret-produkt" class="collapse in">
                          <div class="panel-body">

                                        <!-- InjectMysql R1 -->
                          
                                        <span>Reponses <?= $ctr ?> : <?= $tap['reponses'] ?></span><br>

                              <br>
                              <br>
                              <br>
                         
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            
                  <?php endforeach; ?>
         
</section>

</div>


