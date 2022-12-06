<?php

$anni = 30;

//gli operatori di confronto vengono utilizzati per ricavare un valore booleano

var_dump($anni == 30);//bool(true) => significa che è un valore booleano ed è uguale a true

//se per sbaglio uso l'assegnamento al posto del confronto, avverrà l'assegnamento in maniera corretta e vedrò il valore assegnato
//var_dump($anni = 10);

var_dump($anni != 30);//false

//superiore a
var_dump($anni > 30);//false, anni è uguale a 30
//inferiore a
var_dump($anni < 30);//false, anni è uguale a 30
//inferiore o uguale
var_dump($anni <= 30);//true
//superiore o uguale
var_dump($anni >= 30);//true

//operatori && e ||

var_dump($anni >= 18 && $anni <= 110);//true && true => true
var_dump($anni >= 18 || $anni <= 110);//se almeno uno dei due è true allora restituisci true

//strictly equal
var_dump($anni === 30);//true => valore e tipo di dato uguali
var_dump($anni == "30");//true => valore uguale
var_dump($anni === "30");//false => valore uguale e tipo di dato differente

//strictly different
var_dump($anni !== 30);//false => valore e tipo di dato uguali
var_dump($anni != "30");//false => per lui siccome il valore è uguale abbiamo un'uguaglianza
var_dump($anni !== "30");//true => il tipo di dato èpp diverso sebbene il valore sia uguale


//operatore not
//inverte la polarità di un valore booleano
var_dump(!true);

var_dump( !($anni === 30) );


var_dump( !!!!!!!!!($anni === 30) );
