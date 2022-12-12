<?php

try{

    $hostname = 'localhost';
    $dbname = 'dbutenti';
    $user_name = 'root';
    $password = 'admin';
    
    $db = new PDO("mysql:host=$hostname;dbname=$dbname", $user_name, $password);
    
    //echo 'Database Connesso';
} catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die;//o exit
}