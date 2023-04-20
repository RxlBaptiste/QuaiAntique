<?php
session_start();
    $id = $_GET['id'];
    $_SESSION['id'] = $id;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../../../Assets/favicon.PNG" rel="icon" type="image/png" />
    <link href="../../../css/style.css" rel="stylesheet" />
    <title class="DocTitle">Le Quai Antique | Le menu</title>
</head>

<body>
    <nav class="parent">
        <div class="title">
            <h1>
                <a href="../index.php">Le Quai Antique</a>
            </h1>
        </div>
        <form action="menu.php" class="BtnSeConnecter">
            <button type="submit" class="btnConnecter">
                RETOUR
            </button>
        </form>
    </nav>
    <main>
        <section class="sectionP">
            <p class="Title">Menu : <?php  
                        $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                        $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = $id"); 
                        while ($menu = $recupMenu->fetch()){ 
                          echo"<b class='Cap'>" . $menu['name']."</b>";
                        } ?></p>
            <p id="arriere"></p>
        </section>
        <section class="Page">
            <!--  FORMULAIRE N°1  -->
            <section class="Form">
                <form id="form-0" action="validationChangement.php" method="POST">
                    <?php
    
    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');


    //Recupération des Entrées
    $recupPlat = $dbCarte->query("SELECT name FROM carte WHERE categories = 'entrée'");
    while ($carte = $recupPlat->fetch()){
        $entrées[] = $carte['name'];
    }

?>
                    <select id="entre0" name="entrée-0">
                        <?php
            foreach ($entrées as $entrée) {
        ?>
                        <option value="<?php echo $entrée; ?>">
                            <?php  
                echo $entrée;
                ?>
                        </option><?php
    }
    ?>
                    </select>
                    <?php
    //Recupération des Plats
    $recupPlat = $dbCarte->query("SELECT name FROM carte WHERE categories = 'plat'");
    while ($carte = $recupPlat->fetch()){
        $plats[] = $carte['name'];
    }

?>
                    <select id="plat0" name="plat-0">
                        <?php
            foreach ($plats as $plat) {
        ?>
                        <option value="<?php echo $plat; ?>">
                            <?php  
                echo $plat;
                ?>
                        </option><?php
    }
    ?>
                    </select>
                    <?php
    //Recupération des Désserts
    $recupPlat = $dbCarte->query("SELECT name FROM carte WHERE categories = 'dessert'");
    while ($carte = $recupPlat->fetch()){
        $desserts[] = $carte['name'];
    }
?>
                    <select id="dessert0" name="dessert-0">
                        <?php
            foreach ($desserts as $dessert) {
        ?>
                        <option value="<?php echo $dessert; ?>">
                            <?php  
                echo $dessert;
                ?>
                        </option><?php
    }
    ?>
                    </select>
                </form>

                <!--  FORMULAIRE N°2  -->

                <form id="form-1" action="validationChangement.php" method="POST" class="hidden">
                    <?php
    
    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');

    //Recupération des Entrées
    $recupPlat = $dbCarte->query("SELECT name FROM carte WHERE categories = 'entrée'");
    while ($carte = $recupPlat->fetch()){
        if (!in_array($carte['name'], $entrées)) {
            $entrées[] = $carte['name'];
        }
    }

?>
                    <select id="entre1" name="entrée-1">
                        <?php
            foreach ($entrées as $entrée) {
        ?>
                        <option value="<?php echo $entrée; ?>">
                            <?php  
                echo $entrée;
                ?>
                        </option><?php
    }
    ?>
                    </select>
                    <?php
    //Recupération des Plats
    $recupPlat = $dbCarte->query("SELECT name FROM carte WHERE categories = 'plat'");
    while ($carte = $recupPlat->fetch()){
        if (!in_array($carte['name'], $plats)) {
            $plats[] = $carte['name'];
        }
    }

?>
                    <select id="plat1" name="plat-1">
                        <?php
            foreach ($plats as $plat) {
        ?>
                        <option value="<?php echo $plat; ?>">
                            <?php  
                echo $plat;
                ?>
                        </option><?php
    }
    ?>
                    </select>
                    <?php
    //Recupération des Désserts
    $recupPlat = $dbCarte->query("SELECT name FROM carte WHERE categories = 'dessert'");
    while ($carte = $recupPlat->fetch()){
        if (!in_array($carte['name'], $desserts)) {
            $desserts[] = $carte['name'];
        }
    }
