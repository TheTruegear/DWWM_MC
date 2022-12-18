<?php
class Player{
    private $name;
    // private $hp;
    // private $str;
    private $score;

    public function __construct($name,$hp,$str,$score){
        $this->name = $name;
        $this->hp = $hp;
        $this->str = $str;
        $this->score = $score;
    }
    public function getName(){return $this->name;}
    public function getHp(){return $this->hp;}
    public function getStr(){return $this->str;}
    public function getScore(){return $this->score;}
}
?>