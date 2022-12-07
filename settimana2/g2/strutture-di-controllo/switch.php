<?php

$frutto = 'Fragola';

switch($frutto){
    case 'Mela':
        echo 'Le mele costano 0.50€';
        break;
    case 'Banana':
        echo 'Le banane costano 0.99€';
        break;
    case 'Papaya':
    case 'Mango':
        echo 'Le papaya e i manghi costano 2€';
        break;
    default:
        echo "Non abbiamo $frutto";
}