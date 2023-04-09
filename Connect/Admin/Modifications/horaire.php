<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../favicon.PNG" rel="icon" type="image/png" />
    <link href="../../../css/style.css" rel="stylesheet" />
    <title class="DocTitle">Le Quai Antique / Le menu</title>
</head>

<body>
    <nav class="parent">
        <div class="title">
            <h1>
                <a href="../index.php">Le Quai Antique</a>
            </h1>
        </div>
        <form action="../index.php" class="BtnSeConnecter">
            <button type="submit" class="btnConnecter">RETOUR</button>
        </form>
    </nav>
    <main>
        <p style="color:#f8cf2c;"> Attendre les choix pour css span </p>
        <form class="horaireForm" action="changeHoraires.php" method="POST">
            <!-- LUNDI MIDI -->
            <div class="itemSelect">
                <div class="horaires">
                    <p>Horaires du midi :</p>
                </div>
                <span>Lundi midi de : &nbsp
                    <select id="lundiMO" name="lundiMO">
                        <option value="110000">11h</option>
                        <option value="111500">11h15</option>
                        <option value="113000">11h30</option>
                        <option value="114500">11h45</option>
                        <option value="120000">12h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
                <span class="span">Jusqu'à : &nbsp
                    <select id="lundiMF" name="lundiMF">
                        <option value="130000">13h</option>
                        <option value="131500">13h15</option>
                        <option value="133000">13h30</option>
                        <option value="134500">13h45</option>
                        <option value="140000">14h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
            </div>
            <!-- LUNDI SOIR -->
            <div class="itemSelect">
                <div class="horaires">
                    <p>Horaires du soir :</p>
                </div>
                <span>Lundi soir de : &nbsp
                    <select id="lundiSO" name="lundiSO">
                        <option value="190000">19h</option>
                        <option value="191500">19h15</option>
                        <option value="193000">19h30</option>
                        <option value="194500">19h45</option>
                        <option value="200000">20h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
                <span>Jusqu'à : &nbsp
                    <select id="lundiSF" name="lundiSF">
                        <option value="220000">22h</option>
                        <option value="221500">22h15</option>
                        <option value="223000">22h30</option>
                        <option value="224500">22h45</option>
                        <option value="230000">23h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
            </div>
            <br />
            <!-- MARDI MIDI -->
            <div class="itemSelect">
                <span>Mardi midi de : &nbsp
                    <select id="mardiMO" name="mardiMO">
                        <option value="110000">11h</option>
                        <option value="111500">11h15</option>
                        <option value="113000">11h30</option>
                        <option value="114500">11h45</option>
                        <option value="120000">12h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
                <span>Jusqu'à : &nbsp
                    <select id="mardiMF" name="mardiMF">
                        <option value="130000">13h</option>
                        <option value="131500">13h15</option>
                        <option value="133000">13h30</option>
                        <option value="134500">13h45</option>
                        <option value="140000">14h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
            </div>
            <!-- MARDI SOIR -->
            <div class="itemSelect">
                <span>Mardi soir de : &nbsp
                    <select id="mardiSO" name="mardiSO">
                        <option value="190000">19h</option>
                        <option value="191500">19h15</option>
                        <option value="193000">19h30</option>
                        <option value="194500">19h45</option>
                        <option value="200000">20h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
                <span>Jusqu'à : &nbsp
                    <select id="mardiSF" name="mardiSF">
                        <option value="220000">22h</option>
                        <option value="221500">22h15</option>
                        <option value="223000">22h30</option>
                        <option value="224500">22h45</option>
                        <option value="230000">23h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
            </div>
            <br />
            <!-- MERCEDI MIDI -->
            <div class="itemSelect">
                <span>Mercredi midi de : &nbsp
                    <select id="mercrediMO" name="mercrediMO">
                        <option value="110000">11h</option>
                        <option value="111500">11h15</option>
                        <option value="113000">11h30</option>
                        <option value="114500">11h45</option>
                        <option value="120000">12h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
                <span>Jusqu'à : &nbsp
                    <select id="mercrediMF" name="mercrediMF">
                        <option value="130000">13h</option>
                        <option value="131500">13h15</option>
                        <option value="133000">13h30</option>
                        <option value="134500">13h45</option>
                        <option value="140000">14h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
            </div>
            <!-- MERCREDI SOIR -->
            <div class="itemSelect">
                <span>Mercredi soir de : &nbsp
                    <select id="mercrediSO" name="mercrediSO">
                        <option value="190000">19h</option>
                        <option value="191500">19h15</option>
                        <option value="193000">19h30</option>
                        <option value="194500">19h45</option>
                        <option value="200000">20h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
                <span>Jusqu'à : &nbsp
                    <select id="mercrediSF" name="mercrediSF">
                        <option value="220000">22h</option>
                        <option value="221500">22h15</option>
                        <option value="223000">22h30</option>
                        <option value="224500">22h45</option>
                        <option value="230000">23h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
            </div>
            <br />
            <!-- JEUDI MIDI -->
            <div class="itemSelect">
                <span>Jeudi midi de : &nbsp
                    <select id="jeudiMO" name="jeudiMO">
                        <option value="110000">11h</option>
                        <option value="111500">11h15</option>
                        <option value="113000">11h30</option>
                        <option value="114500">11h45</option>
                        <option value="120000">12h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
                <span>Jusqu'à : &nbsp
                    <select id="jeudiMF" name="jeudiMF">
                        <option value="130000">13h</option>
                        <option value="131500">13h15</option>
                        <option value="133000">13h30</option>
                        <option value="134500">13h45</option>
                        <option value="140000">14h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
            </div>
            <!-- JEUDI SOIR -->
            <div class="itemSelect">
                <span>Jeudi soir de : &nbsp
                    <select id="jeudiSO" name="jeudiSO">
                        <option value="190000">19h</option>
                        <option value="191500">19h15</option>
                        <option value="193000">19h30</option>
                        <option value="194500">19h45</option>
                        <option value="200000">20h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
                <span>Jusqu'à : &nbsp
                    <select id="jeudiSF" name="jeudiSF">
                        <option value="220000">22h</option>
                        <option value="221500">22h15</option>
                        <option value="223000">22h30</option>
                        <option value="224500">22h45</option>
                        <option value="230000">23h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
            </div>
            <br />
            <!-- VENDREDI MIDI -->
            <div class="itemSelect">
                <span>Vendredi midi de : &nbsp
                    <select id="vendrediMO" name="vendrediMO">
                        <option value="110000">11h</option>
                        <option value="111500">11h15</option>
                        <option value="113000">11h30</option>
                        <option value="114500">11h45</option>
                        <option value="120000">12h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
                <span>Jusqu'à : &nbsp
                    <select id="vendrediMF" name="vendrediMF">
                        <option value="130000">13h</option>
                        <option value="131500">13h15</option>
                        <option value="133000">13h30</option>
                        <option value="134500">13h45</option>
                        <option value="140000">14h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
            </div>
            <!-- VENDREDI SOIR -->
            <div class="itemSelect">
                <span>Vendredi soir de : &nbsp
                    <select id="vendrediSO" name="vendrediSO">
                        <option value="190000">19h</option>
                        <option value="191500">19h15</option>
                        <option value="193000">19h30</option>
                        <option value="194500">19h45</option>
                        <option value="200000">20h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
                <span>Jusqu'à : &nbsp
                    <select id="vendrediSF" name="vendrediSF">
                        <option value="220000">22h</option>
                        <option value="221500">22h15</option>
                        <option value="223000">22h30</option>
                        <option value="224500">22h45</option>
                        <option value="230000">23h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
            </div>
            <br />
            <!-- SAMEDI MIDI -->
            <div class="itemSelect">
                <span>Samedi midi de : &nbsp
                    <select id="samediMO" name="samediMO">
                        <option value="110000">11h</option>
                        <option value="111500">11h15</option>
                        <option value="113000">11h30</option>
                        <option value="114500">11h45</option>
                        <option value="120000">12h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
                <span>Jusqu'à : &nbsp
                    <select id="samediMF" name="samediMF">
                        <option value="130000">13h</option>
                        <option value="131500">13h15</option>
                        <option value="133000">13h30</option>
                        <option value="134500">13h45</option>
                        <option value="140000">14h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
            </div>
            <!-- SAMEDI SOIR -->
            <div class="itemSelect">
                <span>Samedi soir de : &nbsp
                    <select id="samediSO" name="samediSO">
                        <option value="190000">19h</option>
                        <option value="191500">19h15</option>
                        <option value="193000">19h30</option>
                        <option value="194500">19h45</option>
                        <option value="200000">20h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
                <span>Jusqu'à : &nbsp
                    <select id="samediSF" name="samediSF">
                        <option value="220000">22h</option>
                        <option value="221500">22h15</option>
                        <option value="223000">22h30</option>
                        <option value="224500">22h45</option>
                        <option value="230000">23h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
            </div>
            <br />
            <!-- DIMANCHE MIDI -->
            <div class="itemSelect">
                <span>Dimanche midi de : &nbsp
                    <select id="dimancheMO" name="dimancheMO">
                        <option value="110000">11h</option>
                        <option value="111500">11h15</option>
                        <option value="113000">11h30</option>
                        <option value="114500">11h45</option>
                        <option value="120000">12h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
                <span>Jusqu'à : &nbsp
                    <select id="dimancheMF" name="dimancheMF">
                        <option value="130000">13h</option>
                        <option value="131500">13h15</option>
                        <option value="133000">13h30</option>
                        <option value="134500">13h45</option>
                        <option value="140000">14h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
            </div>
            <!-- DIMANCHE SOIR -->
            <div class="itemSelect">
                <span>Dimanche soir de : &nbsp
                    <select id="dimancheSO" name="dimancheSO">
                        <option value="190000">19h</option>
                        <option value="191500">19h15</option>
                        <option value="193000">19h30</option>
                        <option value="194500">19h45</option>
                        <option value="200000">20h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
                <span>Jusqu'à : &nbsp
                    <select id="dimancheSF" name="dimancheSF">
                        <option value="220000">22h</option>
                        <option value="221500">22h15</option>
                        <option value="223000">22h30</option>
                        <option value="224500">22h45</option>
                        <option value="230000">23h</option>
                        <option value="ferme">FERMÉ</option>
                    </select></span>
            </div>
            <div class="BtnEnd">
                <input id="btnSubmit" name="submit" type="submit" value="Enregistré les horaires" />
            </div>
        </form>
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
main {
    display: flex;
    flex-direction: column;
    align-items: center;

}

span {
    font-size: 24px;
    font-family: "Montserrat";
    color: #252827;
    white-space: nowrap;
    /*
    justify-content : center; choix 1*/
    justify-content: flex-end;
    /*choix 2
    
    justify-content : space-between; choix 3
    justify-content : space-evenly; choix 4
    */
}

.horaireForm {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    background-color: #f8cf2c;
    margin: 5em;
    padding: 5em 0;
    border-radius: 50px;
    width: 55%;
    justify-content: space-around;
}

.horaires {
    display: flex;
    white-space: nowrap;
    font-family: "Montserrat";
    font-size: 30px;
    font-weight: bold;
}

.horaires p {
    text-decoration: underline;
}

.itemSelect {
    text-align: center;
    flex-basis: calc(45% - 10px);
    padding-left: 20%;
    margin: 20px;
    text-align: center;
    box-sizing: border-box;
}

.BtnEnd {
    flex-basis: auto;
    margin: 5em 0 0 0;
}

#btnSubmit {
    /* 
    display: flex;
    justify-content: center; 
    margin: 5em 0 5em 40%;*/
}

#btnSubmit:hover {
    background-color: #252827;
    color: #f8cf2c;
}

#btnSubmit {
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