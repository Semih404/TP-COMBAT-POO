<?php
session_start();

require_once('config/autoload.php');

$archer = new Archer();
$guerrier = new Guerrier();
$mage = new Mage();

$classe;

if($_SESSION['classe']== "Archer"){
    $classe = $archer->toString();
    echo '<img src="' . $archer->face . '">';
} elseif($_SESSION['classe']== "Guerrier"){
    $classe = $guerrier->toString();
    echo '<img src="' . $guerrier->face . '">';
} elseif($_SESSION['classe']== "Mage"){
    $classe = $mage->toString();
    echo '<img src="' . $mage->face . '">';
};

$joueur =  $_SESSION['nom'] . $classe;

echo $joueur;

$r= random_int(1,3);
if ($r==1){
    $monstre = new Sorcier();
}
else if ($r==2){
    $monstre = new Griffon();
}
else{
    $monstre = new assassin();
}


?>
