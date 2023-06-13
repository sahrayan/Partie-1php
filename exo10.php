<h1> Exercice 10</h1>
<p> A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €.</p>
<h2> Résultat</h2>

<?php
$montantapayer = 125;
echo "Montant à payer : ".$montantapayer. "€". "<br>";
$montantverser = 200;
echo "Montant versé : ".$montantverser. "€". "<br>";
$rendu = $montantverser-$montantapayer;
echo  "Reste a payer : ".$rendu. "€". "<br>";
echo "************** <br>";
$a = $rendu;
$b = 0;
$c = 0;
$d = 0;
$e = 0;
for($a = $rendu; $a >0; $a) {
    if($rendu >= 10){
        $rendu = $rendu - 10;
        $b = $b + 1;
    }elseif ($rendu >= 5){
    $rendu = $rendu - 5;
    $c = $c + 1;
    }elseif ($rendu >= 2){
    $rendu = $rendu - 2;
    $d = $d + 1;
    }elseif ($rendu >= 1){
    $rendu = $rendu - 1;
    $e = $e + 1;
    }
$a = $rendu;
}
echo $b. " billets de 10 € <br>" .$c . " billet de 5€ <br>" .$d. " piece de 2€ <br>" .$e. "  piece de 1€";
?>