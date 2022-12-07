<?php $anni = 30 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>
    <!--Hai <?php echo $anni?> Anni-->
    Hai <?=$anni?> Anni
</div>
<?php if ($anni >= 18 && $anni <= 110): ?>

    <h3>Sei maggiorenne!!</h3>
    
<?php elseif($anni > 110): ?>

    <h3>Sei antico!!</h3>

<?php else: ?>

    <b>Sei minorenne!!</b>

<?php endif ?>
    
</body>
</html>