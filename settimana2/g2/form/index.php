<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Home</h1>
    
    <form action="risultato.php?ciao=ciao" method="POST">
        <input type="text" placeholder="nome" name="nome">
        <input type="text" placeholder="Cognome" name="cognome">
        <button>Invia</button>
    </form>


    <a href="risultato.php?nome=Mario&cognome=Rossi">
        Vai alla pagina di Mario Rossi
    </a>
</body>
</html>