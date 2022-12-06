<?php

/* 
commento su
 più righe
*/

//commento ad una sola riga

echo "Hello World!";
//print("Hello World!"); un po' legacy
echo "<hr>";

/* una variabile è una porzione di memoria in cui salviamo dati 
Sono indicate con il simbolo del dollaro "$" seguito da un nome
Il nome deve iniziare con una lettera o con il simbolo _ ($_variabile)
*/
$variabile = 5;

echo $variabile;
echo "<hr>";

/*
    - number
    - string
    - boolean
    - array
    - object
*/

$number = 0.5;
$string = "Ciao";
$boolean = true;//oppure false
$array = [];//array();

$a = 1;
$b = 2;

echo $a + $b; //posso svolgere al volo un'operazione e passarla ad una direttiva di output
echo "<hr>";

$c = $a + $b;//$c = 3

echo $c;

/*
operazioni matematiche
*/

$somma = 2 + 2;
$sottrazione = 2 - 2;
$moltiplicazione = 2 * 2;
$divisione = 2 / 2;


/**
 * Stringhe
 */

$str1 = "Ciao";
$str2 = 'Ciao';
$str3 = "$str1 Mario!";//Ciao Mario
$str4 = '$str1 Mario';//$str1 Mario
//concatenamento
$str5 = "Ciao " . $str1 . ' Mario!';//Ciao Ciao Mario

$html = '<div id="test">Div prova</div>';

echo $html;

//escape
$html2 = "<div id=\"test\">Div prova</div>";//effettuo l'escape degli apici, così facendo evito che php chiuda le stringhe in anticipo
$escape = 'ecco come si fa l\'escape';

//variabile Heredoc

$var_heredoc = <<<EOD

$str1, come va?<br>
questo è il testo in una variabile Heredoc
qui posso scrivere tutto il testo che voglio senza usare apici
e inserire le variabili liberamente <hr>  

EOD;

echo $var_heredoc;

//le variabili possono essere riassegnate

$variabile_nuova;//non definita

$variabile_nuova = 0;//ora vale 0

echo $variabile_nuova;//0

$variabile_nuova = 90;//ora vale 90
echo $variabile_nuova;//90
echo '<hr>';

/**
 *  
 * PHP è UN LINGUAGGIO A TIPIZZAZIONE DEBOLE
 * 
 */

$numero = 5;//numero
$numero_stringa = "5";//stringa

echo $numero_stringa + $numero;//la stringa viene convertita in numero
echo '<hr>';
echo $numero_stringa + $numero_stringa;//le stringhe vengono convertite in numeri
echo '<hr>';
echo $numero_stringa . $numero;//il numero viene convertito in stringa


//casting =  conversione

$da_convertire = '100';

$convertito = $da_convertire * 1;//100 numerico

$convertito2 = (integer) $da_convertire;//100 numerico







