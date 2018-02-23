<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
 
           <?php foreach (($qaf?:[]) as $zap): ?>

              <span><?= $zap['quetions'] ?></span><br>
              <span><?= $zap['reponses'] ?></span>
              
           <?php endforeach; ?>

   

    <a href="<?= Base::instance()->alias('beer_list') ?>">view beer list</a>
    
  </body>
</html>
