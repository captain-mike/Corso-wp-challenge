<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php if(!empty($_GET['nome']) && !empty($_GET['cognome'])): ?>
        <h1><?=$_GET['nome'];?> <?=$_GET['cognome'];?></h1>   
    <?php endif; ?>

    <?php if(!empty($_POST['nome']) && !empty($_POST['cognome'])): ?>
        <h1><?=$_POST['nome'];?> <?=$_POST['cognome'];?></h1>   
    <?php endif; ?>

    <?php
    
    if(isset($_GET['nome'])){//verifica che la variabile(o la chiave dell'array) esista
        echo 'nome inserito<br>';
    }else{
        echo 'nome non inserito<br>';
    }

    //empty restituisce true in caso di '', 0, null, false
    if(empty($_GET['nome'])){//verifica che la variabile esista e che abbia un valore
        echo 'nome non valorizzato o non inserito<br>';
    }else{
        echo "il nome è $_GET[nome]<br>";
    }

    ?>


</body>
</html>