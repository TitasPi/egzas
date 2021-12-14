<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body>
        <?php include "view/_partials/nav.view.php"; ?>
        <div class="container text-center w-100">
            <h1>Pagrindinis puslapis</h1>
            <form method="post">
                <input type="text" name="search" placeholder="Įmonės paieška">
                <button type="submit" name="send" class="btn btn-primary">Ieškoti</button>
            </form>
        </div>
    <?php include "view/_partials/footer.view.php"; ?>
    </body>
</html>