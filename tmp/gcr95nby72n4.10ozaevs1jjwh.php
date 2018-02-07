<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Liste des pages</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      <h2>Pages</h2>
      <div class="list-group">
        <?php $ctr=0; foreach (($pageliste?:[]) as $coffee): $ctr++; ?>
          <a href="tradpage/<?= trim($coffee['page_name']) ?>/fr" class="<?= $ctr%2?'odd':'even' ?> list-group-item"><?= trim($coffee['page_name']) ?></a>
        <?php endforeach; ?>
      </div>
    </div>  
  </body>
</html>