<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>App RappelTout</title>

    <style>
            .form3 {
                background: #fff;
                
                width: 80%;
                max-width: 100%;
                height: 700px;
                display: flex;
                justify-content: center;
                align-items: center;
                align-items: center;
            }
                    .formulaire {
            background: #cacaca;
            padding: 30px;
            width: 900px;
                max-width: 100%;
                height: 600px;
            border-radius: 30px;
            display: flex;
                justify-content: center;
            }

            .form2-3 .form2 ul li.active {
                background-color: #fff;
                color: black;
                padding: 8px;
            }
            .form2-3 .form2 ul li {
               
                padding: 8px;
            }
            .form2-3 .form2 ul li:hover {
                background-color: #fff;
                color: black;
                padding: 8px;
            }

            div ul li {
            text-decoration: none;
            list-style: none;
            color: #FFFDFA;
            font-size: 15px;

            
            }
    </style>
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
                    <li class="tablinks" onclick="openTab(event, 'page1')" id="defaultOpen"><h2>Dashboard</h2></li>
                    <li class="tablinks" onclick="openTab(event, 'page2')" ><h2>Materiel</h2></li>
                    <li class="tablinks" onclick="openTab(event, 'page3')" ><h2>Document</h2></li>
                </ul>
                

            </div>

            <div class="form3">
                <div id="page1" class="tabcontent">
                    <div class="formulaire">
                        <h1>Vue d'ensemble</h1>
                    
                    </div>
                    
                </div>
                <div id="page2" class="tabcontent">
                    <div class="formulaire">
                        <h1>Ajouter un materiel</h1>
                    
                        <form action="Validation.php" method="POST">
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
                <div id="page3" class="tabcontent">
                    <div class="formulaire">
                        <h1>Ajouter un document</h1>
                    
                    
                    </div>
                    
                </div>
            </div>
            
        </div>
        <div class="form4">
    </div>
    <div class="tab">
  
</div>



    <script>
        function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
</body>
</html>