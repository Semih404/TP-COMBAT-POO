<?php
class Assassin extends Monstre{
    public $nom = 'Assassin';
    public $face = "images/assassin.gif";
    public $pv = 100;
    public $atk = 12;
    public $arm = 1;
    public $mana = 10;
    public $regman = 1;
    public function competence1($p){
        $r= random_int(1,6);
        return "Ton adversaire attaque avec une dague empoisonnée, tu subis " . $p->perdrePV($this->atk) . " dégats + ". $p->perdrePVbrut($r) . " dégats de poison";
    }
    public function competence2(){
        return "Ton adversaire augmente son attaque de " . $this->atk=$this->atk+3;
    }
    }
}
?>
