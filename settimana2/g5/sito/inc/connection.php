<?php

try{

    $hostname = 'localhost';
    $dbname = 'esercizio-pizzeria';
    $user = 'root';
    $pass = 'admin';
    $db = new PDO("mysql:host=$hostname;dbname=$dbname",$user, $pass);

}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
    die;
}