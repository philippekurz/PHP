<?php 
    class Voiture {

        //Membres privés
        private $_marque;  // Propriété privée marque
        private $_modele;  // Propriété privée modele
        private $_km;      // Propriété privée km

        //Attribut publique
        public $couleur;  // Propriété publique couleur
    
        // Méthode -> Setter pour la marque
        public function setMarque($marque) {
            $this->_marque = $marque;
        }
    
        // Méthode -> Getter pour la marque
        public function getMarque() {
            return $this->_marque;
        }
    
        // Setter pour le modele
        public function setModele($modele) {
            $this->_modele = $modele;
        }
    
        // Getter pour le modele
        public function getModele() {
            return $this->_modele;
        }
    
        // Setter pour les kilomètres
        public function setKm($km) {
            $this->_km = $km;
        }
    
        // Getter pour les kilomètres
        public function getKm() {
            return $this->_km;
        }
    }
    
    // Instanciation de la voiture
    $Voiture1 = new Voiture();
    
    // Renseignement des propriétés
    $Voiture1->couleur = "Rouge"; // Propriété publique couleur
    $Voiture1->setMarque("Toyota");
    $Voiture1->setModele("Corolla");
    $Voiture1->setKm(50000);
    
    // Accès aux propriétés

    echo "Propriétés de la voiture : <br>";
    echo "<br>";
    echo "Couleur : " . $Voiture1->couleur . "<br>";
    echo "Marque : " . $Voiture1->getMarque() . "<br>";
    echo "Modèle : " . $Voiture1->getModele() . "<br>";
    echo "Kilomètrage : " . $Voiture1->getKm() . "<br>";    
?>