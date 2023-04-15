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

    section {
        margin: 0.5em 0 0.5em 0;
    }
    </style>
</head>

<body>
    <nav class="parent">
        <div class="title">
            <h1>
                <a href="../connection.php">Le Quai Antique</a>
            </h1>
        </div>
        <form action="paramCompte.php" class="BtnSeConnecter">
            <button class="btnConnecter" style="width:auto; padding:0 1em;">
                <?php
        if (!empty($_SESSION['mail'])) {
            $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
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
    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');

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
                                            echo '<i style="font-size:0.8em">'.$allergie['description'].'</i>';
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
                                            echo '<i style="font-size:0.8em">'.$allergie['description'].'</i>';
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
                                            echo '<i style="font-size:0.8em">'.$allergie['description'].'</i>';
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
                                            echo '<i style="font-size:0.8em">'.$allergie['description'].'</i>';
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
                                            echo '<i style="font-size:0.8em">'.$allergie['description'].'</i>';
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
                                            echo '<i style="font-size:0.8em">'.$allergie['description'].'</i>';
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
                                            echo '<i style="font-size:0.8em">'.$allergie['description'].'</i>';
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
                                            echo '<i style="font-size:0.8em">'.$allergie['description'].'</i>';
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
                                            echo '<i style="font-size:0.8em">'.$allergie['description'].'</i>';
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
                                            echo '<i style="font-size:0.8em">'.$allergie['description'].'</i>';
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
                                            echo '<i style="font-size:0.8em">'.$allergie['description'].'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=12");
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
                                            echo '<i style="font-size:0.8em">'.$allergie['description'].'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=13");
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
                                            echo '<i style="font-size:0.8em">'.$allergie['description'].'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=14");
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
                                            echo '<i style="font-size:0.8em">'.$allergie['description'].'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=15");
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
                                            echo '<i style="font-size:0.8em">'.$allergie['description'].'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=16");
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
                                            echo '<i style="font-size:0.8em">'.$allergie['description'].'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=17");
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
                                            echo '<i style="font-size:0.8em">'.$allergie['description'].'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=18");
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
                                            echo '<i style="font-size:0.8em">'.$allergie['description'].'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=19");
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
                                            echo '<i style="font-size:0.8em">'.$allergie['description'].'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                                <section>
                                    <div class="textAllergies">
                                        <?php
                                          $recupAllergie = 
                                          $dbClient->query("SELECT * FROM allergies WHERE id=20");
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
                                            echo '<i style="font-size:0.8em">'.$allergie['description'].'</i>';
                                            }
                                          ?>
                                    </div>
                                </section>
                            </div>
                        </section>
                    </div>
                    <section id="submitAllergies">
                        <input type="submit" class="btnConnecter" value="Validé les allergies">

                    </section>

            </form>
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