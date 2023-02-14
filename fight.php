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

while ($joueur->mort() == false && $monstre->mort() == false){
?> <input type="button" name="atk" value="Attaquer"><input type="button" name="comp1" value="<?php $joueur->comp1() ?>"><input type="button" name="comp2" value="<?php $joueur->comp2() ?>">
<?php 
}

?>
