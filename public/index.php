<?php
require "../src/php/init.php";
require "../src/php/functions.php";
require "../src/php/words.php";

$currentWord = randomWord($wordsList);
$wordLetters = str_split($currentWord);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Kalypso's Hangman</title>
</head>

<body>
    <!--<?php
        if (isset($_POST['letter'])) {
            checkLetter();
        }
        ?>
        -->
    <header>
        <h1>Kalypso's Hangman</h1>
    </header>
    <main>
        <section id="form">
            <h2>You have to guess the hidden word. You have 10 attemps.</h2>
            <?php
            require "../src/php/components/Keyboard.php";
            ?>
        </section>
        <section id="image">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 399 427">
                <g fill="none" stroke="#000" stroke-width="5.3">
                    <?php if ($_SESSION["failedAttempts"] > 0) { ?>
                        <path stroke-linecap="round" d="M104 425h-101" />
                    <?php }
                    if ($_SESSION["failedAttempts"] > 1) { ?>
                        <path stroke-linecap="round" d="M56 3v416" />
                    <?php }
                    if ($_SESSION["failedAttempts"] > 2) { ?>
                        <path stroke-linecap="round" d="M305 3h-249" />
                    <?php }
                    if ($_SESSION["failedAttempts"] > 3) { ?>
                        <path stroke-linecap="round" d="M305 5v29" />
                    <?php }
                    if ($_SESSION["failedAttempts"] > 4) { ?>
                        <circle cx="305" cy="66" r="30" />
                    <?php }
                    if ($_SESSION["failedAttempts"] > 5) { ?>
                        <path stroke-linecap="round" d="M305 98v142" />
                    <?php }
                    if ($_SESSION["failedAttempts"] > 6) { ?>
                        <path stroke-linecap="round" d="m305 155-89-31" />
                    <?php }
                    if ($_SESSION["failedAttempts"] > 7) { ?>
                        <path stroke-linecap="round" d="m307 155 89-31" />
                    <?php }
                    if ($_SESSION["failedAttempts"] > 8) { ?>
                        <path stroke-linecap="round" d="M305 241 239 369" />
                    <?php }
                    if ($_SESSION["failedAttempts"] > 9) { ?>

                        <path stroke-linecap="round" d="m305 240 65 127" />
                    <?php }  ?>
                </g>
            </svg>
        </section>
        <section id="word">
            <div>
                <?php
                $wonGame = true;
                foreach ($wordLetters as $letter) {
                    if (isset($_SESSION["usedLetters"][strtoupper($letter)])) {
                        echo "<span>$letter </span>";
                    } else {
                        $wonGame = false;
                        echo "<span>_ </span>";
                    }
                }
                ?>
            </div>
        </section>
        <section class="result">
            <?php if ($wonGame) : ?>
                <p id="win">You've won!</p>
                <a href="./"><button>Reset game</button></a>
            <?php elseif ($_SESSION["failedAttempts"] > 9) : ?>
                <p id="lost">You've lost!</p>
                <p>The word was "<?= $currentWord ?>"</p>
                <a href="./"><button>Reset game</button></a>
            <?php endif ?>
        </section>
    </main>
    <footer>
        <p>Copyright © 2024 Kalypso's Hangman - All rights reserved</p>
    </footer>
</body>

</html>
<?php
if ($wonGame || $_SESSION["failedAttempts"] > 9) {
    $_SESSION["currentWord"] = null;
    $_SESSION["usedLetters"] = [];
    $_SESSION["failedAttempts"] = 0;
}
?>