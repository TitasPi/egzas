<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body>
        <?php include "view/_partials/nav.view.php"; ?>
        <div class="container text-center w-100 d-flex justify-content-center">
            <div class="card my-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?=$company['pavadinimas']?></h5>
                    <div class="card-text">
                        <p>Kodas: <?=$company['kodas']?></p>
                        <p>PVM Kodas: <?=$company['pvm_kodas']?></p>
                        <p>Adresas: <?=$company['adresas']?></p>
                        <p>Telefono nr.: <?=$company['telefonas']?></p>
                        <p>El. paštas: <?=$company['elpastas']?></p>
                        <p>Veikla: <?=$company['veikla']?></p>
                        <p>Vadovas: <?=$company['vadovas']?></p>
                    </div>
                    <a href="/edit-company/<?=$company['id']?>" class="btn btn-success">Redaguoti</a>
                    <a href="/delete-company/<?=$company['id']?>" class="btn btn-danger">Ištrinti</a>
                </div>
            </div>
            <ul>
            </ul>
        </div>
    </body>
</html>