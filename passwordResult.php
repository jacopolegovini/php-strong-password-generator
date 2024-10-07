<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>

<body>
    <main>
        Ecco qui la tua password "<?php echo implode($_SESSION); ?>"
    </main>
</body>

</html>