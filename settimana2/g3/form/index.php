<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Home</h1>

    <h2>Form get</h2>
    <form action="risultato.php" method="GET">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="cognome" placeholder="Cognome">
        <button>Invia</button>
    </form>
    
    <h2>Form post</h2>
    <form action="risultato.php" method="POST">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="cognome" placeholder="Cognome">
        <button>Invia</button>
    </form>
    
    <!--
        in mancanza di action il form invia alla pagina che sta inviando i dati
    -->
    <h2>Form post con invio a questa pagina</h2>

    <?php if(!empty($_POST['email']) && !empty($_POST['messaggio'])):?>

        <p>Messaggio inviato!!</p>

    <?php else: ?>

        <form method="POST">
            <input type="email" name="email" placeholder="Email">
            <textarea name="messaggio" cols="30" rows="10"></textarea>
            <button>Invia</button>
        </form>
        
    <?php endif; ?>


    
</body>
</html>