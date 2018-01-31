<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Liste des traductions d'une page</title>
  </head>
  <body>
    <h1>traduction page: <?= $page_name ?></h1>
    <form class="" action="http://localhost/4wing-website/admin/page_trad_changes/<?= $pagename ?>/<?= $lg ?>" method="post">
      <?php foreach (($all_trad?:[]) as $trad): ?>
          <input type="text" value="<?= $trad['string_origin'] ?>" disabled>
          <input type="text" value="<?= $trad['string_trad'] ?>" name="<?= $trad['id'] ?>" >
          <br/>
      <?php endforeach; ?>
      <input type="submit">

    </form>
  </body>
</html>
