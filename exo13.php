<h1> Exercice 13</h1>
<p> Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales
</p>
<h2> Résultat</h2>

<?php

$note = array( 10 , 12 , 8 , 19 , 3 , 16 , 11 , 13 , 9);
$resultat = 0;
echo "Les notes obtenues par l’élève sont :  ";
for($i = 0; $i < count($note); $i++) {
    echo $note[$i]. " ";
    $resultat = $resultat + $note[$i];
}
$moyen = $resultat / count($note);
echo "<br> Sa moyenne générale est donc de : ".number_format($moyen,2);

?>

<?php

$note = array( 10 , 12 , 8 , 19 , 3 , 16 , 11 , 13 , 9);
echo "Les notes obtenues par l’élève sont : " ;

// foreach($note as $key => $valeur) {
//     echo $valeur. " " ;
// }

echo implode(" ", $note);
$moyen = array_sum( $note ) / count($note);
echo "<br> Sa moyenne générale est donc de : ".number_format($moyen,2);

?>