<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../favicon.PNG" rel="icon" type="image/png" />
    <link href="../style.css" rel="stylesheet" />
    <title class="DocTitle">Le Quai Antique / La Carte</title>
    <style>
    .BtnMenu {
        color: blue;
    }
    </style>
</head>

<body>
    <nav class="parent">
        <div class="title">
            <h1>
                <a href="../index.html">Le Quai Antique</a>
            </h1>
        </div>
        <form action="connection.html" class="BtnSeConnecter">
            <button class="btnConnecter">Se Connecter</button>
        </form>
    </nav>
    <main>
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
                                <li>Entrée N°:</li>
                                <li>Entrée N°:</li>
                                <li>Entrée N°:</li>
                                <li>Entrée N°:</li>
                                <li>Entrée N°:</li>
                            </ul>
                            <p class="MTitleG">Nos</p>
                            <ul class="Mplat">
                                <li>Plat N°:</li>
                                <li>Plat N°:</li>
                                <li>Plat N°:</li>
                                <li>Plat N°:</li>
                                <li>Plat N°:</li>
                                <li>Plat N°:</li>
                                <li>Plat N°:</li>
                                <li>Plat N°:</li>
                                <li>Plat N°:</li>
                                <li>Plat N°:</li>
                            </ul>
                            <p class="MTitleG">Nos</p>
                            <ul class="Mplat">
                                <li>Dessert N°:</li>
                                <li>Dessert N°:</li>
                                <li>Dessert N°:</li>
                                <li>Dessert N°:</li>
                                <li>Dessert N°:</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="MDroite">
                <!-- 
          <div id="MavantD">
            <p class="Textmobile">Test Avant Droite</p>
          </div> -->
                <div id="MinteD">
                    <div class="Textmobile">
                        <p class="MTitleD">Entrées</p>
                        <div>
                            <ul class="Mplat">
                                <li>Entrée N°:</li>
                                <li>Entrée N°:</li>
                                <li>Entrée N°:</li>
                                <li>Entrée N°:</li>
                                <li>Entrée N°:</li>
                            </ul>
                            <p class="MTitleD">Plats</p>
                            <ul class="Mplat">
                                <li>Plat N°:</li>
                                <li> fhgdfgfdg
                                </li>
                                <li>Plat N°:</li>
                                <li>Plat N°:</li>
                                <li>Plat N°:</li>
                                <li>Plat N°:</li>
                                <li>Plat N°:</li>
                                <li>Plat N°:</li>
                                <li>Plat N°:</li>
                                <li>Plat N°:</li>
                            </ul>
                            <p class="MTitleD">Desserts</p>
                            <ul class="Mplat">
                                <li>Dessert N°:</li>
                                <li>Dessert N°:</li>
                                <li>Dessert N°:</li>
                                <li>Dessert N°:</li>
                                <li>Dessert N°:</li>
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
                            <li>Entré N° :</li>
                            <li>Entré N° :</li>
                            <li>Entré N° :</li>
                            <li>Entré N° :</li>
                            <li>Entré N° :</li>
                            <li>Entré N° :</li>
                            <li>Entré N° :</li>
                            <li>Entré N° :</li>
                            <li>Entré N° :</li>
                            <li>Entré N° :</li>
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
                                <li>Plat N° :</li>
                                <li>Plat N° :</li>
                                <li><?php
                      $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                      $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 3");
                      while ($carte = $recupPlat->fetch()){
                      echo($carte['name']);
                      echo'&nbsp';
                      echo($carte['price']);
                      echo'€';
                      echo '<br>';
                      echo($carte['description']);
/*                       echo '&nbsp <a name="action" href="cartechange.php?action=change&id='.$carte['id'].'" style="background-color:red; color:white; text-decoration:none;"> Change</a>';
 */}


                    ?>
                                    <!-- <input type="button" value="Changer de nom" /> -->
                                </li>


                                <li>Plat N° :</li>
                                <li>Plat N° :</li>
                                <li>Plat N° :</li>
                                <li>Plat N° :</li>
                                <li>Plat N° :</li>
                                <li>Plat N° :</li>
                                <li>Plat N° :</li>
                            </ul>
                        </div>
                        <div id="PlatD">
                            <ul>
                                <li>Plat N° :</li>
                                <li>Plat N° :</li>
                                <li>Plat N° :</li>
                                <li>Plat N° :</li>
                                <li>Plat N° :</li>
                                <li>Plat N° :</li>
                                <li>Plat N° :</li>
                                <li>Plat N° :</li>
                                <li>Plat N° :</li>
                                <li>Plat N° :</li>
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
                            <li>Dessert N° :</li>
                            <li>Dessert N° :</li>
                            <li>Dessert N° :</li>
                            <li>Dessert N° :</li>
                            <li>Dessert N° :</li>
                            <li>Dessert N° :</li>
                            <li>Dessert N° :</li>
                            <li>Dessert N° :</li>
                            <li>Dessert N° :</li>
                            <li>Dessert N° :</li>
                        </ul>
                    </div>
                </div>
                <div id="avantD">
                    <div id="Textnu">NU</div>
                    <p class="textCarte">A</p>
                </div>
            </div>
        </div>
        <form action="menu.html">
            <button type="submit">
                <p class="BtnMenu">VOIR LES MENUS</p>
            </button>
        </form>
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