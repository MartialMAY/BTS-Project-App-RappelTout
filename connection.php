<?php

// Connexion à la base de données
session_start();

// Récupération des données du formulaire
$nom = $_POST["utilisateur"];
$mot_de_passe = $_POST["MotDePasse"];

// Vérification des informations de l'utilisateur

try {
    $connex = new PDO('mysql:host=localhost;dbname=rappelto', $nom, $mot_de_passe);
} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
    exit();
}



// Vérification des informations de l'utilisateur
$query = $connex->prepare('SELECT * FROM login WHERE user = :user AND password = :password');
$query->execute(array('user' => $nom, 'password' => $mot_de_passe));

if ($query->rowCount() == 1) {
    // L'utilisateur est authentifié
    $_SESSION['User'] = $nom;
    header('Location: accueil.php');
} else {
    // L'utilisateur n'est pas authentifié
    echo 'Nom d\'utilisateur ou mot de passe incorrect.';
}

 





// session_start();

// if (!isset($_POST["utilisateur"], $_POST["MotDePasse"])) {
//     // Vérifiez si les champs ont été correctement remplis
//     exit('Veuillez remplir à la fois le nom d\'utilisateur et le mot de passe!');
// }

// $login = $_POST["utilisateur"];
// $mdp = $_POST["MotDePasse"];

// // Établissez une connexion à la base de données
// try {
//     $connex = new PDO('mysql:host=localhost;dbname=rappelto', $_POST["utilisateur"], $_POST["MotDePasse"]);
//     $connex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     // Gérez les erreurs de connexion ici (par exemple, affichez un message d'erreur)
//     echo 'Erreur de connexion : ' . $e->getMessage();
//     exit;
// }

// // Préparez et exécutez la requête SQL
// $stmt = $connex->prepare('SELECT id, password FROM login WHERE user = :user');
// $stmt->bindParam(':user', $login, PDO::PARAM_STR);
// $stmt->execute();
// $row = $stmt->fetch(PDO::FETCH_ASSOC);

// if ($row) {
//     // Vérifiez le mot de passe
//     if (password_verify($mdp, $row['password'])) {
//         // Mot de passe correct, enregistrez l'utilisateur dans la session
//         $_SESSION['User'] = $login;
//         $_SESSION['id'] = $row['id'];
//         // Redirigez l'utilisateur vers la page d'accueil ou toute autre page après la connexion réussie
//         header('Location: accueil.php');
//         exit;
//     } else {
//         // Mot de passe incorrect
//         echo 'Nom d\'utilisateur et/ou mot de passe incorrect(s) !';
//     }
// } else {
//     // Nom d'utilisateur incorrect
//     echo 'Nom d\'utilisateur et/ou mot de passe incorrect(s) !';
// }

// // Fermez la connexion à la base de données
// $connex = null;
    
  


 

?>