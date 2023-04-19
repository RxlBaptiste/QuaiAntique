<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../favicon.PNG" rel="icon" type="image/png" />
    <link href="../css/style.css" rel="stylesheet" />
    <title class="DocTitle">Le Quai Antique / Votre Revervation</title>
    <style>
    /*Style pour les allergies*/
    #btnGoAllergie {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #submitAllergies {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #titleAllergies {
        color: #fffee6;
        text-align: center;
        font-size: 1.5vw;
    }

    .Allergies {
        width: 25%;

        display: grid;
        grid-template-columns: repeat(2, 50%);
        grid-template-rows: 100%;
        grid-column-gap: 0px;
        grid-row-gap: 0px;

        justify-items: stretch;

        margin: 2em;
        margin-left: 22%;
        padding: 0 9.5em;

        border-radius: 50px;

        background-color: #fffee6;
    }

    .Gauche {
        grid-area: 1 / 1 / 2 / 2;
        border-right: 2px solid black;
    }

    .allergieGauche {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        margin-right: 1em;
        margin: 2em;
    }

    .Droite {
        grid-area: 1 / 2 / 2 / 3;
        border-left: 2px solid black;
    }

    .allergieDroite {
        display: flex;
        flex-direction: column;
        align-items: center;
        align-items: flex-start;
        margin-left: 1em;
        margin: 2em;
    }

    .switch {
        display: inline-block;
        position: relative;
        width: 70px;
        height: 40px;
        cursor: pointer;
        overflow: hidden;

        margin-left: 1.5em;
    }

    .switch input {
        position: absolute;
        top: -30px;
        left: -30px;
        width: 0;
        height: 0;
    }

    .switch input+span {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: #99b4df;
        border-radius: 20px;
    }

    .switch input:checked+span {
        background: #346abf;
    }

    .switch input+span:before {
        content: "";
        display: inline-block;
        position: absolute;
        top: 50%;
        left: 4px;
        width: 32px;
        height: 32px;
        background: white;
        border-radius: 50%;
        transform: translateY(-50%);
        transition: all 0.5s;
    }

    .switch input:checked+span:before {
        left: 34px;
    }

    .textAllergies {
        display: flex;
        flex-direction: row;
        align-items: center;
        white-space: nowrap;
    }

    .AllergiesDescription {
        color: white;
    }

    section {
        margin: 0.5em 0 0.5em 0;
    }
    </style>
</head>

