<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="favicon.PNG" rel="icon" type="image/png" />
    <link href="css/style.css" rel="stylesheet" />
    <title class="DocTitle">Le Quai Antique</title>
    <style>
    @media screen and (max-width: 1500px) {
        .popupText {
            font-size: 8px;
            top: 200px
        }

        .formPopup {
            font-size: 20px;
        }
    }

    @media screen and (max-width: 630px) {
        .popupText {
            font-size: 8px !important;
            top: 200px !important;
            padding: 5px !important;
        }
    }

    @media screen and (max-width: 500px) {
        .popupText {
            font-size: 5px !important;
            top: 200px !important;
            width: auto !important;
        }

        .formPopup {
            font-size: 12px;
            padding: 0 50px !important;
        }

        #BtnPopup {
            padding: 5px !important;

            font-size: 8px !important;
        }
    }

    section.popup {
        display: flex;
        justify-content: center;

        z-index: 1;
        background-color: #f8cf2c;

        position: relative;
        top: 250px;

        height: auto;
        width: auto;

    }

    .popupText {
        display: flex;
        align-items: center;
        flex-direction: column;

        padding: 50px;

        position: fixed;
        background-color: #291211;
        border: solid #f8cf2c 10px;
        color: #f8cf2c;
        height: auto;
        width: 500px;
    }

    .popupTitle {
        font-size: 30px;
        font-family: "Montserrat";
        text-decoration: underline;
    }

    .spanPopup {
        font-size: 14px;
        font-family: "lora", sans-serif;
    }

    .formPopup {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #BtnPopup {
        border-radius: 20px;
        border: #f8cf2c solid 5px;
        background-color: #291211;
        color: #f8cf2c;

        padding: 10px;

        font-size: 20px;
        font-family: "lora", sans-serif;
    }

    #BtnPopup:hover {
        border: #f8cf2c solid 5px;
        color: #291211;
        background-color: #f8cf2c;
    }
    </style>
</head>

<body>
    <section class="popup">
        <div class="popupText">
            <h1 class="popupTitle">Information importante</h1>
            <br>
            <span class="spanPopup">Chers clients,</span><br>
            <span class="spanPopup">
                Nous tenons à vous informer que ce site web est un site fictif créé à des fins d'évaluation.
                Nous n'offrons aucun produit ou service réel.
            </span><br>
            <br>
            <div>
                <form action="accueil.php" method="GET" class="formPopup">
                    <div>
                        <input type="checkbox" required>Lu et accepté
                    </div>
                    <br>
                    <button id="BtnPopup" type="submit">Validé</button>
                </form>
            </div>
        </div>
    </section>
    <nav class="parent">
        <div class="title">
            <h1>Le Quai Antique</h1>
        </div>
        <form class="BtnSeConnecter">
            <button class="btnConnecter">
                Se Connecter
            </button>
        </form>
    </nav>
    <main>
        <div class="slider-container">
            <span class="nos">Nos Entrées</span>
            <!-- --------------------Carrousel Entrés---------------------------------------------- -->
            <div class="slider">
                <div class="slide-track">
                    <?php $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                            $recupPlat = $dbCarte->query("SELECT * FROM images WHERE categorie = 'entré'"); while
                            ($row = $recupPlat->fetch()){
                        ?>
                    <div class="imgHover">
                        <img class="slide" class="entré1" <?php echo "src='" . $row['image_path'] . "'"?>
                            alt=" Entré : " <?php $row['name']?>" />
                        <div class="HoverBox">
                            <?php echo $row['name'] ;?>
                        </div>
                    </div>
                    <?php }?>
                    <?php $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                            $recupPlat = $dbCarte->query("SELECT * FROM images WHERE categorie = 'entré'"); while
                            ($row = $recupPlat->fetch()){
                        ?>
                    <div class="imgHover">
                        <img class="slide" class="entré1" <?php echo "src='" . $row['image_path'] . "'"?>
                            alt=" Entré : " <?php $row['name']?>" />
                        <div class="HoverBox">
                            <?php echo $row['name'] ;?>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
            <div class="br"></div>
            <span class="nos">Nos Plats</span>
            <!-- ---------------------Carrousel Plats------------------------------------ -->
            <div class="slider">
                <div class="slide-track">
                    <?php $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                            $recupPlat = $dbCarte->query("SELECT * FROM images WHERE categorie = 'plat'"); while
                            ($row = $recupPlat->fetch()){
                        ?>
                    <div class="imgHover">
                        <img class="slide" <?php echo "src='" . $row['image_path'] . "'"?> alt=" Plat : "
                            <?php $row['name']?>" />
                        <div class="HoverBox">
                            <?php echo $row['name'] ;?>
                        </div>
                    </div>
                    <?php }?>
                    <?php $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                            $recupPlat = $dbCarte->query("SELECT * FROM images WHERE categorie = 'plat'"); while
                            ($row = $recupPlat->fetch()){
                        ?>
                    <div class="imgHover">
                        <img class="slide" <?php echo "src='" . $row['image_path'] . "'"?> alt=" Plat : "
                            <?php $row['name']?>" />
                        <div class="HoverBox">
                            <?php echo $row['name'] ;?>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
            <div class="br">

            </div>
            <span class="nos">Nos Desserts</span>
            <!-- ---------------------Carrousel Desserts------------------------------------------------- -->
            <div class="slider">
                <div class="slide-track">
                    <?php $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                            $recupPlat = $dbCarte->query("SELECT * FROM images WHERE categorie = 'dessert'"); while
                            ($row = $recupPlat->fetch()){
                        ?>
                    <div class="imgHover">
                        <img class="slide" <?php echo "src='" . $row['image_path'] . "'"?> alt=" Dessert : "
                            <?php $row['name']?>" />
                        <div class="HoverBox">
                            <?php echo $row['name'] ;?>
                        </div>
                    </div>
                    <?php }?>
                    <?php $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                            $recupPlat = $dbCarte->query("SELECT * FROM images WHERE categorie = 'dessert'"); while
                            ($row = $recupPlat->fetch()){
                        ?>
                    <div class="imgHover">
                        <img class="slide" class="entré1" <?php echo "src='" . $row['image_path'] . "'"?>
                            alt=" Dessert : " <?php $row['name']?>" />
                        <div class="HoverBox">
                            <?php echo $row['name'] ;?>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
        </div>
        <div>
            <div class="BtnContainer">
                <form>
                    <button class="Btn">
                        Notre Carte
                    </button>
                </form>
                <form>
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
    <script>
    </script>
</body>

</html>