<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="favicon.PNG" rel="icon" type="image/png" />
    <link href="../style.css" rel="stylesheet" />
    <title class="DocTitle">Le Quai Antique</title>
</head>

<body>
    <nav class="parent">
        <div class="title">
            <h1>Le Quai Antique</h1>
        </div>
        <form action="paramCompte.php" class="BtnSeConnecter">
            <button class="btnConnecter" style="width:auto; padding:0 1em;">
                <?php
                    echo $_SESSION['mail'];
                ?>
            </button>
        </form>
    </nav>
    <main>
        <div class="slider-container">
            <span class="nos">Nos Entrées</span>
            <!-- --------------------Carrousel Entrés---------------------------------------------- -->
            <div class="slider">
                <div class="slide-track">
                    <div class="imgHover">
                        <img class="slide" src="../Assets/FausseImages/Entré1.png" alt="Entré : Tomate mozzarella" />
                        <div class="HoverBox">
                            Tomate mozzarella
                        </div>
                    </div>
                    <div class="imgHover">
                        <img class="slide" src="../Assets/FausseImages/Entré2.jpeg"
                            alt="Entré : Brochette de crevette" />
                        <div class="HoverBox">
                            Brochette de crevette
                        </div>
                    </div>
                    <div class="imgHover">
                        <img class="slide" src="../Assets/FausseImages/entré3.webp" alt="Entré : Saumon" />
                        <div class="HoverBox">
                            Saumon
                        </div>
                    </div>
                    <div class="imgHover">
                        <img class="slide" src="../Assets/FausseImages/Entré4.webp" alt="Entré : Oeuf poché" />
                        <div class="HoverBox">Oeuf poché
                        </div>
                    </div>
                    <div class="imgHover">
                        <img class="slide" src="../Assets/FausseImages/Entré1.png" alt="Entré : Tomate mozzarella" />
                        <div class="HoverBox">
                            Tomate mozzarella
                        </div>
                    </div>
                    <div class="imgHover">
                        <img class="slide" src="../Assets/FausseImages/Entré2.jpeg"
                            alt="Entré : Brochette de crevette" />
                        <div class="HoverBox">
                            Brochette de crevette
                        </div>
                    </div>
                    <div class="imgHover">
                        <img class="slide" src="../Assets/FausseImages/entré3.webp" alt="Entré : Saumon" />
                        <div class="HoverBox">
                            Saumon
                        </div>
                    </div>
                    <div class="imgHover">
                        <img class="slide" src="../Assets/FausseImages/Entré4.webp" alt="Entré : Oeuf poché" />
                        <div class="HoverBox">
                            Oeuf poché
                        </div>
                    </div>
                </div>
            </div>
            <div class="br"></div>
            <span class="nos">Nos Plats</span>
            <!-- ---------------------Carrousel Plats------------------------------------ -->
            <div class="slider">
                <div class="slide-track">
                    <div class="imgHover">
                        <img class="slide" class="entré1" src="../Assets/FausseImages/Plat1.png"
                            alt="Entré : Pâtes aux crevettes" />
                        <div class="HoverBox">
                            Pâtes aux crevettes
                        </div>
                    </div>
                    <div class="imgHover">
                        <img class="slide" src="../Assets/FausseImages/plat2.png" alt="Entré : Hamburger" />
                        <div class="HoverBox">
                            Hamburger
                        </div>
                    </div>
                    <div class="imgHover">
                        <img class="slide" src="../Assets/FausseImages/plat3.png" alt="Entré : Canard" />
                        <div class="HoverBox">
                            Canard
                        </div>
                    </div>
                    <div class="imgHover">
                        <img class="slide" src="../Assets/FausseImages/plat4.png" alt="Entré : Agneau" />
                        <div class="HoverBox">
                            Agneau
                        </div>
                    </div>
                    <div class="imgHover">
                        <img class="slide" src="../Assets/FausseImages/Plat1.png" alt="Entré : Pâtes aux crevettes" />
                        <div class="HoverBox">
                            Pâtes aux crevettes
                        </div>
                    </div>
                    <div class="imgHover">
                        <img class="slide" src="../Assets/FausseImages/plat2.png" alt="Entré : Hamburger" />
                        <div class="HoverBox">
                            Hamburger
                        </div>
                    </div>
                    <div class="imgHover">
                        <img class="slide" src="../Assets/FausseImages/plat3.png" alt="Entré : Canard" />
                        <div class="HoverBox">
                            Canard
                        </div>
                    </div>
                    <div class="imgHover">
                        <img class="slide" src="../Assets/FausseImages/plat4.png" alt="Entré : Agneau" />
                        <div class="HoverBox">
                            Agneau
                        </div>
                    </div>
                </div>
            </div>
            <div class="br">

            </div>
            <span class="nos">Nos Desserts</span>
            <!-- ---------------------Carrousel Desserts------------------------------------------------- -->
            <div class="slider">
                <div class="slide-track">
                    <div class="imgHover">
                        <img class="slide" class="entré1" src="../Assets/FausseImages/dessert1.png"
                            alt="Entré : Gâteau glaçage" />
                        <div class="HoverBox">
                            Gâteau glaçage
                        </div>
                    </div>
                    <div class="imgHover">
                        <img class="slide" src="../Assets/FausseImages/dessert2.png" alt="Entré : Macarons" />
                        <div class="HoverBox">
                            Macarons
                        </div>
                    </div>
                    <div class="imgHover">
                        <img class="slide" src="../Assets/FausseImages/dessert3.png"
                            alt="Entré : Gâteau aux fruit rouge" />
                        <div class="HoverBox">
                            Gâteau aux fruit rouge
                        </div>
                    </div>
                    <div class="imgHover">
                        <img class="slide" src="../Assets/FausseImages/dessert4.png" alt="Entré : Pancakes" />
                        <div class="HoverBox">
                            Pancakes
                        </div>
                    </div>
                    <div class="imgHover">
                        <img class="slide" src="../Assets/FausseImages/dessert1.png" alt="Entré : Gâteau glaçage" />
                        <div class="HoverBox">
                            Gâteau glaçage
                        </div>
                    </div>
                    <div class="imgHover">
                        <img class="slide" src="../Assets/FausseImages/dessert2.png" alt="Entré : Macarons" />
                        <div class="HoverBox">
                            Macarons
                        </div>
                    </div>
                    <div class="imgHover">
                        <img class="slide" src="../Assets/FausseImages/dessert3.png"
                            alt="Entré : Gâteau aux fruit rouge" />
                        <div class="HoverBox">
                            Gâteau aux fruit rouge
                        </div>
                    </div>
                    <div class="imgHover">
                        <img class="slide" src="../Assets/FausseImages/dessert4.png" alt="Entré : Pancakes" />
                        <div class="HoverBox">
                            Pancakes
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div>
            <div class="BtnContainer">
                <form action="../acces/carte.html">
                    <button class="Btn">
                        Notre Carte
                    </button>
                </form>
                <form action="../acces/reservation.html">
                    <button class="Btn">
                        Réservations
                    </button>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <div class="containerHoraire">
            <div class="horaires" id="lundi">LUNDI <br><br>12:00 - 14:00<br>19:00 - 22:00</div>
            <div class="horaires" id="mardi">MARDI <br><br>12:00 - 14:00<br>19:00 - 22:00</div>
            <div class="horaires" id="mercredi">MERCREDI <br><br>FERMÉ</div>
            <div class="horaires" id="jeudi">JEUDI <br><br>12:00 - 14:00<br>19:00 - 22:00</div>
            <div class="horaires" id="vendredi">VENDREDI <br><br>12:00 - 14:00<br>19:00 - 22:00</div>
            <div class="horaires" id="samedi">SAMEDI <br><br>19:00 - 23:00</div>
            <div class="horaires" id="dimanche">DIMANCHE<br><br>12:00 - 14:00</div>
        </div>
    </footer>
    <script src="script.js"></script>
</body>

</html>