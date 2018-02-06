<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>traduction page: <?= $pagename ?></h1
    <!-- onglets -->
    <a href="/4wing-website/admin/tradpage/<?= $pagename ?>/fr">fr</a>
    <a href="/4wing-website/admin/tradpage/<?= $pagename ?>/nl">nl</a>
    <a href="/4wing-website/admin/tradpage/<?= $pagename ?>/en">en</a>

    <form class="" action="http://localhost/4wing-website/admin/projet/<?= $id ?>/editdata/<?= $lg ?>" method="post">
      <?php foreach (($all_trad?:[]) as $trad): ?>
          <input type="text" value="<?= $trad['string_origin'] ?>" disabled>
          <input type="text" value="<?= $trad['string_trad'] ?>" name="<?= $trad['id'] ?>" >
          <br/>
      <?php endforeach; ?>
      <input type="submit">

    </form>
  </body>
</html>
