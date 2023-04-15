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
        <form action="../index.php" class="BtnSeConnecter">
            <button type="submit" class="btnConnecter">
                RETOUR
            </button>
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
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'entrée' and id = 1");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'entrée' and id = 2");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'entrée' and id = 3");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                            </ul>
                            <p class="MTitleG">Nos</p>
                            <ul class="Mplat">
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 6");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 7");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 8");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 9");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 10");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                            </ul>
                            <p class="MTitleG">Nos</p>
                            <ul class="Mplat">
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'dessert' and id = 15");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'dessert' and id = 16");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'dessert' and id = 17");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
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
          </div> -->
                <div id="MinteD">
                    <div class="Textmobile">
                        <p class="MTitleD">Entrées</p>
                        <div>
                            <ul class="Mplat">
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'entrée' and id = 4");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'entrée' and id = 5");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                            </ul>
                            <p class="MTitleD">Plats</p>
                            <ul class="Mplat">
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 11");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 12");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 13");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 14");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                            </ul>
                            <p class="MTitleD">Desserts</p>
                            <ul class="Mplat">
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'dessert' and id = 18");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'dessert' and id = 19");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
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
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'entrée' and id = 1");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                <div class="article">
                                    <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                        <button style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                            l'entré</button>
                                    </a>
                                    <u><?= $carte['name']; ?></u>&nbsp
                                    <b><?=$carte['price']?>€ </b>&nbsp
                                    <br>
                                    <i><?= $carte['description']; ?></i>
                                </div>
                                <?php
                                }
                                    ?>
                            </li>
                            <li>
                                <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'entrée' and id = 2");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                <div class="article">
                                    <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                        <button style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                            l'entré</button>
                                    </a>
                                    <u><?= $carte['name']; ?></u>&nbsp
                                    <b><?=$carte['price']?>€ </b>&nbsp
                                    <br>
                                    <i><?= $carte['description']; ?></i>
                                </div>
                                <?php
                                }
                                    ?>
                            </li>
                            <li>
                                <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'entrée' and id = 3");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                <div class="article">
                                    <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                        <button style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                            l'entré</button>
                                    </a>
                                    <u><?= $carte['name']; ?></u>&nbsp
                                    <b><?=$carte['price']?>€ </b>&nbsp
                                    <br>
                                    <i><?= $carte['description']; ?></i>
                                </div>
                                <?php
                                }
                                    ?>
                            </li>
                            <li>
                                <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'entrée' and id = 4");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                <div class="article">
                                    <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                        <button style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                            l'entré</button>
                                    </a>
                                    <u><?= $carte['name']; ?></u>&nbsp
                                    <b><?=$carte['price']?>€ </b>&nbsp
                                    <br>
                                    <i><?= $carte['description']; ?></i>
                                </div>
                                <?php
                                }
                                    ?>
                            </li>
                            <li>
                                <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'entrée' and id = 5");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                <div class="article">
                                    <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                        <button style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                            l'entré</button>
                                    </a>
                                    <u><?= $carte['name']; ?></u>&nbsp
                                    <b><?=$carte['price']?>€ </b>&nbsp
                                    <br>
                                    <i><?= $carte['description']; ?></i>
                                </div>
                                <?php
                                }
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
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 6");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 7");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 8");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 9");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 10");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                            </ul>
                        </div>
                        <div id="PlatD">
                            <ul>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 11");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 12");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 13");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'plat' and id = 14");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                    <div class="article">
                                        <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                            <button
                                                style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                                l'entré</button>
                                        </a>
                                        <u><?= $carte['name']; ?></u>&nbsp
                                        <b><?=$carte['price']?>€ </b>&nbsp
                                        <br>
                                        <i><?= $carte['description']; ?></i>
                                    </div>
                                    <?php
                                }
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="BtnMenu">
                    <a href="menu.php"><input id="BtnMenu" type="button" value="Modifier les menus" /></a>
                </div>
            </div>
            <div id="Droite">
                <div id="inteD">
                    <p id="TitleD">Nos Desserts</p>
                    <div class="liPanneau">
                        <ul>
                            <li>
                                <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'dessert' and id = 15");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                <div class="article">
                                    <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                        <button style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                            l'entré</button>
                                    </a>
                                    <u><?= $carte['name']; ?></u>&nbsp
                                    <b><?=$carte['price']?>€ </b>&nbsp
                                    <br>
                                    <i><?= $carte['description']; ?></i>
                                </div>
                                <?php
                                }
                                    ?>
                            </li>
                            <li>
                                <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'dessert' and id = 16");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                <div class="article">
                                    <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                        <button style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                            l'entré</button>
                                    </a>
                                    <u><?= $carte['name']; ?></u>&nbsp
                                    <b><?=$carte['price']?>€ </b>&nbsp
                                    <br>
                                    <i><?= $carte['description']; ?></i>
                                </div>
                                <?php
                                }
                                    ?>
                            </li>
                            <li>
                                <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'dessert' and id = 17");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                <div class="article">
                                    <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                        <button style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                            l'entré</button>
                                    </a>
                                    <u><?= $carte['name']; ?></u>&nbsp
                                    <b><?=$carte['price']?>€ </b>&nbsp
                                    <br>
                                    <i><?= $carte['description']; ?></i>
                                </div>
                                <?php
                                }
                                    ?>
                            </li>
                            <li>
                                <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'dessert' and id = 18");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                <div class="article">
                                    <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                        <button style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                            l'entré</button>
                                    </a>
                                    <u><?= $carte['name']; ?></u>&nbsp
                                    <b><?=$carte['price']?>€ </b>&nbsp
                                    <br>
                                    <i><?= $carte['description']; ?></i>
                                </div>
                                <?php
                                }
                                    ?>
                            </li>
                            <li>
                                <?php
                                    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                                    $recupPlat = $dbCarte->query("SELECT * FROM carte WHERE categories = 'dessert' and id = 19");
                                    while ($carte = $recupPlat->fetch()){
                                        ?>
                                <div class="article">
                                    <a href=" changeCarte.php?id=<?= $carte['id']; ?>">
                                        <button style="color:white; background-color:red; margin:0 0 10px 0;">Changer
                                            l'entré</button>
                                    </a>
                                    <u><?= $carte['name']; ?></u>&nbsp
                                    <b><?=$carte['price']?>€ </b>&nbsp
                                    <br>
                                    <i><?= $carte['description']; ?></i>
                                </div>
                                <?php
                                }
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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

</html>
<style>
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
</style>