<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    


    
    <?php $ctr=0; foreach (($pageliste?:[]) as $coffee): $ctr++; ?>
        <a href="tradpage/<?= trim($coffee['page_name']) ?>/fr" class="<?= $ctr%2?'odd':'even' ?>"><?= trim($coffee['page_name']) ?></a>
    <?php endforeach; ?> 

  
   

</body>
</html>
