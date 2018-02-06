<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Liste des projets</title>
  </head>
  <body>
    <?php foreach (($all_projects?:[]) as $project): ?>
        <a href="/admin/projet/<?= $project['id'] ?>/fr"> <?= $project['title'] ?> </a>
        <br/>
    <?php endforeach; ?>
  </body>
</html>
