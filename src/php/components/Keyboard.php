<?php
const ASCII_A = 65; // ord("A");
const ASCII_Z = 90; // ord("Z");

function getAlphabet()
{
    $alphabet = [];
    for ($letter = ASCII_A; $letter <= ASCII_Z; $letter++) {
        $alphabet[] = chr($letter);
    }
    return $alphabet;
}
?>
<p>Select your letter. Good luck!</p>
<form id="keyboard" method="post">
    <?php
    foreach (getAlphabet() as $letter) {
    ?>
        <button name="letter" value="<?= $letter ?>" <?= isset($_SESSION["usedLetters"][$letter]) ? "disabled" : "" ?>><?= $letter ?></button>
    <?php
    };
    ?>
</form>