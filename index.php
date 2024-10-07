<?php
require './functions.php';

if (isset($_GET['passwordLength']))
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <!-- Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"
        integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Style -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Password Generator</h1>
        <form action="index.php" method="GET">
            <label for="passwordLength">Inserisci la lunghezza desiderata per la tua password</label>
            <input type="number" name="passwordLength" min=1 max=20><br>

            <label for="addUppercase">Lettere Maiuscole</label>
            <input type="checkbox" name="addUppercase"><br>
            <label for="addNumbers">Numeri</label>
            <input type="checkbox" name="addNumbers"><br>
            <label for="addSymbols">Simboli</label>
            <input type="checkbox" name="addSymbols"><br>

            <button>Genera</button>
        </form>
        <div class="result">
            <?php
        if (isset($_GET['passwordLength'])) echo generatePassword($_GET['passwordLength']);
            ?>
        </div>
    </main>
</body>

</html>