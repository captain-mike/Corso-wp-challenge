<?php

$pizze = ['Margherita','Diavola','Mimosa','Bufala'];

foreach($pizze as $pizza){
    echo $pizza;
}

$pizze = ['Margherita','Diavola','Mimosa','Bufala'];

echo '<ul>';
foreach($pizze as $key => $pizza){//key = 0 se pizza = margherita
    echo "<li>$key $pizza</li>";
}
echo '</ul>';


//ciclare array associativi

$menu = [
    'pizze' => ['Margherita','Diavola'],
    'primi' => ['Penne all\'arrabbiata','Spaghetti cacio e pepe'],
    'dolci' => ['Panna cotta','Tiramisu','Profiterol']
];

foreach($menu as $titolo => $categoria){
    echo "<h3>$titolo</h3>";
    echo '<ul>';
        foreach($categoria as $piatto){
            echo "<li>$piatto</li>";
        }
    echo '</ul>';
}