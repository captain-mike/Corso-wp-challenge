<?php

//pizza sotto forma di oggetto
$pizza = new stdClass();

$pizza->gusto = 'Margherita';
$pizza->prezzo = 5;
var_dump($pizza);


//pizza sotto forma di array associativo
$pizza_arr = [
    'gusto' => 'Margherita',
    'prezzo' => 5
];
var_dump($pizza_arr);

//is_object($var) restituisce true/false se la variabile esaminata è/non è un oggetto
var_dump(is_object($pizza));
//is_object($var) restituisce true/false se la variabile esaminata è/non è un array
var_dump(is_array($pizza));


function zero($var){
    if(is_object($var)){
        $var->type = 'Object';
    }else if(is_array($var)){
        $var['type'] = 'Array';
    }else{
        $var = 'Altro';
    }
    return $var;
}

echo '<hr>';
var_dump( zero($pizza) );
echo '<hr>';
var_dump( zero($pizza_arr) );
echo '<hr>';
var_dump( zero('test') );

