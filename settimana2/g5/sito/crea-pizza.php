<?php 
include('inc/header.php');

?>

<main>

    <div class="container">

        <h1 class="mb-5 mt-3">Aggiungi una pizza</h1>

        <?php include('inc/messages.php')?>
        
        <?php include('inc/form-piatto.php')?>
        
        <a class="btn btn-success mt-5" href="gestione-menu.php"><< Torna alla gestione</a>

    </div>

</main>

<?php include('inc/footer.php'); ?>