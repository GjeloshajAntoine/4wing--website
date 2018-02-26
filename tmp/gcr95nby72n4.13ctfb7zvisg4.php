<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Projet</title>
  </head>
  <body>
  <?php echo $this->render('admin_views/project_tabs.php',NULL,['tabname'=>$lg]+get_defined_vars(),0); ?> 

   <div class="container">
    <form class="" action="http://localhost/4wing-website/admin/projet/<?= $id ?>/trad/<?= $lg ?>/editdata" method="post">
      <?php foreach (($all_trad?:[]) as $trad): ?>
         <!-- <input type="text" value="<?= $trad['field'] ?>" disabled> -->
          <label for="<?= $trad['field'] ?>"><?= $trad['field'] ?></label>
          <textarea id=<?= $trad['field'] ?> class="form-control" rows="3" type="text" value="<?= $trad['trad'] ?>" name="<?= $trad['id'] ?>" ></textarea>
          <br/>
      <?php endforeach; ?>
      <input type="submit">
    </form>
    </div>
  </body>
</html>
