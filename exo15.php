<?php 
class Personne{
    private $_nom;
    private $_prenom;
    private $_ddn;

public function __construct($nom, $prenom, $ddn){
    $this->_nom = $nom;
    $this->_prenom = $prenom;
    $this->_ddn = new DateTime($ddn);
}

public function getNom() {
    return $this->_nom;
}

public function getPrenom() {
    return $this->_prenom;
}

public function getAge() {
    $now=new DateTime ();
    $this->_ddn=$this->_ddn->diff($now);
    return $this->_ddn->y ;
}
}

$p1 =new Personne("DUPONT", "Michel", "1980-02-19") ;

$p2 =new Personne("DUCHEMIN", "Alice", "1985-01-17 ") ;


echo $p1->getNom()." ". $p1->getPrenom()." a ".$p1->getage()." ans <br>";

echo $p2->getNom()." ". $p2->getPrenom()." a ".$p2->getage()." ans";
?>