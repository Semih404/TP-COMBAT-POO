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
}
?>
