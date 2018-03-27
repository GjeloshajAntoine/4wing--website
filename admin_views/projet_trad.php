<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Projet</title>
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.js"></script>

  </head>
  <body>

   <div class="container">
     <h1>traduction page: {{@project.title}}</h1>
     <include href="admin_views/breadcrumb.php"/>
     <include href="admin_views/project_tabs.php" with="tabname=@lg" />

    <form class="" action="http://localhost/4wing-website/admin/projet/{{@id}}/trad/{{@lg}}/editdata" method="post">
      <repeat group="{{ @all_trad }}" value="{{ @trad }}">
         <!-- <input type="text" value="{{ @trad.field }}" disabled> -->
          <label for="{{ @trad.field }}">{{ @trad.field }}</label>
          <textarea id={{@trad.field}} class="form-control" rows="3" type="text" value="{{ @trad.trad}}" name="{{ @trad.id }}" ></textarea>
          <br/>
      </repeat>
      <input type="submit">
    </form>
    </div>
    <script>
      $('textarea').summernote({
        toolbar: [
                  // [groupName, [list of button]]
                  ['style', ['bold', 'italic', 'underline', 'clear']],
                  ['font', ['strikethrough', 'superscript', 'subscript']],
                  ['fontsize', ['fontsize']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['height', ['height']]
                ]
      });
    </script>

  </body>
</html>
