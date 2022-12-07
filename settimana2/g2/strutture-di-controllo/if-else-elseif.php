<?php

$bool = false;
if($bool){
    echo 'vero';
}

$email = '';

if(!empty($email)){
    //faccio il login
    echo 'Login effettuato<br>';
}else{
    //avviso l'utente
    echo 'Devi inserire l\'email<br>';
}

$anni = 1000;

if($anni >= 18 && $anni <= 110){
    echo 'Sei Maggiorenne';
}else if($anni > 110){
    echo 'Sei antico';
}else{    
    echo 'Sei Minorenne';
}