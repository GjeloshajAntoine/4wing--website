<?php echo $this->render('./partials/header.php',NULL,get_defined_vars(),0); ?>

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
            <?php $ctr=0; foreach (($paf?:[]) as $tap): $ctr++; ?>

                  <div class="tab-pane active" id="tab<?= $ctr ?>">
                    <input type="checkbox" id="question<?= $ctr ?>" name="q<?= $ctr ?>"  class="questions">
                    <div class="plus">+</div>
                    <label for="question<?= $ctr ?>" class="question">
                      <?= $tap['questions'].PHP_EOL ?>
                    </label>
                    <div class="answers">
                      <?= $tap['reponses'].PHP_EOL ?>
                    </div>
                  </div>
          <?php endforeach; ?>
           </div>





</section>




</div>
<?php echo $this->render('./partials/footer.php',NULL,get_defined_vars(),0); ?>
