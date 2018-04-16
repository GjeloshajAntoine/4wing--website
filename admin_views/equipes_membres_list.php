<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Liste des membres</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script
    			  src="http://code.jquery.com/jquery-3.3.1.min.js"
    			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    			  crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="container">
      <h2>Membres
        <a type="button" href="new" class="btn btn-success">Nouveau Membre</a>

      </h2>
      <include href="admin_views/breadcrumb.php"/>
      <repeat group="{{ @membreslist }}" value="{{ @coffee }}" counter="{{ @ctr }}">
        <form class="form_membre" action="index.html" method="post">
          <div class="media">
          <div class="media-left">
            <a href="#">
              <img id="{{@coffee.id}}img" style="width:64px;height:64px;" class="media-object" {{@coffee.img?'src':''}}="{{@subrootpath}}/membres_images/{{@coffee.img}}"  src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNjI4MTQxZmIzMSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE2MjgxNDFmYjMxIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxNC41IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg=="  alt="...">
            </a>
            <input type="file" id="img-{{@coffee.id}}"  name="img" value="">
            <input type="button" class="img-send" data-id="{{@coffee.id}}" name="" value="enregistrer">
          </div>
          <div class="media-body">
            <h4 class="media-heading">Media heading</h4>
            <!-- <input href="{{@subrootpath}}/admin/faq/{{ trim(@coffee.id) }}" class="{{ @ctr%2?'odd':'even' }} list-group-item">{{ trim(@coffee.nom) }}</a> -->
            <input type="text" name="nom" class="form-control" value="{{ trim(@coffee.nom) }}">
            <label for="operationnel">operationnel</label>
            <input type="checkbox" name="equipes[]" id="operationnel" value="operationnel" {{in_array('operationnel',@coffee.equipes) ? 'checked': ''}}>
            <label for="conseil">conseil</label>
            <input type="checkbox" name="equipes[]" id="conseil" value="conseil" {{in_array('conseil',@coffee.equipes) ? 'checked': ''}}>
            <label for="membres">membres</label>
            <input type="checkbox" name="equipes[]" id="membres" value="membres" {{in_array('membres',@coffee.equipes) ? 'checked': ''}}>
            <input type="hidden" name="id" value="{{@coffee.id}}">
            <input type="submit" name="" value="enregistrer ">
          </div>
        </div>
        </form>
      </repeat>

    </div>

    <div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button class="img_membre" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            <form class="form_new_membre" action="index.html" method="post">
              <input type="file" name="" value="">
              <input type="text" name="nom" class="form-control" value="">
              <label for="operationnel">operationnel</label>
              <input type="checkbox" name="equipes[]" id="operationnel" value="operationnel">
              <label for="conseil">conseil</label>
              <input type="checkbox" name="equipes[]" id="conseil" value="conseil">
              <label for="membres">membres</label>
              <input type="checkbox" name="equipes[]" id="membres" value="membres">
              <input type="submit" name="" value="enregistrer ">

            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <h3 id="message"></h3>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">

    $(".form_membre").submit(function( event ){
        event.preventDefault();
        console.log($(this));
        $.post("{{@subrootpath}}/admin/equipes/membres/data",$(this).serialize())
        .then((data)=>{
          console.log(data);
          modalert("Changements effectués")
        })
    });
    $(".img-send").on("click",function () {
      console.log($(this).data("id"));
      var id =$(this).data("id");
      var input = document.getElementById('img-'+$(this).data("id"));
      if (input.files.length == 1) {
        var xhr=new XMLHttpRequest();
        xhr.open('POST', '{{@subrootpath}}/admin/equipes/membres/image/add');
        xhr.addEventListener('load',function () {
          console.log('done');
          var data=JSON.parse(xhr.responseText)
          console.log(data.imgName)
          ("#"+id+"img").src="{{@subrootpath}}/membres_images/"+data.imgName

        });
        var form = new FormData();
        form.append('img',input.files[0]);
        form.append('id',id);

        xhr.send(form);

      }
    })

    function modalert(message) {
      $("#modalert").modal("show");
      $("#message")[0].innerHTML=message;
    }
    </script>
  </body>
</html>
