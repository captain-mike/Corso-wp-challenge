<?php

$i = 0;
while($i < 10){

    echo $i;
    $i++;
}

echo '<hr>';
$i = 10;
while($i >= 0){
    echo $i.'-';
    $i--;
}


$pizze = ['Margherita','Diavola','Mimosa','Bufala'];

$i = 0;
while($i < count($pizze)){
    echo "<div id=\"pizza-$i\" class=\"test\">$pizze[$i]</div>";
    $i++;
}