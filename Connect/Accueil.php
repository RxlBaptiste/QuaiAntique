<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../Assets/favicon.PNG" rel="icon" type="image/png" />
    <link href="../css/style.css" rel="stylesheet" />
    <title class="DocTitle">Le Quai Antique | Accueil</title>
</head>

<body>
    <nav class="parent">
        <div class="title">
            <h1>Le Quai Antique</h1>
        </div>
        <form action="paramCompte.php" class="BtnSeConnecter">
            <button class="btnConnecter" style="width:auto; padding:0 1em;">
                <?php
                    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                    $recupName = $dbClient->query("SELECT * FROM client WHERE mail = '{$_SESSION['mail']}'");
                    while ($client = $recupName->fetch()){
                        $ClientFirstname = $client['firstname'];
                        $ClientName = $client['name'];
                        $ClientID = $client['id'];
                        if(!empty($ClientName)){
                            echo $ClientFirstname;
                            echo "&nbsp";
                            echo $ClientName;
                        }else{
                            echo $_SESSION['mail'];
                        }
                    }
                    $_SESSION['id'] = $ClientID;

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
                    <?php $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                            $recupPlat = $dbCarte->query("SELECT * FROM images WHERE categorie = 'entre'"); while
                            ($row = $recupPlat->fetch()){
                        ?>
                    <div class="imgHover">
                        <img class="slide" class="entré1" <?php echo "src='../" . $row['image_path'] . "'"?>
                            alt=" Entré : " <?php $row['name']?>" />
                        <div class="HoverBox">
                            <?php echo utf8_encode($row['name']) ;?>
                        </div>
                    </div>
                    <?php }?>
                    <?php $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                            $recupPlat = $dbCarte->query("SELECT * FROM images WHERE categorie = 'entre'"); while
                            ($row = $recupPlat->fetch()){
                        ?>
                    <div class="imgHover">
                        <img class="slide" class="entré1" <?php echo "src='../" . $row['image_path'] . "'"?>
                            alt=" Entré : " <?php $row['name']?>" />
                        <div class="HoverBox">
                            <?php echo utf8_encode($row['name']) ;?>
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
                    <?php $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                            $recupPlat = $dbCarte->query("SELECT * FROM images WHERE categorie = 'plat'"); while
                            ($row = $recupPlat->fetch()){
                        ?>
                    <div class="imgHover">
                        <img class="slide" <?php echo "src='../" . $row['image_path'] . "'"?> alt=" Plat : "
                            <?php $row['name']?>" />
                        <div class="HoverBox">
                            <?php echo utf8_encode($row['name']) ;?>
                        </div>
                    </div>
                    <?php }?>
                    <?php $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                            $recupPlat = $dbCarte->query("SELECT * FROM images WHERE categorie = 'plat'"); while
                            ($row = $recupPlat->fetch()){
                        ?>
                    <div class="imgHover">
                        <img class="slide" <?php echo "src='../" . $row['image_path'] . "'"?> alt=" Plat : "
                            <?php $row['name']?>" />
                        <div class="HoverBox">
                            <?php echo utf8_encode($row['name']) ;?>
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
                    <?php $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                            $recupPlat = $dbCarte->query("SELECT * FROM images WHERE categorie = 'dessert'"); while
                            ($row = $recupPlat->fetch()){
                        ?>
                    <div class="imgHover">
                        <img class="slide" <?php echo "src='../" . $row['image_path'] . "'"?> alt=" Dessert : "
                            <?php $row['name']?>" />
                        <div class="HoverBox">
                            <?php echo utf8_encode($row['name']) ;?>
                        </div>
                    </div>
                    <?php }?>
                    <?php $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                            $recupPlat = $dbCarte->query("SELECT * FROM images WHERE categorie = 'dessert'"); while
                            ($row = $recupPlat->fetch()){
                        ?>
                    <div class="imgHover">
                        <img class="slide" class="entré1" <?php echo "src='../" . $row['image_path'] . "'"?>
                            alt=" Dessert : " <?php $row['name']?>" />
                        <div class="HoverBox">
                            <?php echo utf8_encode($row['name']) ;?>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
        <div>
            <div class="BtnContainer">
                <form action="carte.php">
                    <button class="Btn">
                        Notre Carte
                    </button>
                </form>
                <form action="reservation.php">
                    <button class="Btn">
                        Réservations
                    </button>
                </form>
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
    <script src="script.js"></script>
</body>

</html>