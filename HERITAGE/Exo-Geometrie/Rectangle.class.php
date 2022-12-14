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
    public function __perimetre(){
        return ($this->longueur + $this->largeur) * 2;
    }
    public function __aire(){
        return $this->longueur * $this->largeur;
    }
    public function __carre(){
        if ($this->longueur == $this->largeur){
            return "Carré";
        }
        else return "Pas Carré";
    }
    public function __afficherRectangle(){
        return $this->longueur . " " . $this->largeur . " " . $this->__perimetre() . " " . $this->__aire() . " " . $this->__carre();
    }
}
?>