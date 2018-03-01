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
      
          
           <?php $ctr=0; foreach (($qaf?:[]) as $zap): $ctr++; ?> <br>

              <span><?= $ctr ?> <?= $zap['quetions'] ?></span><br>

              <span><?= $ctr ?> <?= $zap['reponses'] ?></span><br>
              
           <?php endforeach; ?>


    
  </body>
</html>
