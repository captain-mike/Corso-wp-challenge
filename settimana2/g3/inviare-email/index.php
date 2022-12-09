<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="send.php" method="post">
        <input type="email" required name="email" placeholder="Email">
        <input type="text" required name="nome" placeholder="Nome">
        <input type="text" required name="oggetto" placeholder="Oggetto">
        <textarea required name="messaggio" cols="30" rows="10"></textarea>
        <button>Invia Email</button>
    </form>

    <?php
    if(!empty($_GET['msg'])){
        echo $_GET['msg'];
    }
    ?>

</body>
</html>