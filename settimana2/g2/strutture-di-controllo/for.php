<?php


for ($i = 0; $i < 10; $i++){

    echo $i;

}

echo '<hr>';

for ($i = 10; $i >= 0; $i--){
    
    echo $i;
    
}

echo '<hr>';

$pizze = ['Margherita','Diavola','Mimosa','Bufala'];

for($i = 0; $i < count($pizze); $i++){
    echo "<div>$pizze[$i]</div>";
}

echo '<hr>';

//faccio echo solo se il valore è diverso da mimosa senza interrompere o alterare le iterazioni del ciclo
for($i = 0; $i < count($pizze); $i++){
    if($pizze[$i] != 'Mimosa'){
        echo "<div>$pizze[$i]</div>";
    }
}

echo '<hr>';

//controllo che il valore sia uguale a mimosa, in caso di controllo con esito positivo salto le restanti righe di questa iterazione
for($i = 0; $i < count($pizze); $i++){
    if($pizze[$i] == 'Mimosa'){
        continue;
    }
    echo "<div>$pizze[$i]</div>";
}

echo '<hr>';

for($i = 0; $i < count($pizze); $i++){
    if($i == 2){
        break;//interompo il ciclo
    }
    echo "<div>$pizze[$i]</div>";
}
