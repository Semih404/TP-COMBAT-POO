<?php

class Sorcier extends Monstre{
    public $face = "images/sorcier.gif";
    public $pv = 100;
    public $atk = 6;
    public $arm = 0;
    public $man = 20;
    public $regman = 3;
    public $comp1 = "Eclat magique";
    public $comp2 = "Soin";
    public function competence1($p){
        return "Ton adversaire attaque avec une magie de 20, tu subit " . $p->perdrePVbrut(20) . " dégats";
    }
    public function competence2($p){
        $this->pv = $this->pv+30;
        return "Ton adversaire se soigne 30 pv";
    }
}
?>
