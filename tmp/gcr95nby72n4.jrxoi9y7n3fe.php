<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Liste des projets</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body class="container">
  <h2>
    Projets
    <a type="button" href="new" class="btn btn-success">Nouveau projet</a>
  </h2>
  <?php echo $this->render('admin_views/breadcrumb.php',NULL,get_defined_vars(),0); ?>

    <div class="list-group">
      <?php foreach (($all_projects?:[]) as $project): ?>
          <a class="list-group-item" href="/4wing-website/admin/projet/<?= $project['id'] ?>/trad/fr"> <?= $project['title'] ?> </a>
      <?php endforeach; ?>
    </div>
  </body>
</html>
