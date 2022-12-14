<?php 

require_once('inc/ingredienti.php'); 
$gusto = '';
$prezzo = '';
$ingredienti_pizza = [];
$action = "crud/create.php";

if(isset($_GET['id'])){


    $action = "crud/update.php?id=$_GET[id]";
    require_once('connection.php');

    $sql = "SELECT * FROM piatti WHERE id = $_GET[id] LIMIT 1";
    $query = $db->prepare($sql);
    if(!$query->execute()){
        print_r($query->errorInfo());
        die;
    }

    $piatto = $query->fetch(PDO::FETCH_ASSOC);

    $gusto = $piatto['gusto'];
    $prezzo = $piatto['prezzo'];

    $ingredienti_pizza = explode(', ', $piatto['ingredienti']);
}

function seleziona_campo($ingrediente, $array){
    if(in_array($ingrediente, $array)){
        return 'checked';
    }

    //return in_array($ingrediente, $array) ? 'checked' : '';
}


?>

<form method="post" action="<?=$action?>">
    <input type="text" value="<?=$gusto?>" class="form-control mb-2" placeholder="gusto" name="gusto">
    <div class="input-group mb-2">
        <input value="<?=$prezzo?>" type="number" name="prezzo" class="form-control"
            aria-label="Dollar amount (with dot and two decimal places)">
        <span class="input-group-text">€</span>
        <span class="input-group-text">0.00</span>
    </div>
    <div class="row mb-2">
        <?php foreach ($ingredienti as $ing): ?>
            <div class="col-4">
                <div class="form-check form-switch">
                    <input 
                    class="form-check-input" 
                    <?=seleziona_campo($ing, $ingredienti_pizza)?> 
                    value="<?= $ing ?>" 
                    name="ingrediente-<?= $ing ?>"
                    type="checkbox"
                    role="switch" 
                    id="ingrediente-<?= $ing ?>">
                    <label class="form-check-label" for="ingrediente-<?= $ing ?>">
                        <?= $ing ?>
                    </label>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <button class="btn btn-primary">Salva</button>
</form>