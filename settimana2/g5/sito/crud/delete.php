<?php
require_once('../inc/connection.php');

if (!isset($_GET['id'])){
    header('Location:http://challenge.test/settimana2/g5/sito/gestione-menu.php?error=Non autorizzato');
    exit;
}

$sql = "DELETE FROM piatti WHERE id = $_GET[id] LIMIT 1";

$query = $db->prepare($sql);

if($query->execute()){
    header("Location:http://challenge.test/settimana2/g5/sito/gestione-menu.php?success=Piatto eliminato");
    die;
}else{
    print_r($query->errorInfo());
}