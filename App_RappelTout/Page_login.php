<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <title>Formulaire</title>
</head>
<body>
    <form action="index.php" method="POST">
        <h1>Connexion</h1>
 
        <label><b>Identiant</b></label>
        <input type="text" for="username" placeholder="Entrer votre identifiant" name="username" required>

        <label><b>Mot de passe</b></label>
        <input type="password" for="password" placeholder="Entrer votre mot de passe" name="password" required>

        <input type="submit" id='submit' value='LOGIN' >
       
 </form>

</body>
</html>