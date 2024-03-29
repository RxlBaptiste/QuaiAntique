<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../../Assets/favicon.PNG" rel="icon" type="image/png" />
    <link href="../../css/style.css" rel="stylesheet" />
    <title>Le quai antique | Les allergies</title>
    <style>
    @media only screen and (max-width:1300px) {


        .Allergies {
            padding: 0 5em !important;
        }

        .switch {
            height: 28.6px !important;
            width: 50px !important;
        }

        .switch input+span:before {
            width: 21px !important;
            height: 21px !important;
        }

        .switch input:checked+span:before {
            left: 25px !important;
        }

        .Gauche,
        .Droite {
            font-size: .5em;
        }

        .textAllergies {
            font-size: 1em;
        }

        footer {
            font-size: 14px;
        }
    }

    @media only screen and (max-width:800px) {
        #titleAllergies {
            font-size: 1em !important;
        }

        .Allergies {
            padding: 0 4em !important;
        }

        .Gauche,
        .Droite {
            font-size: .2em;
        }

        .textAllergies {
            font-size: 2em;
        }

        .btnConnecter {
            padding: 1em !important;
            margin: 1em !important;
            width: 20vw !important;
            height: 7vw !important;
        }

        /* 
        .btnConnecter {} */
    }

    @media only screen and (max-width:600px) {
        #titleAllergies {
            font-size: 0.65em !important;
        }

        .FormReservation {
            padding: 0 4em !important;
        }

        .Allergies {
            padding: 0 4em !important;
        }

        .switch {
            height: 28.6px !important;
            width: 50px !important;
        }

        .switch input+span:before {
            width: 21px !important;
            height: 21px !important;
        }

        .Gauche,
        .Droite {
            font-size: .2em;
        }

        .textAllergies {
            font-size: 2em;
        }

        .btnConnecter {
            width: 28vw !important;
            height: 7vw !important;
        }
    }

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

    .FormReservation {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 2em 2em 0 2em;
        margin: 2em 0;
        background-color: #282527;
        border: solid 1px black;
        border-radius: 20px;
    }

    .Allergies {
        max-width: 100%;
        width: 30%;

        display: grid;
        grid-template-columns: repeat(2, 50%);
        grid-template-rows: 100%;
        grid-column-gap: 0px;
        grid-row-gap: 0px;

        justify-items: stretch;

        margin: 2em;
        margin-top: 10px;
        margin-left: 20%;
        padding: 0 9em;
        border-radius: 50px;

        background-color: #fffee6;
    }

    .textAllergies {
        font-size: 1em;
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: space-between;
        align-items: center;
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
        font-size: 0.8em;
        display: inline-block;
        position: relative;
        width: 70px;
        height: 40px;
        cursor: pointer;
        overflow: hidden;

        margin: 0 1.5em;
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
        background: #291211;
        border-radius: 20px;
    }

    .switch input:checked+span {
        background: #f8cf2c;
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

    section {
        margin: 0.5em 0 0.5em 0;
    }
    </style>
</head>

<body>
    <nav class="parent">
        <div class="title">
            <h1>
                <a href="../../Connect/Accueil.php">Le Quai Antique</a>
            </h1>
        </div>
        <form action="../../Connect/paramCompte.php" class="BtnSeConnecter">
            <button class="btnConnecter" style="width:auto; padding:0 1em;">
                <?php
        if (!empty($_SESSION['mail'])) {
            $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
            $recupName = $dbClient->prepare("SELECT * FROM client WHERE mail = ?");
            $recupName->execute(array($_SESSION['mail']));
            $client = $recupName->fetch();
            
            if(!empty($client)){
                $ClientFirstname = $client['firstname'];
                $ClientName = $client['name'];
                echo $ClientFirstname . "&nbsp" . $ClientName;
            }else{
                echo $_SESSION['mail'];
            }
        }else{
            echo "Se Connecter";
        }
                ?>
            </button>
        </form>
    </nav>
    <main>
        <div class="FondReservation">
            <form action="ValidAllergies.php" method="post" class="FormReservation">
                <?php 
    $dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');

    $sql = "SELECT COUNT(*) AS allergies FROM client WHERE mail = :mail";
    $sqlPrepareSelect = $dbClient->prepare($sql);
    $sqlPrepareSelect->bindParam(':mail', $_SESSION['mail']);
    $sqlPrepareSelect->execute();


          ?>
                <div>
                    <div id="titleAllergies">
                        <u>Cocher les allergies.</u>
                    </div>
                    <div class="Allergies">
                        <section class="Gauche">
                            <div class="allergieGauche">
                                <section>
                                    <div class="textAllergies">
                                        <?php 
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=1");
                                          while ($allergie = $recupAllergie->fetch()){
                                            echo '<u>'.$allergie['name'].'</u>';
                                        ?>
                                        <label class="switch">
                                            <input type="checkbox" name="allergies[]"
                                                value="<?php echo $allergie['name']; ?>" />
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="textAllergies">
                                        <?php
                                            echo '<i style="font-size:0.8em">'.utf8_encode($allergie['description']).'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                                <section>
                                    <div class="textAllergies">
                                        <?php 
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=2");
                                          while ($allergie = $recupAllergie->fetch()){
                                            echo '<u>'.$allergie['name'].'</u>';/* 
                                             */
                                        ?>
                                        <label class="switch">
                                            <input type="checkbox" name="allergies[]"
                                                value="<?php echo $allergie['name']; ?>" />
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="textAllergies">
                                        <?php
                                            echo '<i style="font-size:0.8em">'.utf8_encode($allergie['description']).'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=3");
                                          while ($allergie = $recupAllergie->fetch()){
                                            echo '<u>'.$allergie['name'].'</u>';/* 
                                             */
                                        ?>
                                        <label class="switch">
                                            <input type="checkbox" name="allergies[]"
                                                value="<?php echo $allergie['name']; ?>" />
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="textAllergies">
                                        <?php
                                            echo '<i style="font-size:0.8em">'.utf8_encode($allergie['description']).'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=4");
                                          while ($allergie = $recupAllergie->fetch()){
                                            echo '<u>'.utf8_encode($allergie['name']).'</u>';/* 
                                             */
                                        ?>
                                        <label class="switch">
                                            <input type="checkbox" name="allergies[]"
                                                value="<?php echo utf8_encode($allergie['name']); ?>" />
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="textAllergies">
                                        <?php
                                            echo '<i style="font-size:0.8em">'.utf8_encode($allergie['description']).'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=5");
                                          while ($allergie = $recupAllergie->fetch()){
                                            echo '<u>'.$allergie['name'].'</u>';/* 
                                             */
                                        ?>
                                        <label class="switch">
                                            <input type="checkbox" name="allergies[]"
                                                value="<?php echo $allergie['name']; ?>" />
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="textAllergies">
                                        <?php
                                            echo '<i style="font-size:0.8em">'.utf8_encode($allergie['description']).'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=6");
                                          while ($allergie = $recupAllergie->fetch()){
                                            echo '<u>'.$allergie['name'].'</u>';/* 
                                             */
                                        ?>
                                        <label class="switch">
                                            <input type="checkbox" name="allergies[]"
                                                value="<?php echo $allergie['name']; ?>" />
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="textAllergies">
                                        <?php
                                            echo '<i style="font-size:0.8em">'.utf8_encode($allergie['description']).'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=7");
                                          while ($allergie = $recupAllergie->fetch()){
                                            echo '<u>'.utf8_encode($allergie['name']).'</u>';/* 
                                             */
                                        ?>
                                        <label class="switch">
                                            <input type="checkbox" name="allergies[]"
                                                value="<?php echo utf8_encode($allergie['name']); ?>" />
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="textAllergies">
                                        <?php
                                            echo '<i style="font-size:0.8em">'.utf8_encode($allergie['description']).'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=8");
                                          while ($allergie = $recupAllergie->fetch()){
                                            echo '<u>'.$allergie['name'].'</u>';/* 
                                             */
                                        ?>
                                        <label class="switch">
                                            <input type="checkbox" name="allergies[]"
                                                value="<?php echo $allergie['name']; ?>" />
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="textAllergies">
                                        <?php
                                            echo '<i style="font-size:0.8em">'.utf8_encode($allergie['description']).'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=9");
                                          while ($allergie = $recupAllergie->fetch()){
                                            echo '<u>'.$allergie['name'].'</u>';/* 
                                             */
                                        ?>
                                        <label class="switch">
                                            <input type="checkbox" name="allergies[]"
                                                value="<?php echo $allergie['name']; ?>" />
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="textAllergies">
                                        <?php
                                            echo '<i style="font-size:0.8em">'.utf8_encode($allergie['description']).'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=10");
                                          while ($allergie = $recupAllergie->fetch()){
                                            echo '<u>'.utf8_encode($allergie['name']).'</u>';/* 
                                             */
                                        ?>
                                        <label class="switch">
                                            <input type="checkbox" name="allergies[]"
                                                value="<?php echo utf8_encode($allergie['name']); ?>" />
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="textAllergies">
                                        <?php
                                            echo '<i style="font-size:0.8em">'.utf8_encode($allergie['description']).'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                            </div>
                        </section>
                        <section class="Droite">
                            <div class="allergieDroite">
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=11");
                                          while ($allergie = $recupAllergie->fetch()){?>
                                        <label class="switch">
                                            <input type="checkbox" name="allergies[]"
                                                value="<?php echo utf8_encode($allergie['name']); ?>" />
                                            <span></span>
                                        </label>
                                        <?php
                                            echo '<u>'. utf8_encode($allergie['name']).'</u>';
                                             
                                        ?>
                                    </div>
                                    <div class="textAllergies">
                                        <?php
                                            echo '<i style="font-size:0.8em">'.utf8_encode($allergie['description']).'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=12");
                                          while ($allergie = $recupAllergie->fetch()){?>
                                        <label class="switch">
                                            <input type="checkbox" name="allergies[]"
                                                value="<?php echo utf8_encode($allergie['name']); ?>" />
                                            <span></span>
                                        </label>
                                        <?php
                                            echo '<u>'. utf8_encode($allergie['name']).'</u>';
                                             
                                        ?>
                                    </div>
                                    <div class="textAllergies">
                                        <?php
                                            echo '<i style="font-size:0.8em">'.utf8_encode($allergie['description']).'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=13");
                                          while ($allergie = $recupAllergie->fetch()){?>
                                        <label class="switch">
                                            <input type="checkbox" name="allergies[]"
                                                value="<?php echo utf8_encode($allergie['name']); ?>" />
                                            <span></span>
                                        </label>
                                        <?php
                                            echo '<u>'. utf8_encode($allergie['name']).'</u>';
                                             
                                        ?>
                                    </div>
                                </section>
                                <div class="textAllergies">
                                    <?php
                                            echo '<i style="font-size:0.8em">'.utf8_encode($allergie['description']).'</i>';
                                            }
                                          ?>
                                </div>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=14");
                                          while ($allergie = $recupAllergie->fetch()){?>
                                        <label class="switch">
                                            <input type="checkbox" name="allergies[]"
                                                value="<?php echo utf8_encode($allergie['name']); ?>" />
                                            <span></span>
                                        </label>
                                        <?php
                                            echo '<u>'. utf8_encode($allergie['name']).'</u>';
                                             
                                        ?>
                                    </div>
                                </section>
                                <div class="textAllergies">
                                    <?php
                                            echo '<i style="font-size:0.8em">'.utf8_encode($allergie['description']).'</i>';
                                            }
                                          ?>
                                </div>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=15");
                                          while ($allergie = $recupAllergie->fetch()){?>
                                        <label class="switch">
                                            <input type="checkbox" name="allergies[]"
                                                value="<?php echo utf8_encode($allergie['name']); ?>" />
                                            <span></span>
                                        </label>
                                        <?php
                                            echo '<u>'. utf8_encode($allergie['name']).'</u>';
                                             
                                        ?>
                                    </div>
                                </section>
                                <div class="textAllergies">
                                    <?php
                                            echo '<i style="font-size:0.8em">'.utf8_encode($allergie['description']).'</i>';
                                            }
                                          ?>
                                </div>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=16");
                                          while ($allergie = $recupAllergie->fetch()){?>
                                        <label class="switch">
                                            <input type="checkbox" name="allergies[]"
                                                value="<?php echo utf8_encode($allergie['name']); ?>" />
                                            <span></span>
                                        </label>
                                        <?php
                                            echo '<u>'. utf8_encode($allergie['name']).'</u>';
                                             
                                        ?>
                                    </div>
                                    <div class="textAllergies">
                                        <?php
                                            echo '<i style="font-size:0.8em">'.utf8_encode($allergie['description']).'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=17");
                                          while ($allergie = $recupAllergie->fetch()){?>
                                        <label class="switch">
                                            <input type="checkbox" name="allergies[]"
                                                value="<?php echo utf8_encode($allergie['name']); ?>" />
                                            <span></span>
                                        </label>
                                        <?php
                                            echo '<u>'. utf8_encode($allergie['name']).'</u>';
                                             
                                        ?>
                                    </div>
                                    <div class="textAllergies">
                                        <?php
                                            echo '<i style="font-size:0.8em">'.utf8_encode($allergie['description']).'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=18");
                                          while ($allergie = $recupAllergie->fetch()){?>
                                        <label class="switch">
                                            <input type="checkbox" name="allergies[]"
                                                value="<?php echo utf8_encode($allergie['name']); ?>" />
                                            <span></span>
                                        </label>
                                        <?php
                                            echo '<u>'. utf8_encode($allergie['name']).'</u>';
                                             
                                        ?>
                                    </div>
                                    <div class="textAllergies">
                                        <?php
                                            echo '<i style="font-size:0.8em">'.utf8_encode($allergie['description']).'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=19");
                                          while ($allergie = $recupAllergie->fetch()){?>
                                        <label class="switch">
                                            <input type="checkbox" name="allergies[]"
                                                value="<?php echo utf8_encode($allergie['name']); ?>" />
                                            <span></span>
                                        </label>
                                        <?php
                                            echo '<u>'. utf8_encode($allergie['name']).'</u>';
                                             
                                        ?>
                                    </div>
                                    <div class="textAllergies">
                                        <?php
                                            echo '<i style="font-size:0.8em">'.utf8_encode($allergie['description']).'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=20");
                                          while ($allergie = $recupAllergie->fetch()){?>
                                        <label class="switch">
                                            <input type="checkbox" name="allergies[]"
                                                value="<?php echo utf8_encode($allergie['name']); ?>" />
                                            <span></span>
                                        </label>
                                        <?php
                                            echo '<u>'. utf8_encode($allergie['name']).'</u>';
                                             
                                        ?>
                                    </div>
                                    <div class="textAllergies">
                                        <?php
                                            echo '<i style="font-size:0.8em">'.utf8_encode($allergie['description']).'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                            </div>
                        </section>
                    </div>
                    <section id="submitAllergies">
                        <input type="submit" class="btnConnecter" value="Valider les allergies">

                    </section>

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
</body>

</html>