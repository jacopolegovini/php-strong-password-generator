<?php
session_start();
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
                <div class="card-result-specific">
                    <div class="card-result-text"><?php echo implode($_SESSION); ?></div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>