<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="styles.css">
    <title>Formulaire</title>
</head>
<body>
    <div class="form-connect">
        <form action="connection.php" method="POST">
            
                    <h1>Connexion</h1>

                    
                        <label><b>Identiant</b></label>
                        <input type="text" for="utilisateur" placeholder="Entrer votre identifiant" name="utilisateur" required>
                    

                   
                         <label><b>Mot de passe</b></label>
                    <input type="password" for="MotDePasse" placeholder="Entrer votre mot de passe" name="MotDePasse" required>
                    

                   
                    
                        <input type="submit" id='submit' value='Se connecter' name="btn" >
                    

                    
                       
                </form>
    </div>
       

</body>
</html>