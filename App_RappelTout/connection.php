<?php

$_SESSION["User"]=$_POST['utilisateur'];
$_SESSION["Password"]=$_POST['MotDePasse'];



try
{
$connex = new PDO('mysql:localhost;dbname=RappelTo', $_SESSION["User"], $_SESSION["Password"]);
        
    
        if($_SESSION["User"] !== ""){
        $user = $_SESSION["User"];
        echo '<script>alert("Bonjour '.$user.', vous êtes connecté ! \u{1F609}")</script>';
    //     echo "<p style='color:green'>Bonjour $user, vous êtes connecté ! \u{1F609} </p>";
        require_once("index.php");}
      

          
    

        
}
catch (PDOException $e)
    {   
            echo '<script>alert("Erreur ! Utilisateur ou mot de passe incorrect \u{1F625}")</script>';//. $e->getMessage());
            require_once("Page_login.php");
    }
    return $connex;


 

?>