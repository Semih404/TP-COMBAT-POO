<?php
class Mage extends Hero{
    public $face = "images/mage.gif";
    public $pv = 100;
    public $atk = 6;
    public $arm = 3;
    public $man = 20;
    public $regman = 2;
    public function competence1($m){
        return "Tu attaque avec une magie de 20, ton adversaire subit " . $m->perdrePVbrut(20) . " dégats";
    }
    public function competence2($m){
        $r= random_int(1,50);

        return "Tu attaque avec une magie de " .$r.", ton adversaire subit " . $m->perdrePVbrut($r) . " dégats";
    }
    public function toString() {
        return "Mage";
    }
}
?>
