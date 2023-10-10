<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include 'class_mat_doc.php';
    $_SESSION["Ref_mat"]=$_POST["Ref_mat"];
    $_SESSION['Description_mat']= $_POST['Description_mat'];
    $_SESSION['date_creation']=$_POST['date_creation'];
    $_SESSION['date_exp']=$_POST['date_exp'];
    $_SESSION['date_rappel']=$_POST['date_rappel'];

    


    session_start();
    $doc1= new Materiel($_POST['Ref_mat'], $_POST['Description_mat'],$_POST['date_creation'],$_POST['date_exp'],$_POST['date_rappel']);
    $doc1->create();
    
    echo "Création !";
    ?>
</body>
</html>