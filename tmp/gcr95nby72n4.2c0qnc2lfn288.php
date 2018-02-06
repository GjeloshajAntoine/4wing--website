<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php foreach (($all_citations?:[]) as $citation): ?>
        <a href="<?= $citation['id'] ?>"> <?= $citation['citation'] ?> </a>
        <br/>
    <?php endforeach; ?>
  </body>
</html>
