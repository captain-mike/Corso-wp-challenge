<?php
//controllo se i dati sono stati inviati
if(!empty($_POST['gusto']) && !empty($_POST['prezzo'])){
    $gusto = $_POST['gusto'];
    $prezzo = $_POST['prezzo'];
}else{
    //se non ci sono rimando indietro l'utente
    header('Location:http://challenge.test/settimana2/g5/sito/crea-pizza.php');
    die;
}

require_once('../inc/connection.php');
require_once('../inc/ingredienti.php');

$sql = "INSERT INTO piatti(gusto, prezzo, ingredienti) VALUES(:gusto, :prezzo, :ingredienti)";

$query = $db->prepare($sql);


$query->bindParam(':gusto',$gusto);
$query->bindParam(':prezzo',$prezzo,PDO::PARAM_INT);
$query->bindParam(':ingredienti',$stringa_ingredienti);

$stringa_ingredienti = '';
foreach($_POST as $chiave => $dato){
    if(stripos($chiave,'ingrediente') !== false){//se la chiave è un ingrediente

        if($stringa_ingredienti == ''){
            $stringa_ingredienti .= $dato;
        }else{
            $stringa_ingredienti .= ', ' . $dato;
        }
    }
}


if($query->execute()){
    header('Location:http://challenge.test/settimana2/g5/sito/gestione-menu.php');
}else{
    print_r($query->errorInfo());
}

/**
 * versione contratta
  $esito = $query->execute([
     ':gusto'=> $gusto,
     ':prezzo'=> $prezzo,
     ':ingredienti'=> $stringa_ingredienti
    ]);
*/
