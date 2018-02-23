<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      <?= $title.PHP_EOL ?>
      <?= $message.PHP_EOL ?>

      <br>

      <br>

      <br>
      
 
           <?php foreach (($qaf?:[]) as $zap): ?>

              <span><?= $zap['quetions'] ?></span><br><br>
              <span><?= $zap['reponses'] ?></span>
              
           <?php endforeach; ?>


    
  </body>
</html>
