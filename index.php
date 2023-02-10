<?php
session_start();

require_once '../config/autoload.php';
Autoloader::register();
require_once '../classes/archer.php';
require_once '../classes/guerrier.php';
require_once '../classes/mage.php';

// Vous pouvez maintenant utiliser vos classes sans avoir à les inclure explicitement
$archer = new archer();
$guerrier = new guerrier();
$mage = new mage();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../config/style.css">
    <title>Document</title>
</head>

<body style="background-image: url('http://twistedsifter.com/wp-content/uploads/2013/05/animated-gifs-of-fighting-game-backgrounds-45.gif'); background-repeat: no-repeat;
   background-position: center center;
   background-size: cover">
    <h1 class="h1-index">Ultimate Fighting Game !</h1>
    <div style="text-align:center">
        <p class="p-index">Entrez votre Pseudo !</p>
        <form action="../classes/HeroesManager.php" method="post">
            <input style="padding-bottom: -40px;" type="text" name="nom">
        </form>
        <form action="../classes/HeroesManager.php" method="post">
            <input type="radio" name="classe" value="<?php $archer ?>" required>Archer<br>
            <input type="radio" name="classe" value="<?php $guerrier ?>" required>Guerrier<br>
            <input type="radio" name="classe" value="<?php $mage ?>" required>Mage<br>
            <input type="submit" value="Soumettre">
        </form>


    </div>
</body>

</html>
