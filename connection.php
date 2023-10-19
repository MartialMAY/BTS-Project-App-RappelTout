<?php


$login = $_POST["utilisateur"];
$mdp = $_POST["MotDePasse"];
 $_SESSION["user"]=$login;
$_SESSION["mdp"]=$mdp;







try
{
$connex = new PDO('mysql:localhost;dbname=rappelto', $_SESSION["user"], $_SESSION["mdp"]);
        
    
        if($_SESSION["user"] !== ""){
        $user = $_SESSION["user"];
        
    //     echo "<p style='color:green'>Bonjour $user, vous êtes connecté ! \u{1F609} </p>";
      
    require_once("accueil.php");}
      

          
    
        
        
}
catch (PDOException $e)
    {   $e="identifiant ou mot de passe incorrect ! 
        ";
     
            echo '<script>alert("Erreur ! Utilisateur ou mot de passe incorrect \u{1F625}")</script>';//. );
            require_once("Page_login.php");
          
            
    }

    
  


 

?>