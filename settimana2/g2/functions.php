<?php
/**
 * in php le funzioni possono essere invocate nelle righe precedenti alla loro definizione
 */
saluto();
function saluto(){
    echo 'Ciao!!!!';
}

saluto();

function restituisci_saluto(){
    return 'Ciao!!!!';
    //return restituisce un dato
    //attenzione perchè tutto cià che sta dopo la parola return non viene eseguito
}

$saluto = restituisci_saluto();//'Ciao!!!!'

echo '<br>'.$saluto;

//funzioni parametrizzate
function testi_grassetto($testo){
    echo "<b>$testo</b>";
}

testi_grassetto('prova');
testi_grassetto('lorem ipsum');


function creaHTML($testo, $tag_name = 'div'){
    echo "<$tag_name>$testo</$tag_name><br>";//<i>Ciao</i>
}

creaHTML('Ciao','i');
creaHTML('Ciao');

function spread(...$numeri){
    //grazie all'operatore di spread (...) tutti i parametri verranno inseriti in un array chiamato numeri
    var_dump($numeri);
}

spread(1,2,3);

//scope

$a = 0;

function test(){
    /**
     * La variabile $a è stata creata fuori dalla funzione test quindi non è accessibile
     * utilizzando la parola chiave "global" faccio si che quella variabile sia invece raggiungibile
     */
    global $a;
    echo $a;

    $b = 1;
}

//echo $b; Undefined variable, nascerà alla riga 57 dentro la funzione, non è accessibile

test();


//callback
function scrivi_testo($function, $testo){
    echo $function($testo);//testi_grassetto('ciao');
}
function corsivo($testo){
    return "<i>$testo</i>";
}

scrivi_testo('testi_grassetto','ciao');
scrivi_testo('corsivo','ciao');