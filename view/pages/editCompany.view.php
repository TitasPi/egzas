<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body>
        <?php include "view/_partials/nav.view.php"; ?>
        <div class="container text-center w-100">
            <h1>Įmonės redagavimas</h1>
            <form method="post">
                <div class="mb-3">
                    <input type="text" name="name" value="<?=$company['pavadinimas']?>" placeholder="Įmonės Pavadinimas" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="text" name="code" value="<?=$company['kodas']?>" placeholder="Įmonės Kodas" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="text" name="pvm_code" value="<?=$company['pvm_kodas']?>" placeholder="Įmonės PVM Kodas" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="text" name="address" value="<?=$company['adresas']?>" placeholder="Įmonės Adresas" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="tel" name="phone" value="<?=$company['telefonas']?>" placeholder="Įmonės Tel. Nr." class="form-control">
                </div>
                <div class="mb-3">
                    <input type="email" name="email" value="<?=$company['elpastas']?>" placeholder="Įmonės El. paštas" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="text" name="activity" value="<?=$company['veikla']?>" placeholder="Įmonės Veikla" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="text" name="owner" value="<?=$company['vadovas']?>" placeholder="Įmonės Vadovas" class="form-control">
                </div>
                <button type="submit" name="send" class="btn btn-primary">Redaguoti</button>
            </form>
        </div>
    </body>
</html>