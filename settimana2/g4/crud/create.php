<?php

require('connection.php');

//CREATE => CREO TABELLE
//INSERT INTO => INSERISCO NUOVO ENTRY IN UNA TABELLA ESISTENTE

//definisco l'istruzione SQL
$sql = "INSERT INTO utenti(nome, cognome, password) VALUES(:nome,:cognome,:password)";

$nome = 'Mario';
$cognome = 'Rossi';
$password = 'password';

//preparo l'istruzione per l'esecuzione, e creo un oggetto dichiarazione
$query = $db->prepare($sql);

$query->bindParam(':nome', $nome);
$query->bindParam(':cognome', $cognome);
$query->bindParam(':password', $password);


//eseguo l'istruzione
if($query->execute()){
    echo 'Utente creato!';
}else{
    print_r($query->errorInfo());
}