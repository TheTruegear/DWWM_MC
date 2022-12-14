<?php
class Triangle{
    private $base;
    private $hauteur;

    public function getBase(){return $this->base;}
    public function getHauteur(){return $this->hauteur;}

    public function __construct($hauteur,$base){
        $this->hauteur = $hauteur;
        $this->base = $base;
    }
    public function __perimetre(){
        return ;
    }
}
?>