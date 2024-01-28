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
    $userLetter = $_POST["letter"];
    $currentWord = $_SESSION["currentWord"];
    if (stripos($currentWord, $userLetter) === false) {
        echo "La letra se pondrá en la sección letras usadas";
    } else {
        echo "La letra se pondrá en la palabra";
    }
    echo "La letra del teclado se pondrá gris";
}
