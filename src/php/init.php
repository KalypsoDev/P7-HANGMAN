<?php
session_start();

if (!isset($_SESSION["currentWord"])) {
    $_SESSION["currentWord"] = null;
}

if (!isset($_SESSION["usedLetters"])) {
    $_SESSION["usedLetters"] = [];
}

if (!isset($_SESSION["failedAttempts"])) {
    $_SESSION["failedAttempts"] = 0;
}
