<?php



$_SESSION["User"]=$_POST["utilisateur"];
$_SESSION["Password"]=$_POST["MotDePasse"];





try
{
$connex = new PDO('mysql:localhost;dbname=AppRappelTo', $_POST["utilisateur"], $_POST["MotDePasse"]);
        
    
        if($_POST["utilisateur"] !== ""){
        $user = $_POST["utilisateur"];
        
 
      
    require_once("accueil.php");}
      

          
    
        
        
}
catch (PDOException $e)
    {   $e="identifiant ou mot de passe incorrect ! ";
     
            echo '<script>alert("Erreur ! Utilisateur ou mot de passe incorrect \u{1F625}")</script>';
            require_once("Page_login.php");
          
            
    }

 
    
  


 

?>