?>
                    <select id="dessert1" name="dessert-1">
                        <?php
            foreach ($desserts as $dessert) {
        ?>
                        <option value="<?php echo $dessert; ?>">
                            <?php  
                echo $dessert;
                ?>
                        </option><?php
    }
    ?>
                    </select>
                </form>

                <!--  FORMULAIRE N°3  -->

                <form id="form-2" action="validationChangement.php" method="POST" class="hidden">
                    <?php
    
    $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');

    //Recupération des Entrées
    $recupPlat = $dbCarte->query("SELECT name FROM carte WHERE categories = 'entrée'");
    while ($carte = $recupPlat->fetch()){
        if (!in_array($carte['name'], $entrées)) {
            $entrées[] = $carte['name'];
        }
    }

?>
                    <select id="entre2" name="entrée-2">
                        <?php
            foreach ($entrées as $entrée) {
        ?>
                        <option value="<?php echo $entrée; ?>">
                            <?php  
                echo $entrée;
                ?>
                        </option><?php
    }
    ?>
                    </select>
                    <?php
    //Recupération des Plats
    $recupPlat = $dbCarte->query("SELECT name FROM carte WHERE categories = 'plat'");
    while ($carte = $recupPlat->fetch()){
        if (!in_array($carte['name'], $plats)) {
            $plats[] = $carte['name'];
        }
    }

?>
                    <select id="plat2" name="plat-2">
                        <?php
            foreach ($plats as $plat) {
        ?>
                        <option value="<?php echo $plat; ?>">
                            <?php  
                echo $plat;
                ?>
                        </option><?php
    }
    ?>
                    </select>
                    <?php
    //Recupération des Désserts
    $recupPlat = $dbCarte->query("SELECT name FROM carte WHERE categories = 'dessert'");
    while ($carte = $recupPlat->fetch()){
        if (!in_array($carte['name'], $desserts)) {
            $desserts[] = $carte['name'];
        }
    }
?>
                    <select id="dessert2" name="dessert-2">
                        <?php
            foreach ($desserts as $dessert) {
        ?>
                        <option value="<?php echo $dessert; ?>">
                            <?php  
                echo $dessert;
                ?>
                        </option><?php
    }
    ?>
                    </select>
                </form>
                <div class="btnAddRe">
                    <button class="btn-AddRemove" onclick="addForm()">Ajouter un formulaire</button>
                    <button class="btn-AddRemove" onclick="removeForm()">Supprimer un formulaire</button>
                </div>
            </section>
            <section class="NamePrice">
                <form action="validationChangement.php" method="POST">
                    <input id="name" name="name" type="text" placeholder="Nom du menu">
                    <input id="price" name="price" type="number" placeholder="Prix du menu">
                </form>
            </section>
            <section class="submit">
                <button class="btnSubmit" onclick="envoyerVariable()">Changer le menu <?php 
                        $dbCarte = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                        $recupMenu = $dbCarte->query("SELECT * FROM menus WHERE id = $id"); 
                        while ($menu = $recupMenu->fetch()){ 
                          echo"<u>" . $menu['name']."</u>";
                        } ?></button>
            </section>
            <div id="resultat"></div>
        </section>
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

<script>
let formCount = 1;
// récupérer les formulaires
const form1 = document.getElementById('form-0');
const form2 = document.getElementById('form-1');
const form3 = document.getElementById('form-2');

const entre0 = document.getElementById('entre0');
const plat0 = document.getElementById('plat0');
const dessert0 = document.getElementById('dessert0');

const entre1 = document.getElementById('entre1');
const plat1 = document.getElementById('plat1');
const dessert1 = document.getElementById('dessert1');

const entre2 = document.getElementById('entre2');
const plat2 = document.getElementById('plat2');
const dessert2 = document.getElementById('dessert2');

const name = document.getElementById('name');
const price = document.getElementById('price');

let form2visible = 0;
let form3visible = 0;

function addForm() {

    if (form3visible == 0 && form2visible == 1) {
        form3.classList.toggle('hidden');
        form3visible = 1;
    } else if (form2visible == 0 && form3visible == 0) {
        form2.classList.toggle('hidden');
        form2visible = 1;
    } else if (form2visible == 1 && form3visible == 1) {
        alert('Vous avez afficher le maximum de formulaire sur une carte.')
    }
    formCount++;
    console.log("Add Count : " + formCount);
}

function removeForm() {

    if (form3visible == 1 && form2visible == 1) {
        form3.classList.toggle('hidden');
        form3visible = 0;
    } else if (form2visible == 1 && form3visible == 0) {
        form2.classList.toggle('hidden');
        form2visible = 0;
    } else if (form2visible == 0 && form3visible == 0) {
        alert('Vous avez afficher le minimum de formulaire sur une carte.')
    }
    formCount--;
    console.log("Remove Count : " + formCount);
}

