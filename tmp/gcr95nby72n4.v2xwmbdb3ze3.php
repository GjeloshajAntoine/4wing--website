<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<a href="#">   <?= $name ?>   </a>




    <!-- <?php $ctr=0; foreach (($coffee?:[]) as $coffee): $ctr++; ?>
        <p class="<?= $ctr%2?'odd':'even' ?>"><?= trim($coffee) ?></p>
    <?php endforeach; ?> -->
    
    <?php $ctr=0; foreach (($coffee?:[]) as $coffee): $ctr++; ?>
        <p class="<?= $ctr%2?'odd':'even' ?>"><?= trim($coffee) ?></p>
    <?php endforeach; ?> 

    <div>
        <p><span><b>coffee</b></span></p>
        <p>
            <span>arabica</span>
            <span>barako</span>
            <span>liberica</span>
            <span>kopiluwak</span>
        <p>
    </div>
    <div>
        <p><span><b>tea</b></span></p>
        <p>
            <span>darjeeling</span>
            <span>pekoe</span>
            <span>samovar</span>
        </p>
    </div>

   

</body>
</html>