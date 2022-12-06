<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$titolo = 'Home';
$anni = 180;

?>

    <h1><?php echo $titolo; ?></h1>

    <?php 
        if($anni >= 18){

            echo 'Sei Maggiorenne';
            
        }else{
            
            echo 'Sei Minorenne';
            header('Location:https://www.peppapig.com/it-it');

        }
    ?>
    
</body>
</html>