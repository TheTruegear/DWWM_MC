<?php
class Rectangle {
    private $longueur;
    private $largeur;

    public function getLongueur(){return $this->longueur;}
    public function getLargeur(){return $this->largeur;}

    public function __construct($longueur,$largeur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }
}
?>