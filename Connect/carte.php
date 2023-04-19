<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../favicon.PNG" rel="icon" type="image/png" />
    <link href="../css/style.css" rel="stylesheet" />
    <title class="DocTitle">Le Quai Antique / La Carte</title>
</head>

<body>
    <nav class="parent">
        <div class="title">
            <h1>
                <a href="Accueil.php">Le Quai Antique</a>
            </h1>
        </div>
        <form action="paramCompte.php" class="BtnSeConnecter">
            <button class="btnConnecter" style="width:auto; padding:0 1em;">
                <?php
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupName = $dbClient->query("SELECT * FROM client WHERE mail = '{$_SESSION['mail']}'");
                    while ($client = $recupName->fetch()){
                        $ClientFirstname = $client['firstname'];
                        $ClientName = $client['name'];
                        if(!empty($ClientName)){
                            echo $ClientFirstname;
                            echo "&nbsp";
                            echo $ClientName;
                        }else{
                            echo $_SESSION['mail'];
                        }
                    }

                ?>
            </button>
        </form>
    </nav>
    <main>
        <div class="BtnMenu">
            <a href="menu.php"><input id="BtnMenu" type="button" value="Voir les menus" /></a>
        </div>
        <div class="carte">
            <!--Carte Version Mobile-->
            <div class="MGauche">
                <div class="Textmobile" id="MavantG">
                    <div id="TextMenu">MENU</div>
                    <div class="TextCarte">
                        <p>Q</p>
                        <p>A</p>
                    </div>
                </div>
                <div id="MinteG" style="padding: 0">
                    <div class="Textmobile">
                        <p class="MTitleG">Nos</p>
                        <div>
                            <ul class="Mplat">
                                <div class="LiEntreG">
                                    <li class="LiEntre1">
                                        <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'entrée' and id = 1");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                    </li>
                                    <li class="LiEntre3">
                                        <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'entrée' and id = 3");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?></li>
                                    <li class="LiEntre5">
                                        <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'entrée' and id = 5");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                    </li>
                                </div>
                            </ul>
                            <p class="MTitleG">Nos</p>
                            <ul class="Mplat">
                                <div class="LiPlatG">
                                    <li class="LiPlat1">
                                        <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 6");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                    </li>
                                    <li class="LiPlat3">
                                        <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 8");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                    </li>
                                    <li class="LiPlat5">
                                        <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 10");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                    </li>
                                    <li class="LiPlat7">
                                        <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 12");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                    </li>
                                    <li class="LiPlat9">
                                        <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 14");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                    </li>
                                </div>
                            </ul>
                            <p class="MTitleG">Nos</p>
                            <ul class="Mplat">
                                <div class="LiDessertG">
                                    <li class="LiDessert1">
                                        <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'dessert' and id = 15");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                    </li>
                                    <li class="LiDessert3">
                                        <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'dessert' and id = 17");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                    </li>
                                    <li class="LiDessert5">
                                        <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'dessert' and id = 19");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="MDroite">
                <!-- 
                        <div id="MavantD">
                        <p class="Textmobile">Test Avant Droite</p>
                        </div> 
                    -->
                <div id="MinteD">
                    <div class="Textmobile">
                        <p class="MTitleD">Entrées</p>
                        <div>
                            <ul class="Mplat">
                                <div class="LiEntreD">
                                    <li class="LiEntre2">
                                        <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'entrée' and id = 2");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                    </li>
                                    <li class="LiEntre4">
                                        <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'entrée' and id = 4");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                    </li>
                                </div>
                            </ul>
                            <p class="MTitleD">Plats</p>
                            <ul class="Mplat">
                                <div class="LiPlatD">
                                    <li class="LiPlat2">
                                        <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 7");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                    </li>
                                    <li class="LiPlat4">
                                        <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 9");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                    </li>
                                    <li class="LiPlat6">
                                        <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 11");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                    </li>
                                    <li class="LiPlat8">
                                        <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 13");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                    </li>
                                </div>
                            </ul>
                            <p class="MTitleD">Desserts</p>
                            <ul class="Mplat">
                                <div class="LiDessertD">
                                    <li class="LiDessert2">
                                        <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'dessert' and id = 16");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                    </li>
                                    <li class="LiDessert4">
                                        <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'dessert' and id = 18");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--Carte Version Desktop-->
            <div id="Gauche">
                <div id="avantG">
                    <div id="Textme">ME</div>
                    <p class="textCarte">Q</p>
                </div>
                <div id="inteG">
                    <p id="TitleG">Nos Entrées</p>
                    <div class="liPanneau">
                        <ul>
                            <li>
                                <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'entrée' and id = 1");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                            </li>
                            <li>
                                <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'entrée' and id = 2");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                            </li>
                            <li>
                                <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'entrée' and id = 3");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                            </li>
                            <li>
                                <?php
                                    $dbCarte =  new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'entrée' and id = 4");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                            </li>
                            <li>
                                <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'entrée' and id = 5");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="Fond">
                <div class="fond">
                    <p id="TitleP">Nos Plats</p>
                    <div class="TextPlats">
                        <div id="PlatG">
                            <ul>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 6");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 7");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 8");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 9");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 14");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                </li>
                                <!-- 
                                <li>Plat N° :</li> -->
                            </ul>
                        </div>
                        <div class="PlatD">
                            <ul>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 10");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 11");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 12");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 13");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Droite">
                <div id="inteD">
                    <p id="TitleD">Nos Desserts</p>
                    <div class="liPanneau">
                        <ul>
                            <li>
                                <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'dessert' and id = 15");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                            </li>
                            <li>
                                <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'dessert' and id = 16");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                            </li>
                            <li>
                                <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'dessert' and id = 17");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                            </li>
                            <li>
                                <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'dessert' and id = 18");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                            </li>
                            <li>
                                <?php
                                    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'dessert' and id = 19");
                                    while ($carte = $recupPlat->fetch()){
                                    echo '<u>'.$carte['name'].'</u>';
                                    echo'&nbsp';
                                    echo '<b>'.$carte['price'].'€ </b>';
                                    echo '<br>';
                                    echo '<i>'.$carte['description'].'</i>';}
                                    ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="avantD">
                    <div id="Textnu">NU</div>
                    <p class="textCarte">A</p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="containerHoraire">
            <div class="horaires" id="lundi">
                LUNDI <br /><br />
                <?php
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 1");
                    while ($horaire = $recupHoraire->fetch()){
                        $lundiMO = $horaire['lundiM'];
                        if($lundiMO == "00:00:00"){
                        }else{
                            echo substr($lundiMO, 0, 5);
                        }
                    }
                    if($lundiMO == "00:00:00"){
                        echo "FERMÉ";
                    }else{
                        echo "&nbsp-&nbsp";
                    }
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 2");
                    while ($horaire = $recupHoraire->fetch()){
                        $lundiMF = $horaire['lundiM'];
                        if($lundiMO == "00:00:00"){
                        }else{
                            echo substr($lundiMF, 0, 5);
                        }
                    }
                    
                 ?><br />
                <?php
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 1");
                    while ($horaire = $recupHoraire->fetch()){
                        $lundiSO = $horaire['lundiS'];
                        if($lundiSO == "00:00:00"){
                        }else{
                            echo substr($lundiSO, 0, 5);
                        }
                    }
                    if($lundiSO == "00:00:00"){
                        echo "FERMÉ";
                    }else{
                        echo "&nbsp-&nbsp";
                    }
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 2");
                    while ($horaire = $recupHoraire->fetch()){
                        $lundiSF = $horaire['lundiS'];
                        if($lundiSF == "00:00:00"){
                        }else{
                            echo substr($lundiSF, 0, 5);
                        }
                    }
                    
                 ?>
            </div>
            <div class="horaires" id="mardi">
                MARDI <br /><br />
                <?php
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 1");
                    while ($horaire = $recupHoraire->fetch()){
                        $mardiMO = $horaire['mardiM'];
                        if($mardiMO == "00:00:00"){
                        }else{
                            echo substr($mardiMO, 0, 5);
                        }
                    }
                    if($mardiMO == "00:00:00"){
                        echo "FERMÉ";
                    }else{
                        echo "&nbsp-&nbsp";
                    }
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 2");
                    while ($horaire = $recupHoraire->fetch()){
                        $mardiMF = $horaire['mardiM'];
                        if($mardiMF == "00:00:00"){
                        }else{
                            echo substr($mardiMF, 0, 5);
                        }
                    }
                    
                 ?><br />
                <?php
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 1");
                    while ($horaire = $recupHoraire->fetch()){
                        $mardiSO = $horaire['mardiS'];
                        if($mardiSO == "00:00:00"){
                        }else{
                            echo substr($mardiSO, 0, 5);
                        }
                    }
                    if($mardiSO == "00:00:00"){
                        echo "FERMÉ";
                    }else{
                        echo "&nbsp-&nbsp";
                    }
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 2");
                    while ($horaire = $recupHoraire->fetch()){
                        $mardiSF = $horaire['mardiS'];
                        if($mardiSF == "00:00:00"){
                        }else{
                            echo substr($mardiSF, 0, 5);
                        }
                    }
                    
                 ?>
            </div>
            <div class="horaires" id="mercredi">MERCREDI <br /><br />
                <?php
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 1");
                    while ($horaire = $recupHoraire->fetch()){
                        $mercrediMO = $horaire['mercrediM'];
                        if($mercrediMO == "00:00:00"){
                        }else{
                            echo substr($mercrediMO, 0, 5);
                        }
                    }
                    if($mercrediMO == "00:00:00"){
                        echo "FERMÉ";
                    }else{
                        echo "&nbsp-&nbsp";
                    }
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 2");
                    while ($horaire = $recupHoraire->fetch()){
                        $mercrediMF = $horaire['mercrediM'];
                        if($mercrediMF == "00:00:00"){
                        }else{
                            echo substr($mercrediMF, 0, 5);
                        }
                    }
                 ?><br />
                <?php
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 1");
                    while ($horaire = $recupHoraire->fetch()){
                        $mercrediMO = $horaire['mercrediM'];
                        if($mercrediMO == "00:00:00"){
                        }else{
                            echo substr($mercrediMO, 0, 5);
                        }
                    }
                    if($mercrediMO == "00:00:00"){
                        echo "FERMÉ";
                    }else{
                        echo "&nbsp-&nbsp";
                    }
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 2");
                    while ($horaire = $recupHoraire->fetch()){
                        $mercrediSF = $horaire['mercrediS'];
                        if($mercrediSF == "00:00:00"){
                        }else{
                            echo substr($mercrediSF, 0, 5);
                        }
                    }
                 ?></div>
            <div class="horaires" id="jeudi">
                JEUDI <br /><br />
                <?php
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 1");
                    while ($horaire = $recupHoraire->fetch()){
                        $jeudiMO = $horaire['jeudiM'];
                        if($jeudiMO == "00:00:00"){
                        }else{
                            echo substr($jeudiMO, 0, 5);
                        }
                    }
                    if($jeudiMO == "00:00:00"){
                        echo "FERMÉ";
                    }else{
                        echo "&nbsp-&nbsp";
                    }
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 2");
                    while ($horaire = $recupHoraire->fetch()){
                        $jeudiMO = $horaire['jeudiM'];
                        if($jeudiMO == "00:00:00"){
                        }else{
                            echo substr($jeudiMO, 0, 5);
                        }
                    }
                    
                 ?><br />
                <?php
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 1");
                    while ($horaire = $recupHoraire->fetch()){
                        $jeudiMO = $horaire['jeudiS'];
                        if($jeudiMO == "00:00:00"){
                        }else{
                            echo substr($jeudiMO, 0, 5);
                        }
                    }
                    if($jeudiMO == "00:00:00"){
                        echo "FERMÉ";
                    }else{
                        echo "&nbsp-&nbsp";
                    }
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 2");
                    while ($horaire = $recupHoraire->fetch()){
                        $jeudiMO = $horaire['jeudiS'];
                        if($jeudiMO == "00:00:00"){
                        }else{
                            echo substr($jeudiMO, 0, 5);
                        }
                    }
                    
                 ?>
            </div>
            <div class="horaires" id="vendredi">
                VENDREDI <br /><br />
                <?php
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 1");
                    while ($horaire = $recupHoraire->fetch()){
                        $vendrediM0 = $horaire['vendrediM'];
                        if($vendrediM0 == "00:00:00"){
                        }else{
                            echo substr($vendrediM0, 0, 5);
                        }
                    }
                    if($vendrediM0 == "00:00:00"){
                        echo "FERMÉ";
                    }else{
                        echo "&nbsp-&nbsp";
                    }
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 2");
                    while ($horaire = $recupHoraire->fetch()){
                        $vendrediM0 = $horaire['vendrediM'];
                        if($vendrediM0 == "00:00:00"){
                        }else{
                            echo substr($vendrediM0, 0, 5);
                        }
                    }
                    
                 ?><br />
                <?php
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 1");
                    while ($horaire = $recupHoraire->fetch()){
                        $vendrediM0 = $horaire['vendrediS'];
                        if($vendrediM0 == "00:00:00"){
                        }else{
                            echo substr($vendrediM0, 0, 5);
                        }
                    }
                    if($vendrediM0 == "00:00:00"){
                        echo "FERMÉ";
                    }else{
                        echo "&nbsp-&nbsp";
                    }
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 2");
                    while ($horaire = $recupHoraire->fetch()){
                        $vendrediM0 = $horaire['vendrediS'];
                        if($vendrediM0 == "00:00:00"){
                        }else{
                            echo substr($vendrediM0, 0, 5);
                        }
                    }
                    
                 ?>
            </div>
            <div class="horaires" id="samedi">SAMEDI <br /><br />
                <?php
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 1");
                    while ($horaire = $recupHoraire->fetch()){
                        $samediM0 = $horaire['samediM'];
                        if($samediM0 == "00:00:00"){
                        }else{
                            echo substr($samediM0, 0, 5);
                        }
                    }
                    if($samediM0 == "00:00:00"){
                        echo "FERMÉ";
                    }else{
                        echo "&nbsp-&nbsp";
                    }
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 2");
                    while ($horaire = $recupHoraire->fetch()){
                        $samediM0 = $horaire['samediM'];
                        if($samediM0 == "00:00:00"){
                        }else{
                            echo substr($samediM0, 0, 5);
                        }
                    }
                    
                 ?><br />
                <?php
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 1");
                    while ($horaire = $recupHoraire->fetch()){
                        $samediM0 = $horaire['samediS'];
                        if($samediM0 == "00:00:00"){
                        }else{
                            echo substr($samediM0, 0, 5);
                        }
                    }
                    if($samediM0 == "00:00:00"){
                        echo "FERMÉ";
                    }else{
                        echo "&nbsp-&nbsp";
                    }
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 2");
                    while ($horaire = $recupHoraire->fetch()){
                        $samediM0 = $horaire['samediS'];
                        if($samediM0 == "00:00:00"){
                        }else{
                            echo substr($samediM0, 0, 5);
                        }
                    }
                    ?></div>
            <div class="horaires" id="dimanche">
                DIMANCHE<br /><br />
                <?php
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 1");
                    while ($horaire = $recupHoraire->fetch()){
                        $dimancheSO = $horaire['dimancheM'];
                        if($dimancheSO == "00:00:00"){
                        }else{
                            echo substr($dimancheSO, 0, 5);
                        }
                    }
                    if($dimancheSO == "00:00:00"){
                        echo "FERMÉ";
                    }else{
                        echo "&nbsp-&nbsp";
                    }
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 2");
                    while ($horaire = $recupHoraire->fetch()){
                        $dimancheSO = $horaire['dimancheM'];
                        if($dimancheSO == "00:00:00"){
                        }else{
                            echo substr($dimancheSO, 0, 5);
                        }
                    }
                    
                 ?><br />
                <?php
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 1");
                    while ($horaire = $recupHoraire->fetch()){
                        $dimancheM0 = $horaire['dimancheS'];
                        if($dimancheM0 == "00:00:00"){
                        }else{
                            echo substr($dimancheM0, 0, 5);
                        }
                    }
                    if($dimancheM0 == "00:00:00"){
                        echo "FERMÉ";
                    }else{
                        echo "&nbsp-&nbsp";
                    }
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupHoraire = $dbClient->query("SELECT * FROM horaires WHERE id = 2");
                    while ($horaire = $recupHoraire->fetch()){
                        $dimancheM0 = $horaire['dimancheS'];
                        if($dimancheM0 == "00:00:00"){
                        }else{
                            echo substr($dimancheM0, 0, 5);
                        }
                    }
                    ?>
            </div>
        </div>
    </footer>
