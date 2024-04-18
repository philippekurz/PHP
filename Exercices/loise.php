
<?php
    class Voiture {
        public $couleur;
        private $_marque;
        private $_modele;
        private $_km;

        public function setMarque($marque){
            $this->_marque = $marque;
        }

        public function setModele($modele){
            $this->_modele = $modele;
        }

        public function setKm($km){
            $this->_km = $km;
        }

        public function getModele(){
            return $this->_modele;
        }

        public function getMarque(){
            return $this->_marque;

        }
        
        public function getKm(){
            return $this->_Km;
        }

        public function modeleComplet(){
            return"$this->_marque $this->_modele $this->_km";
        }

    }
 

?> 

<?php

$voiture1 = new Voiture();

$voiture1->setMarque("Toyota");
$voiture1->setModele("Aygo");
$voiture1->setKm("134 897 km ");
$voiture1->couleur = "noire";
echo $voiture1->modeleComplet();
echo $voiture1->couleur;




?>

