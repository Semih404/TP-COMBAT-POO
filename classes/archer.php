<?php
class Archer extends Hero{
    public $face = "images/archer.gif";
    public $pv = 100;
    public $atk = 13;
    public $arm = 2;
    public $man = 10;
    public $regman = 1;
    public function competence1($m){
        return "Tu attaque avec une flèche perforante, ton adversaire subit " . $m->perdrePVbrut($this->atk) . " dégats";
    }
    public function competence2($m){
        $r= random_int(1,5);

        return "Tu attaque avec des flèches ".$r." fois , ton adversaire subit " . $m->perdrePV($this->atk*$r) . " dégats";
    }
    public function toString() {
        return "Archer";
    }
}
?>
