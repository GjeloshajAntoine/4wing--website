<?php echo $this->render('./partials/header.php',NULL,get_defined_vars(),0); ?>


  <section>
    <div class="container">
      <div class="row">
            <div class="">
                  <h1><?= $titre ?></h1>
        </div>
    </div>
  </section>



   </div>



<section class="axes">


         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3564.807466527299!2d4.364990790081717!3d50.818205418127654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c4f1d5335325%3A0xf802aed73c373f7e!2sChauss%C3%A9e+de+Vleurgat+282%2C+1050+Ixelles!5e0!3m2!1sen!2sbe!4v1516973992071" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>


</section>

    <div class="container formulaire">
         <div class="row">
           <div class="col-md-9">

              <h3><?= $sous_titre_formulaire ?> </h3>
              <?php if ($sent): ?>
                <div class="alert alert-success" role="alert">Votre message a bien été envoyé</div>
              <?php endif; ?>
              <form role="form" method="POST" action="<?= $subrootpath ?>/<?= $PARAMS['lg'] ?>/contact" class="" >

                    <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nom" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Numéro de GSM" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet" required>
                  </div>
                            <div class="form-group">
                            <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                                <span class="help-block"><p id="characterLeft" class="help-block ">Vous avez atteind la limite</p></span>
                            </div>

                <button type="submit" id="submit" name="submit" class="btn btn_success2">ENVOYER LE FORMULAIRE</button>
               </form>
        </div>
         <div class="col-md-3">
               <h2><?= $titre_adresse ?> </h2>
               <p>
                  <?= $adresse.PHP_EOL ?>
                </p>

                <br>

                <a href="mailto:info@4wings.org">info@4wings.org</a>
           </div>
    </div>
  </div>




  <?php echo $this->render('./partials/footer.php',NULL,get_defined_vars(),0); ?>
