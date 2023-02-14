<?php
class guerrier extends personnage{
    public $face = "images/guerrier.gif";
    public $pv = 150;
    public $atk = 8;
    public $arm = 5;
    public $man = 10;
    public $regman = 1;
    public function competence1($m){
        return "Tu inflige une attaque lourde de " . $this->atk+5 . ", ton adversaire subit " . $m->perdrePV($this->atk+5) . " dégats";
    }
    public function competence2(){
        return "Tu augmentes ton armure de " . $this->arm=$this->arm+3;
    }
}
?>
