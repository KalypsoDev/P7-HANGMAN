<?php
session_start();

if (!isset($_SESSION["usedLetters"])) {
    $_SESSION["usedLetters"] = [];
}
