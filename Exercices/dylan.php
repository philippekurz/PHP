
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
  <?php
  
    class Voiture {
        // Déclaration des propriétés privées
        private $marque;
        private $modele;
        private $annee;
    
        // Constructeur pour initialiser les propriétés
        public function __construct($marque, $modele, $annee) {
            $this->marque = $marque;
            $this->modele = $modele;
            $this->annee = $annee;
        }
    
        // Getter pour la marque
        public function getMarque() {
            return $this->marque;
        }
    
        // Setter pour la marque
        public function setMarque($marque) {
            $this->marque = $marque;
        }
    
        // Getter pour le modèle
        public function getModele() {
            return $this->modele;
        }
    
        // Setter pour le modèle
        public function setModele($modele) {
            $this->modele = $modele;
        }
    
        // Getter pour l'année
        public function getAnnee() {
            return $this->annee;
        }
    
        // Setter pour l'année
        public function setAnnee($annee) {
            $this->annee = $annee;
        }
    }
    
    // Utilisation de la classe
    $maVoiture = new Voiture("Toyota", "Corolla", 2021);
    echo "Marque: " . $maVoiture->getMarque() . "\n";
    echo "Modèle: " . $maVoiture->getModele() . "\n";
    echo "Année: " . $maVoiture->getAnnee() . "\n";
    
    // Modification des propriétés
    $maVoiture->setMarque("Honda");
    $maVoiture->setModele("Civic");
    $maVoiture->setAnnee(2022);
    
    echo "Nouvelle marque: " . $maVoiture->getMarque() . "\n";
    echo "Nouveau modèle: " . $maVoiture->getModele() . "\n";
    echo "Nouvelle année: " . $maVoiture->getAnnee() . "\n";
  ?>

</body>
</html>
