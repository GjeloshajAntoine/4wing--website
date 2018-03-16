<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Administration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>
  <body>

    <div class="container">
      <div class="list-group">
        <h2 style="display:inline-block;">Administration</h2>
        <a type="button" href="{{@subrootpath}}/admin/user/profil" class="btn btn-primary">Votre compte</a>

        <a href="admin/list_page_trad" class="list-group-item">Pages</a>
        <a href="admin/citation/list" class="list-group-item">citations</a>
        <a href="admin/projet/list" class="list-group-item">projet</a>
        <check if="{{ @is_admin }}">
          <true>
          <a href="admin/equipe/list" class="list-group-item">equipes</a>
          <a href="admin/user/list" class="list-group-item">Utilisateurs</a>
          </true>
          <false>
          </false>
        </check>
      </div>
    </div>

  </body>
</html>
