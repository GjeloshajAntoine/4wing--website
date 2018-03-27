<ol class="breadcrumb">
  <li><a href="<?= $subrootpath ?>/admin">Admin</a></li>
  <?php foreach (($breadcrumb?:[]) as $ikey=>$idiv): ?>
    <li><a href="<?= $subrootpath ?><?= $idiv ?>"><?= $ikey ?></a></li>
  <?php endforeach; ?>
    <?php if ($active): ?>
       <li class="active"> <?= $active ?></li>  
    <?php endif; ?>
</ol>
