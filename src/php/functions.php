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
