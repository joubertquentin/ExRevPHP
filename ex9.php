<?php

abstract class Media {
    protected $titre;
    protected $auteur;
    protected static $compteur = 0; 

    public function __construct($titre, Auteur $auteur) {
        $this->setTitre($titre);
        $this->setAuteur($auteur);
        self::$compteur++;  
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function setAuteur(Auteur $auteur) {
        $this->auteur = $auteur;
    }

    public static function compterMedias() {
        return self::$compteur;
    }

    abstract public function afficherDetails();
}

class Auteur {
    private $nom;
    private $prenom;

    public function __construct($nom, $prenom) {
        $this->setNom($nom);
        $this->setPrenom($prenom);
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function __toString() {
        return $this->prenom . " " . $this->nom;
    }
}


class Livre extends Media {
    private $anneePublication;

    public function __construct($titre, Auteur $auteur, $anneePublication) {
        parent::__construct($titre, $auteur);  
        $this->setAnneePublication($anneePublication);
    }

    public function setAnneePublication($anneePublication) {
        $this->anneePublication = $anneePublication;
    }

    public function afficherDetails() {
        return "Livre : '{$this->titre}', écrit par {$this->auteur}, publié en {$this->anneePublication}.";
    }
}


class Ebook extends Media {
    private $tailleFichier;  

    public function __construct($titre, Auteur $auteur, $tailleFichier) {
        parent::__construct($titre, $auteur);
        $this->setTailleFichier($tailleFichier);
    }

    public function setTailleFichier($tailleFichier) {
        $this->tailleFichier = $tailleFichier;
    }

    public function afficherDetails() {
        return "Ebook : '{$this->titre}', écrit par {$this->auteur}, taille du fichier : {$this->tailleFichier} Mo.";
    }
}


class Audiobook extends Media {
    private $duree;  

    public function __construct($titre, Auteur $auteur, $duree) {
        parent::__construct($titre, $auteur);
        $this->setDuree($duree);
    }

    public function setDuree($duree) {
        $this->duree = $duree;
    }

    public function afficherDetails() {
        return "Audiobook : '{$this->titre}', écrit par {$this->auteur}, durée : {$this->duree} minutes.";
    }
}


$auteur1 = new Auteur("Hugo", "Victor");
$auteur2 = new Auteur("Tolkien", "J.R.R.");
$auteur3 = new Auteur("Rowling", "J.K.");
$livre1 = new Livre("Les Misérables", $auteur1, 1862);
$ebook1 = new Ebook("Le Seigneur des Anneaux", $auteur2, 5);
$audiobook1 = new Audiobook("Harry Potter et la Chambre des Secrets", $auteur3, 720);
echo $livre1->afficherDetails() . "\n";
echo "<br>";
echo $ebook1->afficherDetails() . "\n";
echo "<br>";
echo $audiobook1->afficherDetails() . "\n";
echo "<br>";


echo "Nombre total de médias : " . Media::compterMedias() . "\n";

?>
