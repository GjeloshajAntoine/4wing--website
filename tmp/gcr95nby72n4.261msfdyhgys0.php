<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  </head>
  <body>
    <input id="file" type="file" value="envoyer image" />
    <input type="hidden" id="ProjectId" value="<?= project.id ?>">
    <progress id="progress" value="0" max="0"></progress>

    <div class="image-list">

    </div>

    <script type="text/javascript">
    //js updoad with loading
    var input = document.getElementById('file');
    var progress=document.getElementById('progress');

    input.addEventListener('change',function () {
      var xhr=new XMLHttpRequest();
       xhr.open('POST', 'admin/projet/2/image/add');

       xhr.upload.addEventListener("progress",function (event) {
         event.loaded;
         event.total;
         console.log(event.loaded);
         progress.value=event.loaded;
         progress.total=event.total;
       });
       xhr.addEventListener('load',function () {
         console.log('done');
       });

       var form = new FormData();
       form.append('file',input.files[0]);
       xhr.send(form);
    })
    </script>
  </body>
</html>
