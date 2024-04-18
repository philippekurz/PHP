<?php

// Classe Utilisateur 
Class Utilisateur
    // Membres privés 
    private $_nom; 
    private $_prenom; 
    private $_email; 
    private $_motDePasse; 

    // Attribut (public)
    public $age; 

    // Méthode (setter, mutateur)
    public function setNom($nom) {
        $_nom = $nom; 
    }

    public function setPrenom($prenom) {
        $_prenom = $prenom; 
    
    }
}