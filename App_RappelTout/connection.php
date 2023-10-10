<?php



$_SESSION["utilisateur"]=$_POST["utilisateur"];
$_SESSION["MotDePasse"]=$_POST["MotDePasse"];





try
{
    $connex = new PDO('mysql:localhost;dbname=AppRappelTo', $_SESSION["utilisateur"], $_SESSION["MotDePasse"]);  
    if($_POST["utilisateur"] !== ""){
        $user = $_POST["utilisateur"];
        require_once("accueil.php");
    }     
}
catch (PDOException $e)
{
    echo "Erreur ! Utilisateur ou mot de passe incorrect";
    require_once("Page_login.php");  
}

 
    
  


 

?>