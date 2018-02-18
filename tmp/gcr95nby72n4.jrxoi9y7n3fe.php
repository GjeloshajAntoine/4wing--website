<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Liste des projets</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  </head>
  <body class="container">
  <h2>Projets</h2>

    <div class="list-group">
      <?php foreach (($all_projects?:[]) as $project): ?>
          <a class="list-group-item" href="/4wing-website/admin/projet/<?= $project['id'] ?>/trad/fr"> <?= $project['title'] ?> </a>
      <?php endforeach; ?>
    </div>  
  </body>
</html>
