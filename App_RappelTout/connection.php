<?php

session_start();

$_SESSION["User"]=$_POST["utilisateur"];
$_SESSION["Password"]=$_POST["MotDePasse"];

$msg = "veuiller saisir à nouveau";



try
{
$connex = new PDO('mysql:localhost;dbname=AppRappelTo', $_POST["utilisateur"], $_POST["MotDePasse"]);
        
    
        if($_POST["utilisateur"] !== ""){
        $user = $_POST["utilisateur"];
        
    //     echo "<p style='color:green'>Bonjour $user, vous êtes connecté ! \u{1F609} </p>";
      
    require_once("accueil.php");}
      

          
    
        
        
}
catch (PDOException $e)
    {   $e="identifiant ou mot de passe incorrect ! 
        ";
     
            echo '<script>alert("Erreur ! Utilisateur ou mot de passe incorrect \u{1F625}")</script>';//. );
            require_once("Page_login.php");
          
            
    }

    $ref = $_POST["Ref_mat"];
    $description = $_POST["Description_mat"];
    $date_creation = $_POST["date_creation"];
    $date_exp = $_POST["date_exp"];
    $date_rappel = $_POST["date_rappel"];

  
   $Insert_into = $connex->prepare("INSERT INTO Materiel (Reference, Description, Date_creation, Date_Exp, Date_Rappel) VALUES (:Reference, :Description, :Date_creation, :Date_Exp, :Date_Rappel)");
  
   
    
    $Insert_into->bindParam(':Reference', $ref);
    $Insert_into->bindParam(':Description', $description);
    $Insert_into->bindParam(':Date_creation', $date_creation);
    $Insert_into->bindParam(':Date_Exp', $date_exp);
    $Insert_into->bindParam(':Date_Rappel', $date_rappel);
    $Insert_into->execute();
    if ($Insert_into->execute()) {
    echo "Nouveau enregistrement créé avec succès";
    } else {
    echo "Impossible de créer l'enregistrement";
    }
    
  


 

?>