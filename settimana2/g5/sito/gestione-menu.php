<?php 
include('inc/header.php');
require_once('inc/connection.php');

$sql = "SELECT * FROM piatti";
$query = $db->prepare($sql);
if(!$query->execute()){
    print_r($query->errorInfo());
    die;
}

$piatti = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<main>
    <h1>Gestione menu</h1>

    <section>
        <div class="container">

            <div class="row">
                <div class="col-12 d-grid gap-2">
                    <a href="crea-pizza.php" class="btn btn-success"><i class="bi bi-plus-square-fill"></i> Aggiungi pizza</a>
                </div> 
                <div class="col-12">
                    
                    <table class="table">
                        <caption>Tutte le pizze</caption>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Gusto</th>
                                <th>Prezzo</th>
                                <th>Ingredienti</th>
                                <th>Azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($piatti as $index => $piatto):?>
                            <tr>
                                <td><?=$index + 1?></td>
                                <td><?=$piatto['gusto']?></td>
                                <td><?=$piatto['prezzo']?>€</td>
                                <td><?=$piatto['ingredienti']?></td>
                                <td>
                                    <a class="btn btn-warning" href="modifica-pizza.php?id=<?=$piatto['id']?>"><i class="bi bi-pencil-square"></i> Modifica</a>
                                    <a class="btn btn-danger" href="crud/delete.php?id=<?=$piatto['id']?>"><i class="bi bi-trash-fill"></i>
                                    Elimina</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>

                </div> 
            </div>
            
        </div>
    </section>

</main>

<?php include('inc/footer.php'); ?>