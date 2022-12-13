<?php include('inc/header.php'); ?>

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
                                <th>Gusto</th>
                                <th>Prezzo</th>
                                <th>Ingredienti</th>
                                <th>Azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Margherita</td>
                                <td>5</td>
                                <td>farina, lievito, pomodoro, mozzarella, olio EVO</td>
                                <td>
                                    <a class="btn btn-warning" href=""><i class="bi bi-pencil-square"></i> Modifica</a>
                                    <a class="btn btn-danger" href=""><i class="bi bi-trash-fill"></i>
 Elimina</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div> 
            </div>
            
        </div>
    </section>

</main>

<?php include('inc/footer.php'); ?>