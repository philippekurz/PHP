<?php
// Classe Utilisateur
class Utilisateur {
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
        // $this représente l'instance
        // Si on utilise $this, on ne met pas le $ du membre
    }

    public function setPrenom($prenom) {
        $this->_prenom = $prenom;
    }

    // Méthode (getter, accesseur)
    public function getNom() {
        return $this->_nom;
    }

    public function getPrenom() {
        return $this->_prenom;
    }

    public function nomComplet() {
        return "<br>$this->_prenom $this->_nom";
    }
} // Fin classe Utilisateur

?>


<?php
$utilisateur1 = new Utilisateur();
$utilisateur2 = new Utilisateur();

$utilisateur1->setNom("Dupont");
$utilisateur1->setPrenom("Pierre");

echo $utilisateur1->nomComplet();

$utilisateur2->setNom("Durand");
$utilisateur2->setPrenom("Marc");

echo $utilisateur2->nomComplet();

// Pas de $ pour un membre de l'objet
$utilisateur1->age=5;
echo $utilisateur1->age;


?>