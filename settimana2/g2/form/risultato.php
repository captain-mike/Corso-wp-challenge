<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Risultato</h1>

    <?php

    $_GET; //array superglobale get
    $_POST; //array superglobale post


    echo '<pre>';
    var_dump($_GET);
    var_dump($_POST);
    echo '</pre>';

    ?>

    <?php if(!empty($_GET['nome']) && $_GET['cognome']): ?>
        <h3>Benvenuto <?=$_GET['nome']?> <?=$_GET['cognome']?></h3>
    <?php endif; ?>
    
    <?php if(!empty($_POST['nome']) && $_POST['cognome']): ?>
        <h3>Benvenuto <?=$_POST['nome']?> <?=$_POST['cognome']?></h3>
    <?php endif; ?>
</body>
</html>