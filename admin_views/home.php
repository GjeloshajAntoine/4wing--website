<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Administration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  </head>
  <body>

    <div class="container">
      <div class="list-group">
        <h4>Administration</h4>
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
