<h1> Exercice 7</h1>
<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans
Pupille : entre 8 et 9 ans
Minime : entre 10 et 11 ans
Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser.</p>
<h2> Résultat</h2>

<?php
$age = 19;

if ($age == 6 || $age == 7) {
    echo "L’enfant qui a $age ans appartient à la Catégorie « Poussin ».";
}elseif($age == 8 || $age == 9) {
    echo "L’enfant qui a $age ans appartient à la Catégorie « Pupille ».";
}elseif($age == 10 || $age == 11) {
    echo "L’enfant qui a $age ans appartient à la Catégorie « Minime ».";
}elseif($age >= 12 && $age <= 17) {
    echo "L’enfant qui a $age ans appartient à la Catégorie « Cadet ».";
}
elseif($age >=18) {
    echo "L'enfant qui a $age appartien  à la Catégorie « Senior ».";
}
    

?>