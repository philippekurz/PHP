
<?php 
class Voiture {
    private $_marque;
    private $_modele;
    private $_km;
    public $couleur;

    public function setMarque($marque) {
       $this->_marque = $marque; 
    }
    public function setModele($modele) {
        $this->_modele = $modele; 
    }
    public function setKm($km) {
        $this->_km = $km; 
    }
    public function getMarque() {
        return $this->_marque; 
    }
    public function getModele() {
        return $this->_modele; 
    }
    public function getKm() {
        return $this->_km; 
    }
    public function getInfo() { 
        return $this->getMarque() . " " . $this->getModele() . " " . $this->getKm();
    }
}

$voiture1 = new Voiture();
$voiture1->setMarque("Audi"); 
$voiture1->setModele("A5"); 
$voiture1->setKm("100 000"); 

echo $voiture1->getInfo(); 
?>