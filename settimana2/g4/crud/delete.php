<?php

require('connection.php');

$sql = "DELETE FROM utenti WHERE id = 8 LIMIT 1";

$query = $db->prepare($sql);

if($query->execute()){
    echo "Utente eliminato!";
}else{
    print_r($query->errorInfo());
}