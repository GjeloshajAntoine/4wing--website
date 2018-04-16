<include href="./partials/header.php" />

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
            <repeat group="{{ @paf }}" value="{{ @tap }}" counter="{{ @ctr }}">

                  <div class="tab-pane active" id="tab{{@ctr}}">
                    <input type="checkbox" id="question{{@ctr}}" name="q{{@ctr}}"  class="questions">
                    <div class="plus">+</div>
                    <label for="question{{@ctr}}" class="question">
                      {{ @tap.questions }}
                    </label>
                    <div class="answers">
                      {{ @tap.reponses }}
                    </div>
                  </div>
          </repeat>
           </div>





</section>




</div>
<include href="./partials/footer.php" />
