<?php
class Voiture extends Vehicule {
    private $_nb_portes;
    private $_cylindree;
    private $_volume_coffre;

    function toString() {
        echo "Je suis une voiture " . $this->_couleur;
    }
}

class Velo extends Vehicule {
    private $assistance_electrique;
}

class Bateau extends Vehicule {
    private $_voiles;
    private $_nb_cabines;
}

class Vehicule {
    private $_marque;
    private $_modele;
    private $_couleur;
    private $_vitesse;
}

class User {
    protected $_nom;

    public function __construct($nom) {
        $this->_nom = $nom;
    }

    // Setter Nom
    public function setNom($nom) {
        $this->_nom = $nom;
    }

    // Getter Nom
    public function getNom() {
        return 'User : ' . $this->_nom;
    }

}

class Admin extends User {
    private $_password;

    public function __construct($nom, $password) {
        parent::__construct($nom);
        $this->_password = $password;
    }

    // Setter Password
    public function setPassword($password) {
        $this->_password = $password;
    }

    // Getter Password
    public function getPassword() {
        return $this->_password;
    }

    public function toString() {
        // $this->_nom est protected dans la classe parent
        // $this->_password est privé dans la classe
        return $this->_nom . ' ' . $this->_password;
    }

    //Surcharge de la méthode getNom
    public function getNom() {
        return 'Admin-' . parent::getNom();   // Réutilisation du getter de la classe parente
    }    
}



$user1 = new User('Dupont');
$user2 = new Admin('Durand', '1234');

echo '<br>';
echo  $user1->getNom(); // Utilise le getter pour afficher le nom
echo '<br>';

//echo 'Admin : ' . $user2->toString(); // Utilise le getter pour afficher le nom
echo $user2->getNom(); // Utilise le getter pour afficher le nom

?>