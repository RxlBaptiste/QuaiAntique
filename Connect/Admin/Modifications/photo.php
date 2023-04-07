<?php
if(session_status() == '1'){
session_start();


  if(!$_SESSION['Admin']){
    header('location: ../Logout.php');
  }}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../favicon.PNG" rel="icon" type="image/png" />
    <link href="../../../css/style.css" rel="stylesheet" />
    <title class="DocTitle">Le Quai Antique / La carte</title>
</head>

<body>
    <nav class="parent">
        <div class="title">
            <h1>
                <a href="../index.php">Le Quai Antique</a>
            </h1>
        </div>
        <form action="../Logout.php" class="BtnSeConnecter">
            <button class="btnConnecter" style="width: auto; padding: 0 1em">
                <?php
                    echo $_SESSION['AdminName'];
                ?>
            </button>
        </form>
    </nav>
    <main>
        <section class="container">
            <section class="entre">
                <div>Les entrées</div>
                <?php

                $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                $recupPlat = $dbCarte->query("SELECT * FROM images WHERE categorie = 'entré'"); while
                ($row = $recupPlat->fetch()){ 
                        echo "<div>";
                        echo "<img src='../../../" . $row['image_path'] . "' alt='" . $row['name'] . "'>";
                        echo "<div>" . $row['name'] . "</div>";
                        echo "</div>";
                    } ?>
            </section>
            <section class="plat">
                <div>Les plats</div><?php

                $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                $recupPlat = $dbCarte->query("SELECT * FROM images WHERE categorie = 'plat'"); while
                ($row = $recupPlat->fetch()){ 
                        echo "<div>";
                        echo "<img src='../../../" . $row['image_path'] . "' alt='" . $row['name'] . "'>";
                        echo "<div>" . $row['name'] . "</div>";
                        echo "</div>";
                    } ?>
            </section>
            <section class="dessert">
                <div>Les desserts</div><?php

                $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                $recupPlat = $dbCarte->query("SELECT * FROM images WHERE categorie = 'dessert'"); while
                ($row = $recupPlat->fetch()){ 
                        echo "<div>";
                        echo "<img src='../../../" . $row['image_path'] . "' alt='" . $row['name'] . "'>";
                        echo "<div>" . $row['name'] . "</div>";
                        echo "</div>";
                    } ?>
            </section>
        </section>
    </main>
    <footer id="footerCarte">
        <div class="containerHoraire">
            <div class="horaires" id="lundi">
                LUNDI <br /><br />12:00 - 14:00<br />19:00 - 22:00
            </div>
            <div class="horaires" id="mardi">
                MARDI <br /><br />12:00 - 14:00<br />19:00 - 22:00
            </div>
            <div class="horaires" id="mercredi">MERCREDI <br /><br />FERMÉ</div>
            <div class="horaires" id="jeudi">
                JEUDI <br /><br />12:00 - 14:00<br />19:00 - 22:00
            </div>
            <div class="horaires" id="vendredi">
                VENDREDI <br /><br />12:00 - 14:00<br />19:00 - 22:00
            </div>
            <div class="horaires" id="samedi">SAMEDI <br /><br />19:00 - 23:00</div>
            <div class="horaires" id="dimanche">
                DIMANCHE<br /><br />12:00 - 14:00
            </div>
        </div>
    </footer>
</body>

</html>
<style>
.container {
    display: flex;
    justify-content: space-around;
}
</style>