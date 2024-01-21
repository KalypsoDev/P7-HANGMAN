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
        </section>
        <section id="word">
        </section>
        <section id="usedLetters">
        </section>
        <section class="result">
        </section>
    </main>
    <footer>
        <p>Copyright © 2024 Kalypso's Hangman - All rights reserved</p>
    </footer>
</body>
</html>