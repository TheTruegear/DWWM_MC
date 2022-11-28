<?php
use personnage as GlobalPersonnage; 
    class personnage{
        public $nom;
        public $taille;
        public $age;

        public function _construct($name, $taille, $age){
            $this->nom = $nom;
            $this->taille = $taille;
            $this->age = $age;
        }
        public function presentation(){
            echo "Bonjour, je suis $this->nom, ma taille est $this->taille cm, et mon age est $this->age";
        }
}

$personnage1 = new personnage("Mario",165,35);
$personnage2 = new personnage("Luigi",170,31);
$personnage3 = new personnage ("Peach",170,30)
?>