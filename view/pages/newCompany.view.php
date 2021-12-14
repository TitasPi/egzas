<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body>
        <?php include "view/_partials/nav.view.php"; ?>
        <div class="container text-center w-100">
            <h1>Naujos įmonės pridėjimas</h1>
            <form method="post">
                <div class="mb-3">
                    <input type="text" name="name" placeholder="Įmonės Pavadinimas" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="text" name="code" placeholder="Įmonės Kodas" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="text" name="pvm_code" placeholder="Įmonės PVM Kodas" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="text" name="address" placeholder="Įmonės Adresas" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="tel" name="phone" placeholder="Įmonės Tel. Nr." class="form-control">
                </div>
                <div class="mb-3">
                    <input type="email" name="email" placeholder="Įmonės El. paštas" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="text" name="activity" placeholder="Įmonės Veikla" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="text" name="owner" placeholder="Įmonės Vadovas" class="form-control">
                </div>
                <button type="submit" name="send" class="btn btn-primary">Pridėti</button>
            </form>
        </div>
    <?php include "view/_partials/footer.view.php"; ?>
    </body>
</html>