function envoyerVariable() {

    // Création d'une variable
    var maVariable = "Bonjour PHP !";

    // Création d'une instance d'objet XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Définition de la méthode d'envoi et de l'URL de la requête
    xhr.open("POST", "validationChangement.php", true);

    // Définition de l'en-tête de la requête
    xhr.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded"
    );

    // Définition de la fonction de rappel pour la réponse de la requête
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Affichage de la réponse dans la page
            document.getElementById("resultat").innerHTML = this.responseText;
        }
    };

    // Envoi de la requête avec les données de la variable

    if (formCount == 1) {
        xhr.send(
            "entre0=" + entre0.value +
            "&plat0=" + plat0.value +
            "&dessert0=" + dessert0.value +
            "&name=" + name.value +
            "&price=" + price.value +
            "&formCount=" + formCount
        );
    } else if (formCount == 2) {
        xhr.send(
            "entre0=" + entre0.value +
            "&plat0=" + plat0.value +
            "&dessert0=" + dessert0.value +
            "&entre1=" + entre1.value +
            "&plat1=" + plat1.value +
            "&dessert1=" + dessert1.value +
            "&name=" + name.value +
            "&price=" + price.value +
            "&formCount=" + formCount
        );
    } else if (formCount == 3) {
        xhr.send(
            "entre0=" + entre0.value +
            "&plat0=" + plat0.value +
            "&dessert0=" + dessert0.value +
            "&entre1=" + entre1.value +
            "&plat1=" + plat1.value +
            "&dessert1=" + dessert1.value +
            "&entre2=" + entre2.value +
            "&plat2=" + plat2.value +
            "&dessert2=" + dessert2.value +
            "&name=" + name.value +
            "&price=" + price.value +
            "&formCount=" + formCount
        );
    }
}
</script>

</html>
<style>
.hidden {
    display: none;
}

/*Changer la Couleur du body et ne pas mettre le form sur toute la page*/
body {
    background-color: #282527;
}

main {
    background-color: #291211;
    padding: 2em 0;
    margin: 2em 10em;
}

Section.sectionP {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    color: #f8cf2c;
    font-size: 35px;
    text-align: center;
}

.Page {
    display: flex;
    flex-direction: column;
}

p#retour {
    color: #f8cf2c;
    text-align: left;
    padding-left: 1em;
    font-size: 20px;
}

a#linkRetour {
    color: #f8cf2c;
    text-decoration: none;
}

p#retour:hover {
    text-decoration: underline;
}

p#arriere {
    text-align: right;
}

p.Title {
    text-align: center;
}

.Form {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #f8cf2c;
    padding: 2em;
    border: solid black 2px;
    border-radius: 20px;
    margin: 0 25em 2em 25em;
}

#form-0,
#form-1,
#form-2 {
    margin: 0.25em 0 3em 0;
}

#entre0,
#plat0,
#dessert0,
#entre1,
#plat1,
#dessert1,
#entre2,
#plat2,
#dessert2 {
    padding: 1em;
    border-radius: 20px;
}

Section.btnAddRe {
    display: flex;
    flex-direction: row;

    margin-top: 2em;
}

Section.NamePrice {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #f8cf2c;
    padding: 2em;
    border: solid black 2px;
    border-radius: 20px;
    margin: 2em 25em 0;
}

.btn-AddRemove {
    width: auto;
    height: 50px;
    border: solid black 1px;
    border-radius: 30px;
    padding: 0 1em;
    background-color: #f8cf2c;
    color: #252827;
    font-family: "Montserrat";
    font-weight: 800;
    font-size: 18px;
}

.btn-AddRemove:hover {
    background-color: #252827;
    color: #f8cf2c;
}

input {
    font-weight: 800;
}

input#name,
input#price {
    border-radius: 30px;
    height: 50px;
    padding: 0 1em;
    margin: 0 5em;
}

Section.submit {
    display: flex;
    justify-content: center;
}

.btnSubmit {
    margin: 5em 0 2em;
    padding: 0.75em;

    background-color: #291112;
    border: 5px solid #f8cf2c;
    color: #f8cf2c;

    font-size: 24px;
    font-weight: 800;
    border-radius: 40px;
}

.btnSubmit:hover {
    background-color: #f8cf2c;
    color: #291112;
}

.Cap {
    text-transform: uppercase;
}
</style>