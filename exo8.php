<h1> Exercice 8</h1>
<p> Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la 
forme : </p>
<h2> Résultat</h2>

<?php
$nombre = 5;
echo "Table de $nombre <br>";
for($i =0 ; $i<=10; $i++){
    echo $nombre . ' x ' . $i . ' = ' . $nombre*$i. '<br>';
 }
?>

<?php
$num = 4;
$i = 0;
echo "<br>Table de $num <br>";
while ($i <= 10) {
  $resultat = $num * $i;
  echo "$num x $i = $resultat <br>";
  $i++;
}
?>