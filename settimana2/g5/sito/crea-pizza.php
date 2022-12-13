<?php include('inc/header.php'); 

$ingredienti = [
    'farina',
    'lievito',
    'sale',
    'mozzarella',
    'pomodoro',
    'olio-evo',
    'prosciutto',
    'funghi'
    ]

?>

<main>

    <div class="container">

        <h1>Aggiungi una pizza</h1>
        
        
        <form>
            <input type="text" class="form-control" placeholder="gusto" name="gusto">
            <div class="input-group">
                <input type="text" name="prezzo" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                <span class="input-group-text">€</span>
                <span class="input-group-text">0.00</span>
            </div>
            <div class="row">
                <?php foreach($ingredienti as $ing):?>
                <div class="col-4">
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="ingrediente-<?=$ing?>" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault"><?=$ing?></label>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <button class="btn btn-primary">Salva</button>
        </form>
    </div>

</main>

<?php include('inc/footer.php'); ?>