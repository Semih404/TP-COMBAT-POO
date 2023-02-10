<?php
class fantassin extends monstre{
    public $pv = 100;
    public $atk = 8;
    public $arm = 6;
    public $mana = 10;
    public $regman = 1;
    public function competence1($p){
        return "Ton adversaire attaque avec une lance perçante, tu subis " . $p->perdrePVbrut($this->atk) . " dégats";
    }
    public function competence2(){
        return "Ton adversaire augmente son armure de " . $this->arm=$this->arm+3;
    }
}
?>