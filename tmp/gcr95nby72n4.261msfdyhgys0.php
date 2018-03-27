<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
      <h1>traduction page: <?= $project['title'] ?></h1>
      <?php echo $this->render('admin_views/breadcrumb.php',NULL,get_defined_vars(),0); ?>
      <?php echo $this->render('admin_views/project_tabs.php',NULL,['tabname'=>'images']+get_defined_vars(),0); ?>

      <form class="" action="<?= $subrootpath ?>/admin/projet/<?= $id ?>/image/add" method="post" enctype="multipart/form-data">
        <input id="file" type="file" name="file" value="envoyer image" />
        <input type="hidden" id="ProjectId" value="<?= project.id ?>">
        <input type="submit" name="" value="ajouter">
      </form>

      <ul class="list-group">
        <?php foreach (($all_images?:[]) as $image): ?>
          <li class="list-group-item">
            <img width="50" height="50" src="<?= $subrootpath ?>/projects_images/<?= $image['image_file_name'] ?>" alt="">
            <!-- <button style="float:right;" type="button" class="btn btn-danger">supprimer</button> -->
            <a style="float:right;" class="btn btn-danger" href="<?= $subrootpath ?>/admin/projet/<?= $project['id'] ?>/image/<?= $image['id'] ?>/delete">supprimer</a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </body>
</html>
