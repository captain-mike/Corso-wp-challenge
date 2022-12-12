<?php
require('connection.php');


$sql = "SELECT * FROM utenti";

$query = $db->prepare($sql);
if($query->execute()){

    $utenti = $query->fetchAll(PDO::FETCH_ASSOC);
    //PDO::FETCH_ASSOC specifica che i dati devono essere riportati in formato array associativo

    echo 'Ci sono ' . $query->rowCount() . ' utenti'; 

    foreach($utenti as $utente){
        echo "<div>$utente[id] $utente[nome] $utente[cognome]</div>";
    }

}else{
    print_r($query->errorInfo());
}