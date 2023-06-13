<h1> Exercice 11</h1>
<p> Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé 
d’afficher le nombre de marques de voitures présentes dans le tableau.
Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »
</p>
<h2> Résultat</h2>

<?php
$cars = array("Peugeot", "Renault", "BMW","Mercedes");
$nombre =count($cars);
echo "il y a $nombre marques de voiture : <ul>";
foreach ($cars as $cars){
    echo "<li>$cars</li>";
}
echo "</ul>";
?>