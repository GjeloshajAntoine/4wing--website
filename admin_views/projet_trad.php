<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Projet</title>
  </head>
  <body>
  <include href="admin_views/project_tabs.php" /> 

   <div class="container">
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
  </body>
</html>
