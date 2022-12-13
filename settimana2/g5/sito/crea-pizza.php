<?php 
include('inc/header.php');
require_once('inc/ingredienti.php');
?>

<main>

    <div class="container">

        <h1 class="mb-5 mt-3">Aggiungi una pizza</h1>
        
        
        <form method="post" action="crud/create.php">
            <input type="text" class="form-control mb-2" placeholder="gusto" name="gusto">
            <div class="input-group mb-2">
                <input type="number" name="prezzo" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                <span class="input-group-text">€</span>
                <span class="input-group-text">0.00</span>
            </div>
            <div class="row mb-2">
                <?php foreach($ingredienti as $ing):?>
                <div class="col-4">
                    <div class="form-check form-switch">
                        <input class="form-check-input" value="<?=$ing?>" name="ingrediente-<?=$ing?>" type="checkbox" role="switch" id="ingrediente-<?=$ing?>">
                        <label class="form-check-label" for="ingrediente-<?=$ing?>"><?=$ing?></label>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <button class="btn btn-primary">Salva</button>
        </form>
    </div>

</main>

<?php include('inc/footer.php'); ?>