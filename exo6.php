<h1> Exercice 6</h1>
<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>
<h2> Résultat</h2>

<?php

$prix_unitaire = 9.99;
echo "Prix unitaire : ". $prix_unitaire. " € <br>";
$quantiter = 5;
echo "Quantité : ". $quantiter. "<br>";
$tva = 0.2;
echo " Taux de TVA : ". $tva. "<br>";
$total = $quantiter*$prix_unitaire ;

$tva = $total*$tva;

$facture = $total + $tva;

number_format($facture,2);

echo "Le montant de la facture à régler est de : $facture € <br>";
