<?php
session_start();

require_once('config/autoload.php');

$classe;
$joueur;
if($_SESSION['classe']== "Archer"){
    $joueur = new Archer();
    $classe = $joueur->toString();
    echo '<img src="' . $joueur->face . '">';
} else if($_SESSION['classe']== "Guerrier"){
    $joueur = new Guerrier();
    $classe = $joueur->toString();
    echo '<img src="' . $joueur->face . '">';
} else if($_SESSION['classe']== "Mage"){
    $joueur = new Mage();
    $classe = $joueur->toString();
    echo '<img src="' . $joueur->face . '">';
};

echo '<img class="istat" src="images/pv.png">'.$joueur->getSante();
echo '<img class="istat" src="images/atk.png">'.$joueur->getAttaque();
echo '<img class="istat" src="images/arm.png">'.$joueur->getArmure();

$r= random_int(1,3);
if ($r==1){
    $monstre = new Sorcier();
    echo '<img src="' . $monstre->face . '">';

}
else if ($r==2){
    $monstre = new Griffon();
    echo '<img src="' . $monstre->face . '">';
}
else{
    $monstre = new Assassin();
    echo '<img src="' . $monstre->face . '">';
}

echo '<img class="istat" src="images/pv.png">'.$monstre->getSante();
echo '<img class="istat" src="images/atk.png">'.$monstre->getAttaque();
echo '<img class="istat" src="images/arm.png">'.$monstre->getArmure();

do{
    
    echo '<input type="button" onclick="'.$joueur->attaquer($monstre). '"onclick="'. $monstre->AttaqueRandom($joueur) .'" value="Attaquer">';
    echo '<input type="button" onclick="'. $joueur->competence1($monstre) .'"onclick="'. $monstre->AttaqueRandom($joueur) .'"value="'.$joueur->comp1().'">';
    echo '<input type="button" onclick="'. $joueur->competence2($monstre) . '"onclick="'. $monstre->AttaqueRandom($joueur) .'"value="'.$joueur->comp2().'">';

   

 
}
while ($joueur->mort() == false && $monstre->mort() == false);
?>
