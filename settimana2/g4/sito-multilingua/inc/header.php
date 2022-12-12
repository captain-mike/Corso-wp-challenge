<?php 
include('functions.php');

$lang = avvia_sistema_lingue(); ?>

<!doctype html>
<html lang="<?=$lang?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header id="main-header">
        <nav>
            <ul id="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="chi-siamo.php"><?=TESTI['etichetta_chi_siamo']?></a></li>
                <li><a href="contatti.php"><?=TESTI['etichetta_contatti']?></a></li>
            </ul>
        </nav>
        <nav>
            <ul>
                <li><a href="?lang=it">Italiano</a></li>
                <li><a href="?lang=en">English</a></li>
            </ul>
        </nav>
    </header>