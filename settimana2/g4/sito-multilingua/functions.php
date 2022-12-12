<?php

function prendi_lingua_utente(){
    //funzionamento switch lingua
    /*
    versione estesa e funzionante
    if(isset($_COOKIE['lang'])){//se esiste il cookie chiamato 'lang'
        return $_COOKIE['lang'];
    }else{
        return 'it';//altrimenti uso it
    }*/

    //versione one line
    return $_COOKIE['lang'] ?? 'it';
}

function cambia_lingua_utente(){
    if(isset($_GET['lang'])){//se è stata cambiata la lingua
        $lang = $_GET['lang'];//metti quella lingua nella variabile lang
        setcookie('lang', $lang);
        return $lang;
    }else{
        return NULL;
    } 
}

function avvia_sistema_lingue(){
    $lang = prendi_lingua_utente();
    if(cambia_lingua_utente() != NULL){
        $lang = cambia_lingua_utente();
    }
    //versione one line
    //$lang = cambia_lingua_utente() ?? $lang;
    include("lang/$lang.php");
    return $lang;
}