<h1> Exercice 4</h1>
<p> Ecrire un algorithme permettant de savoir si une phrase est palindrome.
</p>
<h2> Résultat</h2>

<?php

$phrase = "Engage le jeu que je le gagne";
$inverse = strtolower(str_replace(" ","",$phrase));
$inverse= strrev($inverse);
if (strtolower(str_replace(" ","",$phrase)) === $inverse) {
    echo "La phrase « $phrase » est palindrome.";
} else {
    echo "La phrase « $phrase » n'est pas palindrome";
}