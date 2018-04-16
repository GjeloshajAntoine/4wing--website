<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Partenaires</title>
  </head>
  <body>
    <div class="container">
      <h2>Membres</h2>
      <include href="admin_views/breadcrumb.php"/>
      <repeat group="{{ @partenaireslist }}" value="{{ @part }}" counter="{{ @ctr }}">

      </repeat>
    </div>
    <script type="text/javascript">
    $(".img-send").on("click",function () {
      console.log($(this).data("id"));
      var id = $(this).data("id");
      var input = document.getElementById('img-'+$(this).data("id"));
      if (input.files.length == 1) {
        var xhr=new XMLHttpRequest();
        xhr.open('POST', '{{@subrootpath}}/admin/partenaires/image/add');
        xhr.addEventListener('load',function () {
          console.log('done');
          xhr.responseText.fileName;
          ("#").src= fileName
        });
        var form = new FormData();
        form.append('img',input.files[0]);
        xhr.send(form);

      }
    })
    </script>
  </body>
</html>
