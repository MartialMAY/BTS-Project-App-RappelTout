<?php  
 //login_success.php  
 session_start();  
 if(isset($_SESSION["User"]))  
 {  
      echo '<h3>Login Success, Welcome - '.$_SESSION["User"].'</h3>';  
      echo '<br /><br /><a href="logout.php">Logout</a>';  
 }  
 else  
 {  
      header("location:connection.php");  
 }  
 ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>App RappelTout</title>
</head>
<body>

    <div class="container">
        <div class="form1">
           <div class="deconnexion">
             <?php if (isset($_SESSION["User"])) {
                        $user = $_SESSION["User"];?>

                       <p> Bienvenue <span> <?php echo $user; ?> </span> |  <a href="Deconnexion.php" tite="Deconnexion">  Se déconecter </a> </p>   
                          <?php } else {
                        // Gérez le cas où la clé "User" n'est pas définie
                        echo 'User not logged in. Please log in.';
                    } ?>
           </div>
               
        <div class="form2-3">
            <div class="form2">
                <ul>
                    <li id="Dashboard"><h2>Dashboard</h2></li>
                    <li id="Materiel"><h2>Materiel</h2></li>
                    <li id="Document"><h2>Document</h2></li>
                </ul>
                

            </div>
            <div class="form3">
                <div class="formulaire">
                    <h1>Ajouter un materiel</h1>
                
                    <form action="connection.php" method="POST">
                        <label for="">N°</label>
                        <input type="number" placeholder="" disabled name="id_mat" />

                        <label for="">Reference</label>
                        <input type="text" placeholder="Reference du materiel" name="Ref_mat" />

                        <label for="">Description</label>
                        <input type="text" placeholder="Description du materiel" name="Description_mat" />

                        <label for="">Date de creation </label>
                        <input type="date" placeholder="" name="date_creation" />

                        <label for="">Date d'expiration </label>
                        <input type="date" placeholder="" name="date_exp" />

                        <label for="">Date de rappel </label>
                        <input type="date" placeholder="" name="date_rappel" />

                        <input type="submit" id='submit' value='VALIDER'  >
                    </form>
                </div>
                
            </div>
        </div>
        <div class="form4">
    </div>
    <ul>

    </ul>
</body>
</html>