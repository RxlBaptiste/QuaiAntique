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
                <div class="Title">Galerie des entrées</div>
                <?php

                $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                $recupPlat = $dbCarte->query("SELECT * FROM images WHERE categorie = 'entré'"); while
                ($row = $recupPlat->fetch()){
                        echo "<div class='Hoverbox'>";
                        echo "<img src='../../../" . $row['image_path'] . "' alt='" . $row['name'] . "'>"; 
                        ?>
                <div class="hover">
                    <?php echo "<div class='text'> ".$row['name']."</div>" ;?>
                    <a href=" changeImage.php?id=<?= $row['id']; ?>">
                        <button style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                            cette image</button>
                    </a>
                </div>
                <?php
                echo "</div>";
                } ?>
            </section>
            <section class="plat">
                <div class="Title">Galerie des plats</div><?php

                $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                $recupPlat = $dbCarte->query("SELECT * FROM images WHERE categorie = 'plat'"); while
                ($row = $recupPlat->fetch()){
                        echo "<div class='Hoverbox'>";
                        echo "<img src='../../../" . $row['image_path'] . "' alt='" . $row['name'] . "'>"; 
                        ?>
                <div class="hover">
                    <?php echo "<div class='text'> ".$row['name']."</div>" ;?>
                    <a href=" changeImage.php?id=<?= $row['id']; ?>">
                        <button style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                            cette image</button>
                    </a>
                </div>
                <?php
                echo "</div>";
                } ?>
            </section>
            <section class="dessert">
                <div class="Title">Galerie des desserts</div><?php

                $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                $recupPlat = $dbCarte->query("SELECT * FROM images WHERE categorie = 'dessert'"); while
                ($row = $recupPlat->fetch()){
                        echo "<div class='Hoverbox'>";
                        echo "<img src='../../../" . $row['image_path'] . "' alt='" . $row['name'] . "'>"; 
                        ?>
                <div class="hover">
                    <?php echo "<div class='text'> ".$row['name']."</div>" ;?>
                    <a href=" changeImage.php?id=<?= $row['id']; ?> image_path=<?= $row['image_path']; ?>">
                        <button style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                            cette image</button>
                    </a>
                </div>
                <?php
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

.Title {
    font-size: 24px;
    font-weight: 800;
    text-transform: uppercase;
    color: #f8cf2c;
    text-align: center;
    padding: 0.8em 0;
}

img {
    width: 250px;
    height: 200px;
    border: 5px solid #f8cf2c;
}

.Hoverbox {
    display: flex;

    align-items: flex-end;
    justify-content: space-around;
    width: 230px;
    height: 260px;
}

.hover button {
    position: relative;
    top: 3em;
    color: transparent;
    border: none;
    cursor: pointer;
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
}

.hover:hover button {
    opacity: 1;
}

.hover {
    display: flex;
    flex-direction: column;
    text-align: center;
    width: 220px;
    height: 200px;
    position: absolute;
    color: transparent;
    background-color: none;
    transition: 0.15s;
    margin-bottom: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-transform: uppercase;
}

.hover:hover {
    width: 220px;
    height: 200px;
    position: absolute;
    color: #f8cf2c !important;
    background-color: #28252790;
    transition: 0.15s;
    margin-bottom: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-transform: uppercase;
}

.entre {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.plat {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.dessert {
    display: flex;
    flex-direction: column;
    align-items: center;
}
</style>