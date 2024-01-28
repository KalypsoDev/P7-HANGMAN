<?php
function randomWord($array)
{
    $currentWord = $_SESSION["currentWord"];
    if ($currentWord) {
        return $currentWord;
    }
    $currentWord = $array[array_rand($array)];
    $_SESSION["currentWord"] = $currentWord;
    return $currentWord;
}


function checkLetter()
{
    $currentLetter = $_POST["letter"];
    $currentWord = $_SESSION["currentWord"];

    $_SESSION["usedLetters"][$currentLetter] = true;
    // Así se añade cada letra  como clave a un diccionario y le asignamos el valor true.
    /*
    $usedLetters[] = $currentLetter;
    // Así se añadiría cada letra a un array, ['A', 'Z', ..]
    */

    if (stripos($currentWord, $currentLetter) === false) {
        $_SESSION["failedAttempts"]++;
    } else {
        echo "La letra se pondrá en la palabra";
    }
    echo "La letra del teclado se pondrá gris";
}
