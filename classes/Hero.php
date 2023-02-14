<?php
class Hero
{
    protected $pv;
    protected $atk;
    protected $arm;
    protected $man;
    protected $regman;

    public function __construct()
    {
        $this->pv = 1;
        $this->atk = 1;
        $this->arm = 1;
        $this->man = 1;
        $this->regman = 1;
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
    public function perdrePV($nb)
    {
        return $this->pv - ($nb-$this->arm);
    }
    public function perdrePVbrut($nb)
    {
        return $this->pv - $nb;
    }
    public function attaquer($m) {
        return "Tu attaque avec une force de " . $this->atk . ", ton adversaire subit " . $m->perdrePV($this->atk) . " dégats";
    }
}
?>

