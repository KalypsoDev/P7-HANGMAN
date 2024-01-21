<?php
    require "../src/php/init.php";
    require "../src/php/functions.php";
    require "../src/php/words.php";
    $word = randomWord($wordsList);
    $wordLetters = str_split($word);
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
    <header>
        <h1>Kalypso's Hangman</h1>
    </header>
    <main>
        <section id="form">
            <h2>You have to guess the hidden word. You have 10 attemps.</h2>
            <form method="post" action="/">
                <label for="letter">Insert your letter. Good luck!</label>
                <input id="letter" type="text" name="letter" maxlength="1" required>
                <button>Send</button>
            </form>
        </section>
        <section id="image">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 399 427">
                <g fill="none" stroke="#000" stroke-width="5.3">
                    <path stroke-linecap="round" d="M104 425h-101"/>
                    <path stroke-linecap="round" d="M56 3v416" />
                    <path stroke-linecap="round" d="M305 3h-249"/>
                    <path stroke-linecap="round" d="M305 5v29" />
                    <circle cx="305" cy="66" r="30" /> 
                    <path stroke-linecap="round" d="M305 98v142" />
                    <path stroke-linecap="round" d="m305 155-89-31"/>
                    <path stroke-linecap="round" d="m307 155 89-31"/>
                    <path stroke-linecap="round" d="M305 241 239 369"/>
                    <path stroke-linecap="round" d="m305 240 65 127"/>
                </g>
            </svg>
        </section>
        <section id="word">
            <div>
                <?php
                    foreach($wordLetters as $letter) {
                        ?>
                            <span>_</span>
                        <?php
                    }

                    echo $word;
                ?>
            </div>
        </section>
        <section id="usedLetters">
            <div>
                <span>a</span>
                <span>c</span>
                <span>m</span>
                <span>p</span>
                <span>i</span>
                <span>u</span>
                <span>t</span>
                <span>e</span>
            </div>
        </section>
        <section class="result">
            <p id="win">You've won!</p>
            <p id="lost">You've lost!</p>
        </section>
    </main>
    <footer>
        <p>Copyright © 2024 Kalypso's Hangman - All rights reserved</p>
    </footer>
</body>
</html>