<?php
class ogre extends monstre{
    public $pv = 170;
    public $atk = 10;
    public $arm = 0;
    public $man = 5;
    public $regman = 1;
    public function competence1($p){
        return "Ton adversaire inflige une attaque lourde de " . $this->atk+5 . ", tu subis " . $p->perdrePV($this->atk+5) . " dégats";
    }
    public function competence2($p){
        $r= random_int(1,9);
        if ($r==1)
        {
            return "Ton adversaire inflige quatre attaques lourdes de " . $this->atk+5 . ", tu subis " . $p->perdrePV(($this->atk+5)*4) . " dégats";
        }
        else if ($r==2)
        {
            return "Ton adversaire inflige trois attaques lourdes de " . $this->atk+5 . ", tu subis " . $p->perdrePV(($this->atk+5)*3) . " dégats"; 
        }
        else if ($r==3)
        {
            return "Ton adversaire inflige trois attaques lourdes de " . $this->atk+5 . ", tu subis " . $p->perdrePV(($this->atk+5)*3) . " dégats"; 
        }
        else if ($r==4)
        {
            return "Ton adversaire inflige deux attaques lourdes de " . $this->atk+5 . ", tu subis " . $p->perdrePV(($this->atk+5)*2) . " dégats"; 
        }
        else if ($r==5)
        {
            return "Ton adversaire inflige deux attaques lourdes de " . $this->atk+5 . ", tu subis " . $p->perdrePV(($this->atk+5)*2) . " dégats"; 
        }
        else if ($r==6)
        {
            return "Ton adversaire inflige deux attaques lourdes de " . $this->atk+5 . ", tu subis " . $p->perdrePV(($this->atk+5)*2) . " dégats"; 
        }
        else if ($r==7)
        {
            return "Ton adversaire inflige une attaque lourde de " . $this->atk+5 . ", tu subis " . $p->perdrePV($this->atk+5) . " dégats";
        }
        else if ($r==8)
        {
            return "Ton adversaire inflige une attaque lourde de " . $this->atk+5 . ", tu subis " . $p->perdrePV($this->atk+5) . " dégats";
        }
        else if ($r==9)
        {
            return "Ton adversaire inflige une attaque lourde de " . $this->atk+5 . ", tu subis " . $p->perdrePV($this->atk+5) . " dégats";
        }
    }
}
?>