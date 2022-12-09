<?php

$_GET;//viene riempito con tutto ciò che viene inviato con metodo get

$_POST;//viene riempito con tutto ciò che viene inviato con metodo post

$_REQUEST;//viene riempito con tutto ciò che viene inviato con metodo post, get, cookies
//per far si che request legga anche $_COOKIE  occorre abilitare una configurazione specifica nel file php.ini

echo '<pre>';
var_dump($_POST);
var_dump($_GET);
var_dump($_REQUEST);
echo '</pre>';

?>

<form method="post">
    <input type="text" name="nome" value="Giacomo">
    <button>Invia</button>
</form>


<?php

var_dump($_COOKIE);

setcookie('nome','Alessia',time() + 3600);//3600 secondo = 1ora


//var_dump($GLOBALS);//contiene riferimenti a tutti gli array superglobali
echo '<pre>';
//var_dump($_SERVER);
echo '</pre>';


//Sessioni
session_start();
var_dump($_SESSION);

$_SESSION['session_id'] = 1;

?>