<?php

if (!isset($_GET['id'])){
    header('Location:http://challenge.test/settimana2/g5/sito/gestione-menu.php?error=Non autorizzato');
    exit;
} 
if (empty($_POST['gusto']) || empty($_POST['prezzo'])){
    header("Location:http://challenge.test/settimana2/g5/sito/modifica-pizza.php?id=$_GET[id]&error=Gusto e prezzo sono obbligatori");
    exit;
} 

require_once('../inc/connection.php');
require_once('../inc/ingredienti.php');

$sql = "UPDATE piatti SET gusto=:gusto, prezzo=:prezzo, ingredienti=:ingredienti WHERE id=$_GET[id]";

$query = $db->prepare($sql);

$array_ingredienti = [];
foreach($ingredienti as $ing){
    if(isset($_POST["ingrediente-$ing"])){
        $array_ingredienti[] = $ing;
    }
}

$stringa_ingredienti = implode(', ',$array_ingredienti);

$query->bindParam(':gusto',$_POST['gusto']);
$query->bindParam(':prezzo',$_POST['prezzo']);
$query->bindParam(':ingredienti',$stringa_ingredienti);

if($query->execute()){
    header("Location:http://challenge.test/settimana2/g5/sito/gestione-menu.php?success=Il piatto $_POST[gusto] è stato modificato");
}else{
    print_r($query->errorInfo());
}
