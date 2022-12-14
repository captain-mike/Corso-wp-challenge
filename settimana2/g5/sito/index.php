<?php 
include('inc/header.php');
require_once('inc/connection.php');

$sql = "SELECT * FROM piatti";

$query = $db->prepare($sql);

$esito = $query->execute();

if(!$esito):?>

<div class="alert alert-danger">
    Errore lettura database
</div>

<?php
    exit;
endif;

$piatti = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<main>
    <h1>Menu</h1>

    <?php foreach($piatti as $piatto):?>
        <div><?=$piatto['gusto']?></div>
    <?php endforeach;?>

</main>

<?php include('inc/footer.php'); ?>
