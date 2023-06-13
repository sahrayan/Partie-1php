<h1> Exercice 9</h1>
<p> Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>
<h2> Résultat</h2>

<?php

$age= 18;
$sex= "F";

if ($age > 20 && $sex == "M") {
    echo "La personne est imposable.";
} elseif($age >= 18 && $age <=35 && $sex == "F") {
    echo "Le personne est  imposable.";
}else echo "La personne n'est pas imposable.";

?>
<?php
$age= 14;
$sex= "M";

if($age > 20 && $sex == "M" || $age >= 18 && $age <=35 &&$sex == "F"){
    echo "<br>La personne est imposable.";
}else echo "<br>La personne n'est pas imposable.";
?>
