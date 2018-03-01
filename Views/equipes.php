<?php require_once("../partials/header.php") ?>


<section>
     <div class="container">
      <div class="row header_Equipe">
          <h1>Nos équipes, <span class="marron">professionnelles & engagées</span> </h1>
          <h2>La fondation a été créée à l'initiative de <span class="marron">28 membres</span> d’une même famille</h2>

      </div>
    </div>
</section>


   </div> <!-- fin de div a garder-->


 <section >
  <div class="container" id="equipe">
      <div class="row">
        <div class="col-md-4"><a class="btn btn_success" href="#operationnel">Équipe opérationnelle</a></div>
        <div class="col-md-4"><a class="btn btn_success col-md-4" href="#conseil">Conseil administration</a></div>
        <div class="col-md-4"><a class="btn btn_success col-md-4" href="#membres">Les membres</a></div>


    </div>
 </section>

<!-- contenu titre fin -->

  <!-- header -->
<section class="axes operation">
  <div class="container" id="operationnel">
    <div class="row ">
        <h2>L'équipe opérationnelle</h2>
        <p>Ils partagent une volonté forte d’entreprendre, de créer et de partager
        </p>

      <repeat group="{{@equipes}}" value="{{@equipes}}">
        <div class="col-lg-6 col-md-6 col-sm-12 ">
            <div class="photoequipe">
            </div>
            <div class="EquipeTexte">
              <h3>Marc Dupont</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
      </repeat>
         <!-- <div class="col-lg-6 col-md-6 col-sm-12 ">
          <div class="photoequipe">
            <a href="#"><img src="" alt=""></a>
          </div>
          <div class="EquipeTexte">
            <h3>Marc Dupont</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
        </div> -->


      </div>


  </div>
</section>

<section class="conseil">
  <div class="container" id="conseil">
    <div class="row ">
        <h2>Le conseil d'administration</h2>
        <ul>
            <li>Composé de 2 représentants de chacune des 4 branches de la famille</li>
            <li>Expertises variées au service de la sélection des projets </li>
            <li>Garants du respect de la mission</li>
        </ul>


      <div class="col-lg-6 col-md-6 col-sm-12 ">
          <div class="photoequipe">
          </div>
          <div class="EquipeTexte">
            <h3>Marc Dupont</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 ">
          <div class="photoequipe">
            <a href="#"><img src="" alt=""></a>
          </div>
          <div class="EquipeTexte">
            <h3>Marc Dupont</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
      </div>

       <div class="col-lg-6 col-md-6 col-sm-12 ">
          <div class="photoequipe">
          </div>
          <div class="EquipeTexte">
            <h3>Marc Dupont</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 ">
          <div class="photoequipe">
            <a href="#"><img src="" alt=""></a>
          </div>
          <div class="EquipeTexte">
            <h3>Marc Dupont</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
      </div>



      <div id="flip1"><i class="fa fa-3x fa-arrow-circle-o-down" aria-hidden="true"></i>
        <i class="fa fa-3x fa-arrow-circle-o-up hidden" aria-hidden="true"></i></div>


          <div id="panel1">

                <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="photoequipe">
                          <a href="#"><img src="" alt=""></a>
                        </div>
                        <div class="EquipeTexte">
                          <h3>Marc Dupont</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          </p>
                        </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="photoequipe">
                          <a href="#"><img src="" alt=""></a>
                        </div>
                        <div class="EquipeTexte">
                          <h3>Marc Dupont</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          </p>
                        </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="photoequipe">
                          <a href="#"><img src="" alt=""></a>
                        </div>
                        <div class="EquipeTexte">
                          <h3>Marc Dupont</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          </p>
                        </div>

                        <br>
                </div>
            </div>

       </div>
  </div>

</section>

<section class="membres">
  <div class="container" id="membres">
    <div class="row ">
        <h2>Les membres</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>

      <div class="col-lg-6 col-md-6 col-sm-12 ">
          <div class="photoequipe">
          </div>
          <div class="EquipeTexte">
            <h3>Marc Dupont</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 ">
          <div class="photoequipe">
            <a href="#"><img src="" alt=""></a>
          </div>
          <div class="EquipeTexte">
            <h3>Marc Dupont</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
      </div>


       <div class="col-lg-6 col-md-6 col-sm-12 ">
          <div class="photoequipe">
          </div>
          <div class="EquipeTexte">
            <h3>Marc Dupont</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 ">
          <div class="photoequipe">
            <a href="#"><img src="" alt=""></a>
          </div>
          <div class="EquipeTexte">
            <h3>Marc Dupont</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
      </div>


      <div id="flip"><i class="fa fa-3x fa-arrow-circle-o-down" aria-hidden="true"></i></div>


          <div id="panel">

                <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="photoequipe">
                          <a href="#"><img src="" alt=""></a>
                        </div>
                        <div class="EquipeTexte">
                          <h3>Marc Dupont</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          </p>
                        </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="photoequipe">
                          <a href="#"><img src="" alt=""></a>
                        </div>
                        <div class="EquipeTexte">
                          <h3>Marc Dupont</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          </p>
                        </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="photoequipe">
                          <a href="#"><img src="" alt=""></a>
                        </div>
                        <div class="EquipeTexte">
                          <h3>Marc Dupont</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          </p>
                        </div>

                        <br>
                </div>


       </div>
  </div>

</section>







<?php include("../partials/footer.php") ?>
