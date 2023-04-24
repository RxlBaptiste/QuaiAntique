<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../Assets/favicon.PNG" rel="icon" type="image/png" />
    <link href="../css/style.css" rel="stylesheet" />
    <title class="DocTitle">Le Quai Antique | Le menu</title>
</head>

<body>
    <nav class="parent">
        <div class="title">
            <h1>
                <a href="../accueil.php">Le Quai Antique</a>
            </h1>
        </div>
        <form action="../accueil.php" class="BtnSeConnecter">
            <button type="submit" class="btnConnecter">
                RETOUR
            </button>
        </form>
    </nav>
    <main>
        <div class="BtnMenu">
            <a href="carte.php"><input id="BtnMenu" type="button" value="Voir la carte" /></a>
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
                        <p class="MTitleG"><b>Menu
                                <?php 
                        $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                        $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 1"); 
                        while ($menu = $recupMenu->fetch()){ 
                          echo utf8_encode($menu['name'])."&nbsp";
                          echo "(".$menu['price']."€)";
                        }
                      ?></b></p>
                        <div>
                            <ul class="Mplat">
                                <div class="LiEntreG">
                                    <ul>
                                        <li style="display:flex;text-align: center;justify-content: center;">
                                            <?php 
                          $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                          $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 1"); 
                          while ($menu = $recupMenu->fetch()){
                            echo "<br>";
                            echo utf8_encode($menu['plat1']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['plat2']);
                            echo "<br>";
                          }
                        ?>
                                        </li>
                                        <li style="display:flex;text-align: center;justify-content: center;">
                                            <?php 
                          $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                          $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 1"); 
                          while ($menu = $recupMenu->fetch()){
                            ?>
                                            <div><?php
                            echo "<br>";
                            echo utf8_encode($menu['dessert1']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['dessert2']);
                            echo "<br>";
                            echo "<br>";
                        }?>
                                        </li>
                                    </ul>
                                </div>
                            </ul>
                            <p class="MTitleG"><b>Menu
                                    <?php 
                        $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                        $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 3"); 
                        while ($menu = $recupMenu->fetch()){ 
                          echo utf8_encode($menu['name'])."&nbsp";
                          echo "(".$menu['price']."€)";
                        }
                      ?></b></p>
                            <ul>
                                <li style="display:flex;text-align: center;justify-content: center;">
                                    <?php 
                          $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                          $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 3"); 
                          while ($menu = $recupMenu->fetch()){
                            echo "<br>";
                            echo utf8_encode($menu['entre1']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['entre2']);
                            echo "<br>";
                          }
                        ?>
                                <li style="display:flex;text-align: center;justify-content: center;">
                                    <?php 
                          $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                          $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 3"); 
                          while ($menu = $recupMenu->fetch()){
                            echo "<br>";
                            echo utf8_encode($menu['plat1']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['plat2']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['plat3']);
                            echo "<br>";
                          }
                        ?>
                                </li>
                                <li style="display:flex;text-align: center;justify-content: center;">
                                    <?php 
                          $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                          $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 3"); 
                          while ($menu = $recupMenu->fetch()){
                            ?>
                                    <div><?php
                            echo "<br>";
                            echo utf8_encode($menu['dessert1']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['dessert2']);
                            echo "<br>";
                            echo "<br>";
                        }?>
                                </li>
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
                        <p class="MTitleD"><b>Menu
                                <?php 
                        $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                        $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 2"); 
                        while ($menu = $recupMenu->fetch()){ 
                          echo utf8_encode($menu['name'])."&nbsp";
                          echo "(".$menu['price']."€)";
                        }
                      ?></b></p>
                        <div>
                            <ul>
                                <li style="display:flex;text-align: center;justify-content: center;">
                                    <?php 
                          $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                          $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 2"); 
                          while ($menu = $recupMenu->fetch()){
                            echo "<br>";
                            echo utf8_encode($menu['entre1']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['entre2']);
                            echo "<br>";
                          }
                        ?>
                                <li style="display:flex;text-align: center;justify-content: center;">
                                    <?php 
                          $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                          $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 2"); 
                          while ($menu = $recupMenu->fetch()){
                            echo "<br>";
                            echo utf8_encode($menu['plat1']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['plat2']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['plat3']);
                            echo "<br>";
                          }
                        ?>
                                </li>
                                <li style="display:flex;text-align: center;justify-content: center;">
                                    <?php 
                          $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                          $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 2"); 
                          while ($menu = $recupMenu->fetch()){
                            ?>
                                    <div><?php
                            echo "<br>";
                            echo utf8_encode($menu['dessert1']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['dessert2']);
                            echo "<br>";
                            echo "<br>";
                        }?>
                                </li>
                            </ul>
                            <p class="MTitleD"><b>
                                    Menu
                                    <?php 
                        $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                        $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 4"); 
                        while ($menu = $recupMenu->fetch()){ 
                          echo utf8_encode($menu['name'])."&nbsp";
                          echo "(".$menu['price']."€)";
                        }?>
                                </b></p>
                            <ul>
                                <li style="display:flex;text-align: center;justify-content: center;">
                                    <?php 
                          $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                          $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 4"); 
                          while ($menu = $recupMenu->fetch()){
                            echo "<br>";
                            echo utf8_encode($menu['entre1']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['entre2']);
                            echo "<br>";
                          }
                        ?>
                                <li style="display:flex;text-align: center;justify-content: center;">
                                    <?php 
                          $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                          $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 4"); 
                          while ($menu = $recupMenu->fetch()){
                            echo "<br>";
                            echo utf8_encode($menu['plat1']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['plat2']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['plat3']);
                            echo "<br>";
                          }
                        ?>
                                </li>
                                <li style="display:flex;text-align: center;justify-content: center;">
                                    <?php 
                          $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                          $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 4"); 
                          while ($menu = $recupMenu->fetch()){
                            ?>
                                    <div><?php
                            echo "<br>";
                            echo utf8_encode($menu['dessert1']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['dessert2']);
                            echo "<br>";
                            echo "<br>";
                        }?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--Carte Version Desktop-->
            <div id="Gauche" style="height:950px;">
                <div id="avantG">
                    <div id="Textme">ME</div>
                    <p class="textCarte">Q</p>
                </div>
                <div id="inteG">
                    <p id="TitleG">Menu
                        <?php 
                        $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                        $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 1"); 
                        while ($menu = $recupMenu->fetch()){ 
                          echo utf8_encode($menu['name'])."&nbsp";
                          echo "(".$menu['price']."€)";
                        }
                      ?>
                    </p>
                    <div class="liPanneau">
                        <ul>
                            <li style="display:flex;text-align: center;justify-content: center;">
                                <?php 
                          $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                          $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 1"); 
                          while ($menu = $recupMenu->fetch()){
                            echo "<br>";
                            echo utf8_encode($menu['plat1']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['plat2']);
                            echo "<br>";
                          }
                        ?>
                            </li>
                            <li style="display:flex;text-align: center;justify-content: center;">
                                <?php 
                          $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                          $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 1"); 
                          while ($menu = $recupMenu->fetch()){
                            ?>
                                <div><?php
                            echo "<br>";
                            echo utf8_encode($menu['dessert1']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['dessert2']);
                            echo "<br>";
                            echo "<br>";
                        }?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="Fond" style="height:950px;">
                <div class="fond">
                    <div class="SpanMenu">
                        <p id="TitleL">Menu
                            <?php 
                        $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                        $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 2"); 
                        while ($menu = $recupMenu->fetch()){ 
                          echo utf8_encode($menu['name'])."<br>";
                          echo "(".$menu['price']."€)";
                        }
                      ?></p>
                        <p id="TitleR">Menu
                            <?php 
                        $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                        $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 3"); 
                        while ($menu = $recupMenu->fetch()){ 
                          echo utf8_encode($menu['name'])."<br>";
                          echo "(".$menu['price']."€)";
                        }
                      ?></p>
                    </div>
                    <div class="TextPlats" style="justify-content: space-around;">
                        <div id="PlatG">
                            <ul>
                                <li style="display:flex;text-align: center;justify-content: center;">
                                    <?php 
                          $dbCarte =  new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                          $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 2"); 
                          while ($menu = $recupMenu->fetch()){
                            echo "<br>";
                            echo utf8_encode($menu['entre1']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['entre2']);
                            echo "<br>";
                          }
                        ?>
                                <li style="display:flex;text-align: center;justify-content: center;">
                                    <?php 
                          $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                          $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 2"); 
                          while ($menu = $recupMenu->fetch()){
                            echo "<br>";
                            echo utf8_encode($menu['plat1']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['plat2']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['plat3']);
                            echo "<br>";
                          }
                        ?>
                                </li>
                                <li style="display:flex;text-align: center;justify-content: center;">
                                    <?php 
                          $dbCarte =  new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                          $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 2"); 
                          while ($menu = $recupMenu->fetch()){
                            ?>
                                    <div><?php
                            echo "<br>";
                            echo utf8_encode($menu['dessert1']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['dessert2']);
                            echo "<br>";
                            echo "<br>";
                        }?>
                                </li>
                            </ul>
                        </div>

                        <div style="border: solid black 5px"></div>
                        <div class="PlatD" style="border:none;">
                            <ul>
                                <li style="display:flex;text-align: center;justify-content: center;">
                                    <?php 
                          $dbCarte =  new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                          $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 3"); 
                          while ($menu = $recupMenu->fetch()){
                            echo "<br>";
                            echo utf8_encode($menu['entre1']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['entre2']);
                            echo "<br>";
                          }
                        ?>
                                <li style="display:flex;text-align: center;justify-content: center;">
                                    <?php 
                          $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                          $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 3"); 
                          while ($menu = $recupMenu->fetch()){
                            echo "<br>";
                            echo utf8_encode($menu['plat1']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['plat2']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['plat3']);
                            echo "<br>";
                          }
                        ?>
                                </li>
                                <li style="display:flex;text-align: center;justify-content: center;">
                                    <?php 
                          $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                          $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 3"); 
                          while ($menu = $recupMenu->fetch()){
                            ?>
                                    <div><?php
                            echo "<br>";
                            echo utf8_encode($menu['dessert1']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['dessert2']);
                            echo "<br>";
                            echo "<br>";
                        }?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Droite" style="height:950px;">
                <div id="inteD">
                    <p id="TitleD">
                        Menu
                        <?php 
                        $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                        $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 4"); 
                        while ($menu = $recupMenu->fetch()){ 
                          echo utf8_encode($menu['name'])."<br>";
                          echo "(".$menu['price']."€)";
                        }
                      ?>
                    </p>
                    <div class="liPanneau">
                        <ul>
                            <li style="display:flex;text-align: center;justify-content: center;">
                                <?php 
                          $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                          $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 4"); 
                          while ($menu = $recupMenu->fetch()){
                            echo "<br>";
                            echo utf8_encode($menu['entre1']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['entre2']);
                            echo "<br>";
                          }
                        ?>
                            <li style="display:flex;text-align: center;justify-content: center;">
                                <?php 
                          $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                          $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 4"); 
                          while ($menu = $recupMenu->fetch()){
                            echo "<br>";
                            echo utf8_encode($menu['plat1']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['plat2']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['plat3']);
                            echo "<br>";
                          }
                        ?>
                            </li>
                            <li style="display:flex;text-align: center;justify-content: center;">
                                <?php 
                          $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                          $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = 4"); 
                          while ($menu = $recupMenu->fetch()){
                            ?>
                                <div><?php
                            echo "<br>";
                            echo utf8_encode($menu['dessert1']);
                            echo "<br>"." OU "."<br>";
                            echo utf8_encode($menu['dessert2']);
                            echo "<br>";
                            echo "<br>";
                        }?>
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
.SpanMenu {
    display: flex;
    justify-content: space-around;
}

#TitleD,
#TitleG {
    font-size: 35px;
    text-align: center;
}

#TitleL,
#TitleR {
    display: flex;
    align-items: center;
    flex-direction: column;

    font-family: "Lora", serif;
    font-size: 40px;
    font-weight: bold;
    text-align: center;
}

/* 
#TitleL {
    display: flex;
    align-items: flex-start;
    margin-right: 15%;
}

#TitleR {
    display: flex;
    align-items: flex-end;
    margin-right: 15%;
} */

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
        justify-content: center;

        margin: 1em 1.5em;
        font-size: 1.5em;
    }

    .MTitleG {
        display: flex;
        justify-content: flex-end;
    }

    .MTitleD {
        display: flex;
        justify-content: center;
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
        height: 1500px;
    }

    .MDroite {
        height: 1500px;
    }
}

@media screen and (max-width: 440px) {
    .MTitleG {
        margin-left: 6.5em;
    }

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
        height: 1600px !important;
    }

    .MDroite {
        height: 1600px !important;
    }
}
</style>

</html>