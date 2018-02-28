<?php require_once("../partials/header.php") ?>

      <div class="container formulaireSelection">
         <div class="row formulaireMain">
           <div class="col-md-9 formulaireLeft">
              <h3>Veuillez soumettre votre <span class="marron">projet</span> </h3>
              <p>Nous vous répondrons dans les meilleurs délais.</p>
              <form role="form" class=""enctype="multipart/form-data" action="?page=formulaireEnvoi" method="post" >
                <div class="form-group">
                  <label>Nom :
                    <input type="text" class="form-control" id="name" name="name" placeholder="Ex: Dupont" required>
                  </label>
                </div>
                <br/>
                <br/>
                <div class="form-group">
                  <label>Prénom :
                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Ex: Paul" required>
                  </label>
                </div>
                <br/>
                <div class="form-group">
                  <label>Nom de l'association :
                    <input type="text" class="form-control" id="association" name="association" placeholder="Nom de l'association" required>
                  </label>
                </div>
                <br/>
                <div class="form-group">
                  <label>Votre adresse email :
                    <input type="email" class="form-control" id="email" name="email" placeholder="Ex: example@gmail.com" required>
                  </label>
                </div>
                <br/>
                <div class="form-group">
                  <label>Numéro de téléphone :
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="0XXX XXX XXX" required>
                  </label>
                </div>
                <br/>
                <div class="form-group">
                  <label>Périmètre de l'action :
                    <select name="choix">
                      <option value="choix1">+5km</option>
                      <option value="choix2">+10km</option>
                      <option value="choix3">+20km</option>
                    </select>
                  </label>
                </div>

                <div class="form-group2">
                  <label>Description de votre projet :
                    <textarea class="form-control" type="textarea" id="message" maxlength="500" rows="7" cols="110">
                    </textarea>
                  </label>
                </div>

                <div class="form-group2">
                  <label>En quoi le projet participe à créer un cercle vertueux d’inclusion sociale?
                    <textarea class="form-control" type="textarea" id="message" maxlength="500" rows="7" cols="110">
                    </textarea>
                  </label>
                </div>

                <div class="form-group2">
                  <label>Comment la fondation pourrait-elle vous aider?
                    <textarea class="form-control" type="textarea" id="message" maxlength="500" rows="7" cols="110">
                    </textarea>
                  </label>
                </div>
                <div class="fichier">
                    <div class="form-group">
                      <label class="fichierok">Votre Fichier :
                        <div class="fichierDiv">
                          <input type="hidden" name="MAX_FILE_SIZE" value="4000000" />
                          <input type="file" name="fileToUpload" id="fileToUpload">
                        </div>
                      </label>
                    </div>
                </div>
                <input action ="?page=formulaireEnvoi" type="submit" id="submit" name="submit" class="btn btn_success2 Send" value="Envoyer"/>
              </form>
            </div>
            <div class="col-md-3 formulaireRight">
              <h2>Fondation d'utilité publique </h2>
                <p>
                    RPM Bruxelles division francophone, située à
                    Chaussée de Vleurgat 282a bte 1,<br/>
                    1050 Bruxelles – Belgique
                </p>
                <br>
                <a href="mailto:info@4wings.org">info@4wings.org</a>
                <img src="./img/libelulle_transparente.png" alt="">
            </div>
          </div>
      </div>





















    <?php include("../partials/footer.php") ?>
