<?php
function generatePassword($wordLength)
{
    $password = '';

    // Setto vari variabili che vengono modificate a seconda delle checkbox spuntate
    $lowercase = range('a', 'z');

    $uppercase = [];
    if (isset($_GET['addUppercase'])) $uppercase = range('A', 'Z');

    $numbers = [];
    if (isset($_GET['addNumbers'])) $numbers = range(0, 9);

    $symbols = [];
    if (isset($_GET['addSymbols'])) {
        $symbols = explode(" ", "| ! $ % & ( ) / = ? ^ * - + _ : ; . ,");
    }

    // Ritrasformo tutto in stringa
    $totalCharacters = implode($lowercase) . implode($uppercase) . implode($numbers) . implode($symbols);

    // Rendo array con index pari al numero di caratteri
    $totalCharacters = str_split($totalCharacters);

    // Con un ciclo 
    for ($i = 0; $i < $wordLength; $i++) {
        $randomIndex = random_int(0, count($totalCharacters) - 1);
        $password .= $totalCharacters[$randomIndex];
        $passwordToPrint = "\"{$password}\"";
    }

    return $passwordToPrint;
}
