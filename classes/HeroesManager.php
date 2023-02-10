<?php 
session_start();
include '../config/db.php';


if (isset($_POST['nom']) && !empty($_POST['nom'] ))
{
    $isSuccess;
    if(isset($_POST['nom']) && !empty($_POST['nom'])) {
        
        try {
            // Test si le username existe
            $nomStmnt = $db->prepare('SELECT * FROM heros WHERE nom = ?');
            $nomStmnt->execute([
                $_POST['nom']
            ]);

            $nom = $nomStmnt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Une erreur est survenue : " . $e->getMessage();
        }
    }};
        if(empty($nom)) {

            try {
            // SI l'utilisateur n'existe pas 
            // On le crée
                $nomStmnt = $db->prepare('INSERT INTO heros(nom) VALUES (?)');
                $isSuccess = $nomStmnt->execute([
                    $_POST['nom'],
                ]);
            } catch (PDOException $e) {
                echo "Une erreur est survenue lors de l'insertion de l'utilisateur : " . $e->getMessage();
            }
        }


        if (isset($_POST['classe']) && !empty($_POST['classe'] ))
{
    $isSuccess;
    if(isset($_POST['classe']) && !empty($_POST['classe'])) {
        
        try {
            // Test si le username existe
            $classeStmnt = $db->prepare('SELECT * FROM heros WHERE classe = ?');
            $classeStmnt->execute([
                $_POST['classe']
            ]);

            $classe = $classeStmnt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Une erreur est survenue : " . $e->getMessage();
        }
    }};
        if(empty($classe)) {

            try {
            // SI l'utilisateur n'existe pas 
            // On le crée
                $classeStmnt = $db->prepare('INSERT INTO heros(classe) VALUES (?)');
                $isSuccess = $classeStmnt->execute([
                    $_POST['classe'],
                ]);
            } catch (PDOException $e) {
                echo "Une erreur est survenue lors de l'insertion de l'utilisateur : " . $e->getMessage();
            }
        }

                if (isset($_POST['classe']) && !empty($_POST['classe'] ))
{
    $isSuccess;
    if(isset($_POST['classe']) && !empty($_POST['classe'])) {
        
        try {
            // Test si le username existe
            $classeStmnt = $db->prepare('SELECT * FROM heros WHERE classe = ?');
            $classeStmnt->execute([
                $_POST['classe']
            ]);

            $classe = $classeStmnt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Une erreur est survenue : " . $e->getMessage();
        }
    }};
        if(empty($classe)) {

            try {
            // SI l'utilisateur n'existe pas 
            // On le crée
                $classeStmnt = $db->prepare('INSERT INTO heros(classe) VALUES (?)');
                $isSuccess = $classeStmnt->execute([
                    $_POST['classe'],
                ]);
            } catch (PDOException $e) {
                echo "Une erreur est survenue lors de l'insertion de l'utilisateur : " . $e->getMessage();
            }
        }
        
        $vivantStmnt = $db->prepare('INSERT INTO heros(vivant) VALUES (?)');
        $isSuccess = $vivantStmnt->execute([
            true,]);

        $_SESSION['classe'] = $_POST['classe'];
        $_SESSION['nom'] = $_POST['nom'];
        $_SESSION['vivant'] = true;
        
        header('Location:../fight.php');
        ?>
