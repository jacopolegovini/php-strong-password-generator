<?php
require __DIR__ . '/./functions.php';

if (isset($_GET['passwordLength'])) {

    session_start();
    $_SESSION["password"] = generatePassword($_GET['passwordLength']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Style -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="container">
        <div class="card-general card">
            <h1 class="my-3">Password Generator</h1>
            <div class="container d-flex justify-content-center">
                <div class="card-form card px-3">
                    <form action="./passwordResult.php" method="GET">
                        <label class="my-3" for="passwordLength">Inserisci la lunghezza desiderata per la tua
                            password</label>
                        <input type="number" name="passwordLength" min=1 max=20><br>

                        <label for="addUppercase">Lettere Maiuscole</label>
                        <input type="checkbox" name="addUppercase" checked><br>
                        <label for="addNumbers">Numeri</label>
                        <input type="checkbox" name="addNumbers" checked><br>
                        <label for="addSymbols">Simboli</label>
                        <input type="checkbox" name="addSymbols" checked><br>

                        <button class="btn btn-primary my-3">Genera</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>