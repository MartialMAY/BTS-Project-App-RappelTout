<?php



$_SESSION["utilisateur"]=$_POST["utilisateur"];
$_SESSION["MotDePasse"]=$_POST["MotDePasse"];





try
{
    $connex = new PDO('mysql:localhost;dbname=AppRappelTo', $_SESSION["utilisateur"], $_SESSION["MotDePasse"]);  
    if($_SESSION["utilisateur"] !== ""){
        $user = $_SESSION["MotDePasse"];
        require_once("accueil.php");
    }     
}
catch (PDOException $e)
{
    echo "Erreur ! Utilisateur ou mot de passe incorrect";
    require_once("Page_login.php");  
}

 
    
  


 

?>