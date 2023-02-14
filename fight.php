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



$r= random_int(1,3);
if ($r==1){
    $monstre = new Sorcier();
}
else if ($r==2){
    $monstre = new Griffon();
}
else{
    $monstre = new Assassin();
}

while ($joueur->mort() == false && $monstre->mort() == false)
{
    ?>
    <button onclick="<?php $joueur->attaquer($monstre)?>;<?php $monstre->AttaqueRandom($joueur) ?>">Attaquer</button>
    <button onclick="<?php $joueur->competence1($monstre)?>;<?php $monstre->AttaqueRandom($joueur) ?>"><?php echo $joueur->comp1()?></button>
    <button onclick="<?php $joueur->competence2($monstre)?>;<?php $monstre->AttaqueRandom($joueur) ?>"><?php echo $joueur->comp2()?></button>
    <?php 
}

?>
