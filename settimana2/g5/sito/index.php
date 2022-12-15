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

    <ol class="list-group list-group-flush">
        <?php foreach($piatti as $piatto):?>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                <div class="fw-bold"><?=$piatto['gusto']?></div>
                <?=$piatto['ingredienti']?>
                </div>
                <span class="badge bg-primary rounded-pill">
                    <i class="bi bi-cash"></i> 
                    <?=$piatto['prezzo']?>€
                </span>
            </li>
        <?php endforeach;?>
    </ol>
</main>

<?php include('inc/footer.php'); ?>
