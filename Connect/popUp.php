<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="favicon.PNG" rel="icon" type="image/png" />
    <link href="css/style.css" rel="stylesheet" />
    <title class="DocTitle">Le Quai Antique</title>
</head>

<body>
    <nav class="parent">
        <div class="title">
            <h1>Le Quai Antique</h1>
        </div>
        <form action="../acces/connection.html" class="BtnSeConnecter">
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
                <form action="Pages/carte.php">
                    <button class="Btn">
                        Notre Carte
                    </button>
                </form>
                <form action="Pages/reservation.php">
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
    alert("Votre réservation à bien été prise en compte");
    document.location.href = "Accueil.php";
    </script>
</body>

</html>