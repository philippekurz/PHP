<?php
class Voiture {
    private $_marque;
    private $_modele;
    private $_kms;
    public $couleur;

    public function setMarque($marque) {
        $this->_marque = $marque;
    }

    public function getMarque() {
        return $this->_marque;
    }

    public function setModele($modele) {
        $this->_modele = $modele;
    }

    public function getModele() {
        return $this->_modele;
    }

    public function setKms($kms) {
        $this->_kms = $kms;
    }

    public function getKms() {
        return $this->_kms;
    }

    public function toString() {
        return "$this->_marque<br>$this->_modele<br>$this->couleur<br>$this->_kms"; 
    }
}


$voiture1 = new Voiture();
$voiture1->setMarque("Renault");
$voiture1->setModele("4L");
$voiture1->setKms(623156);
$voiture1->couleur = "Blanc";
echo $voiture1->toString();
?>