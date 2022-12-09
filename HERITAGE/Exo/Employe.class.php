<?php
class Employe {
    protected $nom;
    protected $prenom;
    protected $secu;
    protected $salaire;
    protected $job;

    public function __construct($nom,$prenom,$secu,$salaire,$job){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->secu = $secu;
        $this->salaire = $salaire;
        $this->job = $job;
    }
    public function getNom(){return $this->$nom;}
    public function getPrenom(){return $this->$prenom;}
    public function getSecu(){return $this->$secu;}
    public function getSalaire(){return $this->$salaire;}
    public function getJob(){return $this->$job;}

    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function setSecu($secu){
        $this->secu = $secu;
    }
    public function setSalaire($salaire){
        $this->salaire = $salaire;
    }
    public function setJob($job){
        $this->job = $job;
    }
}
?>