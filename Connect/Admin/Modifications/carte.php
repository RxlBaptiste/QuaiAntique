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