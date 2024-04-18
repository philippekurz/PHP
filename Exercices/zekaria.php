<?php

// Classe Utilisateur 
Class Utilisateur {
    // Membres privés 
    private $_nom; 
    private $_prenom; 
    private $_email; 
    private $_motDePasse; 

    // Attribut (public)
    public $age; 

    // Méthode (setter, mutateur)
    public function setNom($nom) {
        $this->_nom = $nom; 
    }
    public function getNom() {
        return $this->_nom; 
    }

    public function setPrenom($prenom) {
        $this->_prenom = $prenom; 
    
    }
}

$utilisateur1 = new Utilisateur();
$utilisateur1->setNom("Dupont");
$utilisateur1->setPrenom("Jean");

echo $utilisateur1->getNom();

?>