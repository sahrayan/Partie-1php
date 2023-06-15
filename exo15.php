<?php 
class Personne{
    private string $_nom;
    private string $_prenom; // permet d'indiquer que la propriété ou la méthode sera accessible à l'intérieur de la classe seulement
    private DateTime $_ddn;

    public function __construct(string $nom, string $prenom, string $ddn){ // mettre en place la valeur des attributs soit en assignant directement des valeurs spécifiques, soit en appelant diverses méthodes qui ont cette fonction
        
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_ddn = new DateTime($ddn);
    }

    public function getNom() { // permet d'indiquer que la propriété ou la méthode sera accessible à l'intérieur mais aussi à l'extérieur de la classe
        return $this->_nom;
    }
    
    public function setNom(string $nom) {
        $this->_nom = $nom;
    }

    public function getPrenom() { // méthodes qui nous permettent d’accéder aux données de ces attributs.
        return $this->_prenom;
    }
    
    public function setPrenom(string $prenom) { //  méthodes qui ne servent qu’à une chose : changer la valeur d’un des attributs de notre classe.
        $this->_prenom = $prenom;
    }
    
    public function getDdn() {
        return $this->_ddn;
    }
    
    public function setDdn(DateTime $ddn) {
        $this->_ddn = $ddn;
    }

    public function calcAge() {
       $today=$this->getDdn();
       $ddn=date_create();
       $age=date_diff($ddn,$today);

       return $age;
    }
    
    public function __toString() { // la méthode ToString permet de décrire un objet sous la forme d'une chaîne de caractères
        $age = $this->calcAge();
        return $this->getNom(). " ". $this->getPrenom()." a " .$age->y. " ans<br>"; 
    }   
}

$p1 = new Personne("Raihani","Rayan","2004-01-27");
$p2 = new Personne("Loukili","Jawad","1967-01-02");
echo $p1;
echo $p2;
?>