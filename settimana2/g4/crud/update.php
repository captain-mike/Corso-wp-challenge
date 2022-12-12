<?php
require('connection.php');

$sql = "UPDATE utenti SET nome=:nome, cognome=:cognome WHERE id = 5";

$nome = 'Francesco';
$cognome = 'Gioscia';

$query = $db->prepare($sql);

$query->bindParam(':nome', $nome);
$query->bindParam(':cognome', $cognome);

if($query->execute()){
    echo 'Dati aggiornati';
}else{
    print_r($db->errorInfo());
}