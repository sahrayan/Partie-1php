<?php 
class personn{
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
    $agemtn=new DateTime();
    $this->
}
}
?>