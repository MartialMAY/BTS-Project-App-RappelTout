<?php

$_SESSION["User"]=$_POST['utilisateur'];
$_SESSION["Password"]=$_POST['MotDePasse'];



try {
    
    $connexion = new PDO("mysql:host=localhost;dbname=AppRappelTo", $_SESSION["User"], $_SESSION["Password"]);


    echo "Données insérées avec succès.";
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

