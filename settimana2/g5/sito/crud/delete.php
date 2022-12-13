<?php
require_once('../inc/connection.php');

$sql = "DELETE FROM piatti WHERE id = $_GET[id] LIMIT 1";

$query = $db->prepare($sql);

if($query->execute()){
    header("Location:http://challenge.test/settimana2/g5/sito/gestione-menu.php");
    die;
}else{
    print_r($query->errorInfo());
}