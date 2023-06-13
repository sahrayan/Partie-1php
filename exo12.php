<h1> Exercice 12</h1>
<p> A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG
</p>
<h2> Résultat</h2>

<?php
$nom= ['Mickael'=> 'FRA', 'Virgile' => 'ESP', 'Marie-Claire' => 'ENG'];
ksort($nom);
foreach($nom as $a => $valeur){
    if($valeur=='FRA'){
        echo "Salut $a <br>";
    }elseif ($valeur=='ESP'){
        echo "Hola $a <br>";
    }elseif ($valeur=='ENG'){
        echo "Hello $a <br>";
    }
}

?>