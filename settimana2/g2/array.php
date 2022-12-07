<?php

$array_old = array(0,1,2,3,4,5,9);
$array = [1, 2, 3, 4,'Prova', 6, 7, 8, 50];

print_r($array);//pront ricorsivo che mi permette di vederne il contenuto

echo '<pre>';
var_dump($array);//utilizzato per vedere ed analizzare il contenuto di ogni variabile
echo '</pre>';

//tipi di dato
$dati_array = [
    4,//number
    'Ciao',//string
    [],//array
    true//booleano
];

//lettura array

$frutta = ['Mela', 'Pera', 'Banana', 'Ananas', 'Uva'];

echo $frutta[0];

$pera = $frutta[1];

echo '<hr>';

//count() dato un array, mi dice quanti valori ci sono al suo interno
$numero_frutti = count($frutta);
echo $numero_frutti;

//modificare gli array

$frutta[] = 'Cocomero';//aggiungo alla fine dell'array

$frutta[0] = 'Fragola';//accedo all'indice definito, e modifico il valore collegato

$frutta[10] = 'Mandarino';//così facendo tutte le posizioni dalla 6 alla 9 non esistono, ho creato un buco nell'array
$frutta[] = 'Arancia';//verrà creato un valore "Arancia" per la chiave 11


//echo $frutta[9];alla chiave 9 non esiste alcun valore

//eliminazione

unset($frutta[4]);//elimino l'uva

$frutta['scadenza'] = 'Tra 10 giorni';

echo '<pre>';
var_dump($frutta);
echo '</pre>';


//array multidimensionali

$array_strano = [
    1,
    2,
    3,
    [
        'a','b','c',[
            '#','€','%'
        ]
    ]
];

echo $array_strano[3][2];
echo $array_strano[3][3][1];

/**
 * array associativi
 * 
 * Array le cui chiavi sono testuali
 */

$menu = [
    'pizze' => ['Margherita','Diavola'],
    'primi' => ['Penne all\'arrabbiata','Spaghetti cacio e pepe']
];


echo '<pre>';
var_dump($menu);
echo '</pre>';

echo '<pre>';
var_dump($menu['pizze']);//tutte le pizze
echo '</pre>';

echo $menu['pizze'][0];//margherita

