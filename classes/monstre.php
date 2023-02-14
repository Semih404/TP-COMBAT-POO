<?php
class Monstre
{
    protected $pv;
    protected $atk;
    protected $arm;
    protected $man;
    protected $regman;    
    protected $comp1;
    protected $comp2;

    public function __construct()
    {
        $this->pv = 1;
        $this->atk = 1;
        $this->arm = 1;
        $this->man = 1;
        $this->regman = 1;
        $this->comp1 = "";
        $this->comp2 = "";
    }
    public function getSante()
    {
        return $this->pv;
    }
    public function getAttaque()
    {
        return $this->atk;
    }
    public function getArmure()
    {
        return $this->arm;
    }
    public function getMana()
    {
        return $this->man;
    }
    public function getManareg()
    {
        return $this->regman;
    }
    public function comp1()
    {
        return $this->comp1;
    }
    public function comp2()
    {
        return $this->comp2;
    }
    public function perdrePV($nb)
    {
        return $this->pv - ($nb-$this->arm);
    }
    public function perdrePVbrut($nb)
    {
        return $this->pv - $nb;
    }
    public function attaquer($p) {
        return "Tu attaque avec une force de " . $this->atk . ", ton adversaire subit " . $p->perdrePV($this->atk) . " dégats";
    }
    public function mort(){
        if ($this->pv >= 0){
            return true;
        }
        else{
            return false;
        }
    }
    public function AttaqueRandom($p){
        $r= random_int(1,5);
        if ($r==1){
            $this->competence1($p);
        }
        else if ($r==2){
            $this->competence2($p);
        }
        else{
            $this->attaquer($p);
        }
    }
}
?>