</body>
<style>
.PlatD {
    border-left: 5px solid #291211;
}

.BtnMenu {
    display: flex;
    justify-content: center;
    margin-top: 5em;
}

#BtnMenu:hover {
    background-color: #252827;
    color: #f8cf2c;
}

#BtnMenu {
    width: auto;
    height: 70px;
    border-radius: 30px;
    padding: 0 1em;
    background-color: #f8cf2c;
    color: #252827;
    font-family: "Montserrat";
    font-weight: 800;
    font-size: 24px;
}

@media screen and (max-width: 970px) {

    .LiEntreD,
    .LiEntreG {
        height: 350px;
    }

    .LiPlatG,
    .LiPlatD {
        height: 540px;
    }

    .LiDessertD,
    .LiDessertG {
        height: 350px;
    }

    .Textmobile {
        display: block !important;
    }

    #Gauche {
        display: none !important;
    }

    .Fond {
        display: none !important;
    }

    #Droite {
        display: none !important;
    }

    .ContainerEntré {
        display: grid;
        grid-template-columns: repeat(2, auto);
        grid-template-rows: repeat(3, 1fr);
        grid-column-gap: 5px;
        grid-row-gap: 0px;
    }

    .Entre1 {
        grid-area: 1 / 1 / 2 / 2;
    }

    .Entre2 {
        grid-area: 1 / 2 / 2 / 3;
    }

    .Entre3 {
        grid-area: 2 / 1 / 3 / 2;
    }

    .Entre4 {
        grid-area: 2 / 2 / 3 / 3;
    }

    .Entre5 {
        grid-area: 3 / 1 / 4 / 2;
    }

    .ContainerPlats {
        display: grid;
        grid-template-columns: repeat(2, auto);
        grid-template-rows: repeat(3, 1fr);
        grid-column-gap: 5px;
        grid-row-gap: 0px;
    }


    .Plat1 {
        grid-area: 1 / 1 / 2 / 2;
    }

    .Plat2 {
        grid-area: 1 / 2 / 2 / 3;
    }

    .Plat3 {
        grid-area: 2 / 1 / 3 / 2;
    }

    .Plat4 {
        grid-area: 2 / 2 / 3 / 3;
    }

    .Plat5 {
        grid-area: 3 / 1 / 4 / 2;
    }

    .Plat6 {
        grid-area: 3 / 2 / 4 / 3;
    }

    .Plat7 {
        grid-area: 4 / 1 / 5 / 2;
    }

    .Plat8 {
        grid-area: 4 / 2 / 5 / 3;
    }

    .Plat9 {
        grid-area: 5 / 1 / 6 / 2;
    }


    /*Carte MOBILE*/

    .MGauche {
        background-color: aqua;
        width: 48%;
        height: 1440px;

        border-right: 2.5px solid #f8cf2c;
        position: relative;
        right: -48%;
        display: flex;
        background-color: transparent;
        transform-style: preserve-3d;
        transform-origin: 0;

        animation: ouverture 8s;
        animation-fill-mode: forwards;
    }

    .TextCarte,
    #TextMenu {
        color: #f8cf2c;
    }

    #MavantG {
        z-index: 1;
        background-color: #291211;
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
    }

    #MinteG {
        background-color: #f8cf2c;
        position: absolute;
        width: 100%;
        height: 100%;
        transform: rotateY(180deg);
        backface-visibility: visible;
        padding: 0;
    }

    .MDroite {
        background-color: #f8cf2c;
        width: 48%;
        height: 1440px;
    }

    .Textmobile {
        color: #282527;
    }

    .MTitleG,
    .MTitleD {
        display: flex;
        justify-content: flex-end;

        margin: 1em 1.5em;
        font-size: 1.5em;
    }

    .MTitleG {
        display: flex;
        justify-content: flex-end;
    }

    .MTitleD {
        display: flex;
        justify-content: flex-start;
    }

    .Mplat {
        font-size: 1em !important;
    }

    #TextMenu {
        display: flex !important;
        justify-content: center;

        margin-top: 3em;

        font-family: "Lora", sans-serif;
        font-size: 40px;
        font-weight: bold;
    }

    .TextCarte {
        display: flex;
        justify-content: space-evenly;

        font-family: luxurious script;
        font-size: 5em;
    }
}

@media screen and (max-width: 650px) {

    .LiEntreD,
    .LiEntreG {
        height: 500px;
    }

    .LiPlatG,
    .LiPlatD {
        height: 800px;
    }

    .LiDessertD,
    .LiDessertG {
        height: 500px;
    }

    .MGauche {
        height: 2000px;
    }

    .MDroite {
        height: 2000px;
    }
}

@media screen and (max-width: 440px) {

    .LiEntreD,
    .LiEntreG {
        height: 700px !important;
    }

    .LiPlatG,
    .LiPlatD {
        height: 1100px !important;
    }

    .LiDessertD,
    .LiDessertG {
        height: 700px !important;
    }

    .MGauche {
        height: 2600px !important;
    }

    .MDroite {
        height: 2600px !important;
    }
}
</style>

</html>