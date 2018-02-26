
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<ul class="nav nav-tabs">
  <li class="<?= $tabname == 'info' ? 'active' : '' ?>"  role="presentation"><a href="../../../projet/<?= $id ?>/info">Info</a></li>

  <li class="<?= $tabname == 'fr' ? 'active' : '' ?>" role="presentation"><a href="../../../projet/<?= $id ?>/trad/fr">FR</a></li>
  <li class="<?= $tabname == 'en' ? 'active' : '' ?>" role="presentation"><a href="../../../projet/<?= $id ?>/trad/en">EN</a></li>
  <li class="<?= $tabname == 'nl' ? 'active' : '' ?>" role="presentation"><a href="../../../projet/<?= $id ?>/trad/nl">NL</a></li>

  <li class="<?= $tabname == 'images' ? 'active' : '' ?>" role="presentation"><a href="../../../projet/<?= $id ?>/images/list">Images</a></li>
</ul>
