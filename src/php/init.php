<?php
session_start();

if (!isset($_SESSION["usedLetters"])) {
    $_SESSION["usedLetters"] = [];
}

if (!isset($_SESSION["failedAttempts"])) {
    $_SESSION["failedAttemps"] = 0;
}
