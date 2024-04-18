<?php
class Voiture {
    private $_marque;
    private $_modele;
    private $_kms;
    public $couleur;

    public function __construct($marque, $modele, $kms, $couleur) {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_kms = $kms;
        $this->couleur = $couleur;
    }

    // Opérations de nettoyage
    public function __destruct() {
        echo "__destruct";
    }

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
        return "<br>$this->_marque<br>$this->_modele<br>$this->couleur<br>$this->_kms"; 
    }
}


$voiture1 = new Voiture("Renault", "4L", 562314, "Blanc");
// $voiture1->setMarque();
// $voiture1->setModele("4L");
// $voiture1->setKms(623156);
// $voiture1->couleur = "Blanc";
echo $voiture1->toString();
?>