<body>
    <nav class="parent">
        <div class="title">
            <h1>
                <a href="../index.php">Le Quai Antique</a>
            </h1>
        </div>
        <form action="connection.html" class="BtnSeConnecter">
            <button class="btnConnecter">Se Connecter</button>
        </form>
    </nav>
    <main>
        <div class="FondReservation">
            <form method="POST" action="bonDeResa.php" class="FormReservation">
                <div id="page1">
                    <div class="preambule">
                        <p class="phrases">
                            Merci d'avance de préciser en commentaire le nombre d'enfants
                            présent à table (si il y en a).
                        </p>
                        <br />
                        <p class="phrases">
                            Pour tout retard de plus de 20min votre table sera donnée à
                            d'autre client !
                        </p>
                    </div>
                    <div id="inputs">
                        <label for="name" class="LabelToInputs">Veuiller indiquer votre nom :
                        </label>
                        <input id="name" name="name" class="InputReservation" type="text"
                            placeholder="Nom de la réservation" required />
                        <br />
                        <label for="tel" class="LabelToInputs">Veuiller indiquer votre numéro de téléphone :
                        </label>
                        <input id="tel" name="tel" class="InputReservation" type="tel" placeholder="Numéro de téléphone"
                            pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" required />
                        <br />
                        <label for="nbPers" class="LabelToInputs">Veuiller indiquer le nombre de personne :
                        </label>
                        <input id="number" name="nbPers" class="InputReservation" type="number"
                            placeholder="Nombre de personnes" min="1" max="10" required />
                        <br />
                        <label for="date" class="LabelToInputs">Choisissez votre date : </label>
                        <input id="date" name="date" class="InputReservation" type="date" placeholder="Quel jour"
                            required />
                        <?php 
                        $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                        // Requête SQL pour récupérer les dates et heures regroupées ensemble et le nombre de fois où ils apparaissent
                        $sql = "SELECT CONCAT(Date, ' ', Horaire) AS date_heure, COUNT(*) AS count FROM reservation GROUP BY date_heure";
                        
                        $result = $dbClient->prepare($sql);
                        $result->execute();
                                        
                        // Boucle sur les résultats de la requête et stocke les noms qui apparaissent 5 fois ou plus dans un tableau
                        $resultats = array();
                                        
                        while($row = $result->fetch()) {
                            if ($row["count"] == 5 && !in_array($row["date_heure"], $resultats)) {
                                array_push($resultats, $row["date_heure"]);
                                //var_dump($resultats);
                            }
                        }

                        ?>
                        <br />
                        <label class="LabelToInputs">Ecrivez un commentaire : </label>
                        <input id="commentaire" name="commentaire" class="InputReservation" type="text"
                            placeholder="Commentaire" />
                    </div>
                    <div id="btnGoAllergie">
                        <button id="BtnAllergies" type="button" onclick="nextPage()">
                            Des allergies ? Cliquer ici.
                        </button>
                    </div>
                    <div id="choixHoraires">
                        <p class="TextHoraire">MIDI</p>
                        <div class="HoraireMidi">
                            <div class="ContainerHoraire">
                                <input id="horaires1" class="BtnRadio" type="radio" name="horaires" value="12:00:00"
                                    onclick="horaire()" required />
                                <label for="12:00">12:00</label>
                            </div>
                            <div class="ContainerHoraire">
                                <input id="horaires2" class="BtnRadio" type="radio" name="horaires" value="12:15:00"
                                    onclick="horaire()" required />
                                <label for="12:15">12:15</label>
                            </div>
                            <div class="ContainerHoraire">
                                <input id="horaires3" class="BtnRadio" type="radio" value="12:30:00" name="horaires"
                                    onclick="horaire()" required />
                                <label for="12:30">12:30</label>
                            </div>
                            <div class="ContainerHoraire">
                                <input id="horaires4" class="BtnRadio" type="radio" value="12:45:00" name="horaires"
                                    onclick="horaire()" required />
                                <label for="12:45">12:45</label>
                            </div>
                            <div class="ContainerHoraire">
                                <input id="horaires5" class="BtnRadio" type="radio" value="13:00:00" name="horaires"
                                    onclick="horaire()" required />
                                <label for="13:00">13:00</label>
                            </div>
                        </div>
                        <p class="TextHoraire">SOIR</p>
                        <div class="HoraireSoir">
                            <div class="ContainerHoraire">
                                <input id="horaires6" class="BtnRadio" type="radio" value="19:00:00" name="horaires"
                                    onclick="horaire()" />
                                <label for="19:00">19:00</label>
                            </div>
                            <div class="ContainerHoraire">
                                <input id="horaires7" class="BtnRadio" type="radio" value="19:15:00" name="horaires"
                                    onclick="horaire()" />
                                <label for="19:15">19:15</label>
                            </div>
                            <div class="ContainerHoraire">
                                <input id="horaires8" class="BtnRadio" type="radio" value="19:30:00" name="horaires"
                                    onclick="horaire()" />
                                <label for="19:30">19:30</label>
                            </div>
                            <div class="ContainerHoraire">
                                <input id="horaires9" class="BtnRadio" type="radio" value="19:45:00" name="horaires"
                                    onclick="horaire()" />
                                <label for="19:45">19:45</label>
                            </div>
                            <div class="ContainerHoraire">
                                <input id="horaires10" class="BtnRadio" type="radio" value="20:00:00" name="horaires"
                                    onclick="horaire()" />
                                <label for="20:00">20:00</label>
                            </div>
                            <div class="ContainerHoraire">
                                <input id="horaires11" class="BtnRadio" type="radio" value="20:15:00" name="horaires"
                                    onclick="horaire()" />
                                <label for="20:15">20:15</label>
                            </div>
                            <div class="ContainerHoraire">
                                <input id="horaires12" class="BtnRadio" type="radio" value="20:30:00" name="horaires"
                                    onclick="horaire()" />
                                <label for="20:30">20:30</label>
                            </div>
                            <div class="ContainerHoraire">
                                <input id="horaires13" class="BtnRadio" type="radio" value="20:45:00" name="horaires"
                                    onclick="horaire()" />
                                <label for="20:45">20:45</label>
                            </div>
                            <div class="ContainerHoraire">
                                <input id="horaires14" class="BtnRadio" type="radio" value="21:00:00" name="horaires"
                                    onclick="horaire()" />
                                <label for="21:00">21:00</label>
                            </div>
                            <div class="ContainerHoraire">
                                <input id="horaires15" class="BtnRadio" type="radio" value="21:15:00" name="horaires"
                                    onclick="horaire()" />
                                <label for="21:15">21:15</label>
                            </div>
                            <div class="ContainerHoraire">
                                <input id="horaires16" class="BtnRadio" type="radio" value="21:30:00" name="horaires"
                                    onclick="horaire()" />
                                <label for="21:30">21:30</label>
                            </div>
                            <div class="ContainerHoraire">
                                <input id="horaires17" class="BtnRadio" type="radio" value="21:45:00" name="horaires"
                                    onclick="horaire()" />
                                <label for="21:45">21:45</label>
                            </div>
                            <div id="boxhoraire" class="ContainerHoraire">
                                <input id="horaires18" class="BtnRadio" type="radio" value="22:00:00" name="horaires"
                                    onclick="horaire()" />
                                <label for="22:00">22:00</label>
                            </div>
                        </div>
                    </div>
                    <div id="containerBtnReservation">
                        <button id="BtnReservation" name="submit" type="submit">
                            Reserver votre table
                        </button>
                    </div>
                </div>
                <!--Page 2-->
                <?php 
          $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
          ?>
                <div id="page2" style="display: none">
                    <div id="titleAllergies">
                        <u>Cocher les allergies.</u><br>
                        <p style="font-size: .5em;">Si vous souffrez d'une allergie qui n'est pas mentionnée, veuillez
                            l'indiquer dans la section
                            commentaire. </p>
                    </div>
                    <div class="Allergies">
                        <?php

                            $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                            // Define a function to generate the HTML for an allergy
                            function generateAllergyHtml2($id, $name, $description) {
                                $html = '<section>
                                            <div class="textAllergies">
                                                <u>' . htmlspecialchars($name) . '</u>
                                                <label class="switch">
                                                    <input type="checkbox" name="allergies[]" value="' . htmlspecialchars($name) . '" />
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="textAllergies">
                                                <i style="font-size:0.8em">' . htmlspecialchars($description) . '</i>
                                            </div>
                                        </section>';
                                return $html;
                            }
                            // Use prepared statements to query the database
                            $statement = $dbClient->prepare("SELECT * FROM allergies WHERE id=:id");
                            // récupérer tous les ids de la base de données
                            $statementAllIds = $dbClient->query('SELECT id FROM allergies');
                            $ids = $statementAllIds->fetchAll(PDO::FETCH_COLUMN);

                            // trier les ids par ordre décroissant
                            rsort($ids);

                            // sélectionner la dernière moitié des ids
                            $halfCount = count($ids) / 2;
                            $lastHalfIds = array_slice($ids, $halfCount);

                            // utiliser les ids sélectionnés pour générer le HTML
                            $html = '';
                            foreach (array_reverse($lastHalfIds) as $id) {
                                $statement->execute([':id' => $id]);
                                $allergie = $statement->fetch();
                                $html .= generateAllergyHtml2($allergie['id'], utf8_encode($allergie['name']), utf8_encode($allergie['description']));
                            }
                        ?>
                        <section class="Gauche">
                            <div class="allergieGauche">
                                <?php echo $html; ?>
                            </div>
                        </section>
                        <?php
                        $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
                        // Define a function to generate the HTML for an allergy
                        function generateAllergyHtml($id, $name, $description) {
                        $html = '<section>
                            <div class="textAllergies">
                                <u>' . htmlspecialchars($name) . '</u>
                                <label class="switch">
                                    <input type="checkbox" name="allergies[]" value="' . htmlspecialchars($name) . '" />
                                    <span></span>
                                </label>
                            </div>
                            <div class="textAllergies">
                                <i style="font-size:0.8em">' . htmlspecialchars($description) . '</i>
                            </div>
                        </section>';
                        return $html;
                        }
                        // Use prepared statements to query the database
                        $statement = $dbClient->prepare("SELECT * FROM allergies WHERE id=:id");
                        // récupérer tous les ids de la base de données
                        $statementAllIds = $dbClient->query('SELECT id FROM allergies');
                        $ids = $statementAllIds->fetchAll(PDO::FETCH_COLUMN);

                        // trier les ids par ordre décroissant
                        rsort($ids);

                        // sélectionner la dernière moitié des ids
                        $halfCount = count($ids) / 2;
                        $lastHalfIds = array_slice($ids,0, $halfCount);

                        // utiliser les ids sélectionnés pour générer le HTML
                        $html = '';
                        foreach (array_reverse($lastHalfIds) as $id) {
                        $statement->execute([':id' => $id]);
                        $allergie = $statement->fetch();
                        $html .= generateAllergyHtml($allergie['id'], $allergie['name'], $allergie['description']);
                        }

                        ?>
                        <section class="Droite">
                            <div class="allergieDroite">
                                <?php echo $html; ?>
                            </div>
                        </section>
                    </div>
                    <br><br>
                    <section id="submitAllergies">
                        <button type="button" class="btnConnecter" onclick="prevPage()">
                            Validé les allergies
                        </button>
                    </section>

                </div>
            </form>
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
    <script>
    const checkbox1 = document.getElementById("horaires1");
    const checkbox2 = document.getElementById("horaires2");
    const checkbox3 = document.getElementById("horaires3");
    const checkbox4 = document.getElementById("horaires4");
    const checkbox5 = document.getElementById("horaires5");
    const checkbox6 = document.getElementById("horaires6");
    const checkbox7 = document.getElementById("horaires7");
    const checkbox8 = document.getElementById("horaires8");
    const checkbox9 = document.getElementById("horaires9");
    const checkbox10 = document.getElementById("horaires10");
    const checkbox11 = document.getElementById("horaires11");
    const checkbox12 = document.getElementById("horaires12");
    const checkbox13 = document.getElementById("horaires13");
    const checkbox14 = document.getElementById("horaires14");
    const checkbox15 = document.getElementById("horaires15");
    const checkbox16 = document.getElementById("horaires16");
    const checkbox17 = document.getElementById("horaires17");
    const checkbox18 = document.getElementById("horaires18");
    const divParent1 = checkbox1.parentNode;
    const divParent2 = checkbox2.parentNode;
    const divParent3 = checkbox3.parentNode;
    const divParent4 = checkbox4.parentNode;
    const divParent5 = checkbox5.parentNode;
    const divParent6 = checkbox6.parentNode;
    const divParent7 = checkbox7.parentNode;
    const divParent8 = checkbox8.parentNode;
    const divParent9 = checkbox9.parentNode;
    const divParent10 = checkbox10.parentNode;
    const divParent11 = checkbox11.parentNode;
    const divParent12 = checkbox12.parentNode;
    const divParent13 = checkbox13.parentNode;
    const divParent14 = checkbox14.parentNode;
    const divParent15 = checkbox15.parentNode;
    const divParent16 = checkbox16.parentNode;
    const divParent17 = checkbox17.parentNode;
    const divParent18 = checkbox18.parentNode;

    function horaire() {
        if (checkbox1.checked) {
            divParent1.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox1.checked && !checkbox1.getAttribute("disabled", true)) {
            divParent1.style.backgroundColor = "#fffee6";
        }
        if (checkbox2.checked) {
            divParent2.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox2.checked && !checkbox2.getAttribute("disabled", true)) {
            divParent2.style.backgroundColor = "#fffee6";
        }
        if (checkbox3.checked) {
            divParent3.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox3.checked && !checkbox3.getAttribute("disabled", true)) {
            divParent3.style.backgroundColor = "#fffee6";
        }
        if (checkbox4.checked) {
            divParent4.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox4.checked && !checkbox4.getAttribute("disabled", true)) {
            divParent4.style.backgroundColor = "#fffee6";
        }
        if (checkbox5.checked) {
            divParent5.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox5.checked && !checkbox5.getAttribute("disabled", true)) {
            divParent5.style.backgroundColor = "#fffee6";
        }
        if (checkbox6.checked) {
            divParent6.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox6.checked && !checkbox6.getAttribute("disabled", true)) {
            divParent6.style.backgroundColor = "#fffee6";
        }
        if (checkbox7.checked) {
            divParent7.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox7.checked && !checkbox7.getAttribute("disabled", true)) {
            divParent7.style.backgroundColor = "#fffee6";
        }
        if (checkbox8.checked) {
            divParent8.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox8.checked && !checkbox8.getAttribute("disabled", true)) {
            divParent8.style.backgroundColor = "#fffee6";
        }
        if (checkbox9.checked) {
            divParent9.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox9.checked && !checkbox9.getAttribute("disabled", true)) {
            divParent9.style.backgroundColor = "#fffee6";
        }
        if (checkbox10.checked) {
            divParent10.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox10.checked && !checkbox10.getAttribute("disabled", true)) {
            divParent10.style.backgroundColor = "#fffee6";
        }
        if (checkbox11.checked) {
            divParent11.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox11.checked && !checkbox11.getAttribute("disabled", true)) {
            divParent11.style.backgroundColor = "#fffee6";
        }
        if (checkbox12.checked) {
            divParent12.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox12.checked && !checkbox12.getAttribute("disabled", true)) {
            divParent12.style.backgroundColor = "#fffee6";
        }
        if (checkbox13.checked) {
            divParent13.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox13.checked && !checkbox13.getAttribute("disabled", true)) {
            divParent13.style.backgroundColor = "#fffee6";
        }
        if (checkbox14.checked) {
            divParent14.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox14.checked && !checkbox14.getAttribute("disabled", true)) {
            divParent14.style.backgroundColor = "#fffee6";
        }
        if (checkbox15.checked) {
            divParent15.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox15.checked && !checkbox15.getAttribute("disabled", true)) {
            divParent15.style.backgroundColor = "#fffee6";
        }
        if (checkbox16.checked) {
            divParent16.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox16.checked && !checkbox16.getAttribute("disabled", true)) {
            divParent16.style.backgroundColor = "#fffee6";
        }
        if (checkbox17.checked) {
            divParent17.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox17.checked && !checkbox17.getAttribute("disabled", true)) {
            divParent17.style.backgroundColor = "#fffee6";
        }
        if (checkbox18.checked) {
            divParent18.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox18.checked && !checkbox18.getAttribute("disabled", true)) {
            divParent18.style.backgroundColor = "#fffee6";
        }
    }

    const inputDate = document.getElementById("date");
    /*
         const heureInput = document.getElementById("heure"); */
    const box = document.getElementById("boxhoraire");
    const elements = document.getElementsByClassName("ContainerHoraire");

    inputDate.addEventListener("change", function() {
        const dateValue = inputDate.value;
        const date = new Date(dateValue);
        const jourSemaine = date.toLocaleDateString("fr-FR", {
            weekday: "long",
        });
        console.log("Jour de la semaine :", jourSemaine);

        if ((jourSemaine == "lundi", "mardi", "jeudi", "vendredi")) {
            //Enleve la color red & input disable
            checkbox1.removeAttribute("disabled");
            checkbox2.removeAttribute("disabled");
            checkbox3.removeAttribute("disabled");
            checkbox4.removeAttribute("disabled");
            checkbox5.removeAttribute("disabled");
            checkbox6.removeAttribute("disabled");
            checkbox7.removeAttribute("disabled");
            checkbox8.removeAttribute("disabled");
            checkbox9.removeAttribute("disabled");
            checkbox10.removeAttribute("disabled");
            checkbox11.removeAttribute("disabled");
            checkbox12.removeAttribute("disabled");
            checkbox13.removeAttribute("disabled");
            checkbox14.removeAttribute("disabled");
            checkbox15.removeAttribute("disabled");
            checkbox16.removeAttribute("disabled");
            checkbox17.removeAttribute("disabled");
            checkbox18.removeAttribute("disabled");

            for (let i = 0; i < elements.length; i++) {
                elements[i].style.backgroundColor = "";
            }
            //Ajoute la color red & input disable
            checkbox15.setAttribute("disabled", true);
            checkbox16.setAttribute("disabled", true);
            checkbox17.setAttribute("disabled", true);
            checkbox18.setAttribute("disabled", true);
            for (let i = 14; i < elements.length; i++) {
                elements[i].style.backgroundColor = "red";
            }
        }
        if (jourSemaine == "mercredi") {
            //Enleve la color red & input disable
            checkbox1.removeAttribute("disabled");
            checkbox2.removeAttribute("disabled");
            checkbox3.removeAttribute("disabled");
            checkbox4.removeAttribute("disabled");
            checkbox5.removeAttribute("disabled");
            checkbox15.removeAttribute("disabled");
            checkbox16.removeAttribute("disabled");
            checkbox17.removeAttribute("disabled");
            checkbox18.removeAttribute("disabled");
            for (let i = 0; i < 5; i++) {
                elements[i].style.backgroundColor = "";
            }
            for (let i = 14; i < elements.length; i++) {
                elements[i].style.backgroundColor = "";
            }
            alert(
                "Nous sommes fermé le " +
                jourSemaine +
                ". Veuillez choisir un autre jour"
            );
            document.getElementById("date").value = "";
        }
        if (jourSemaine == "samedi") {
            //Enleve la color red & input disable
            checkbox6.removeAttribute("disabled");
            checkbox7.removeAttribute("disabled");
            checkbox8.removeAttribute("disabled");
            checkbox9.removeAttribute("disabled");
            checkbox10.removeAttribute("disabled");
            checkbox11.removeAttribute("disabled");
            checkbox12.removeAttribute("disabled");
            checkbox13.removeAttribute("disabled");
            checkbox14.removeAttribute("disabled");
            checkbox15.removeAttribute("disabled");
            checkbox16.removeAttribute("disabled");
            checkbox17.removeAttribute("disabled");
            checkbox18.removeAttribute("disabled");
            for (let i = 5; i < elements.length; i++) {
                elements[i].style.backgroundColor = "";
            }
            for (let i = 14; i < elements.length; i++) {
                elements[i].style.backgroundColor = "";
            }
            //Ajoute la color red & input disable
            checkbox1.setAttribute("disabled", true);
            checkbox2.setAttribute("disabled", true);
            checkbox3.setAttribute("disabled", true);
            checkbox4.setAttribute("disabled", true);
            checkbox5.setAttribute("disabled", true);
            for (let i = 0; i < 5; i++) {
                elements[i].style.backgroundColor = "red";
            }
        }
        if (jourSemaine == "dimanche") {
            //Enleve la color red & input disable
            checkbox1.removeAttribute("disabled");
            checkbox2.removeAttribute("disabled");
            checkbox3.removeAttribute("disabled");
            checkbox4.removeAttribute("disabled");
            checkbox5.removeAttribute("disabled");
            checkbox15.removeAttribute("disabled");
            checkbox16.removeAttribute("disabled");
            checkbox17.removeAttribute("disabled");
            checkbox18.removeAttribute("disabled");
            for (let i = 0; i < 5; i++) {
                elements[i].style.backgroundColor = "";
            }
            for (let i = 14; i < elements.length; i++) {
                elements[i].style.backgroundColor = "";
            }
            //Ajoute la color red & input disable
            checkbox6.setAttribute("disabled", true);
            checkbox7.setAttribute("disabled", true);
            checkbox8.setAttribute("disabled", true);
            checkbox9.setAttribute("disabled", true);
            checkbox10.setAttribute("disabled", true);
            checkbox11.setAttribute("disabled", true);
            checkbox12.setAttribute("disabled", true);
            checkbox13.setAttribute("disabled", true);
            checkbox14.setAttribute("disabled", true);
            checkbox15.setAttribute("disabled", true);
            checkbox16.setAttribute("disabled", true);
            checkbox17.setAttribute("disabled", true);
            checkbox18.setAttribute("disabled", true);
            for (let i = 5; i < elements.length; i++) {
                elements[i].style.backgroundColor = "red";
            }
        }

        let resultatsPHP = '<?php echo json_encode($resultats); ?>';
        let resultatsJS = JSON.parse(resultatsPHP);
        let datesHeures = [];

        for (let i = 0; i < resultatsJS.length; i++) {
            let dateHeure = resultatsJS[i].split(" ");
            datesHeures.push({
                date: dateHeure[0],
                heure: dateHeure[1]

            });
            console.log(dateHeure);
        }

        let checkboxes = document.querySelectorAll('input[type="radio"]');

        // Parcours des checkbox radio
        for (let i = 0; i < checkboxes.length; i++) {
            let checkbox = checkboxes[i];
            let checkboxValue = checkbox.value;

            // Récupération de la date sélectionnée
            let dateSelectionnee = document.querySelector('input[type="date"]').value;

            // Vérification si la date sélectionnée correspond à une date présente dans le tableau datesHeures
            for (let i = 0; i < datesHeures.length; i++) {
                if (datesHeures[i].date === dateSelectionnee) {
                    // Boucle sur les heures de cette date
                    for (let j = 0; j < checkboxes.length; j++) {
                        let checkbox = checkboxes[j];
                        let checkboxValue = checkbox.value;
                        if (datesHeures[i].heure === checkboxValue) {
                            // Désactivation de la checkbox
                            checkbox.disabled = true;
                            // Changement de la couleur de fond de la div parent de la checkbox
                            checkbox.parentElement.style.backgroundColor = 'gray';
                        }
                    }
                }
            }
        }
    });
    //Formulaire en 2
    function nextPage() {
        document.getElementById("page1").style.display = "none";
        document.getElementById("page2").style.display = "block";
    }

    function prevPage() {
        document.getElementById("page2").style.display = "none";
        document.getElementById("page1").style.display = "block";
    }
    </script>
</body>

</html>