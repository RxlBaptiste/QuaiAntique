<?php
session_start();

if(isset($_SESSION['id'])) {
  $_SESSION['id'];
} else {
}
?>
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


    .InputReservations {
        background-color: #fffee6;
        font-family: "Hind Madurai", sans-serif;
        border: 5px solid #291211;
        color: #282527;
        margin-left: 0em;
        padding: 1.5em 45%;
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
                <a href="Accueil.php">Le Quai Antique</a>
            </h1>
        </div>
        <form action="paramCompte.php" class="BtnSeConnecter">
            <button class="btnConnecter" style="width:auto; padding:0 1em;">
                <?php
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
                    $recupName = $dbClient->query("SELECT * FROM client WHERE mail = '{$_SESSION['mail']}'");
                    while ($client = $recupName->fetch()){
                        $ClientFirstname = $client['firstname'];
                        $ClientName = $client['name'];
                        if(!empty($ClientName)){
                            echo $ClientFirstname;
                            echo "&nbsp";
                            echo $ClientName;
                        }else{
                            echo $_SESSION['mail'];
                        }
                    }

                ?>
            </button>
        </form>
    </nav>
    <main>
        <div class="FondReservation">
            <form method="POST" action="bonDeResa.php" class="FormReservation">
                <?php
                if (isset($_SESSION['id'])) {
                    // Récupérer les informations personnelles et d'allergies du client à partir de la base de données
                    $client_id = $_SESSION['id'];
                    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique', 'root', '');
                    $requete = $dbClient->prepare("SELECT name AS name, firstname AS firstname, nbPers AS nbPers, nbEnfant AS nbEnfant , allergies AS allergies FROM client WHERE id = ?");
                    $requete->execute(array($client_id));
                    $resultat = $requete->fetch(); 
                    $nom =  $resultat['name'];
                    $nbPers = $resultat['nbPers'];
                    $nbEnf = $resultat['nbEnfant'];
                    $allergies = $resultat['allergies'];
                    
                    // Afficher les informations personnelles récupérées dans des champs de formulaire désactivés
                    
                        echo '<div id="inputs">';
                    echo '<label class="LabelToInputs">Votre nom enregistré </label>';
                    echo '<input id="name" name="name" class="InputReservations" type="text"  value="'.$nom.'" disabled required /><br />';

                    echo '<label class="LabelToInputs">Nombre de personne enregistré : </label>';
                    echo '<input id="number" name="nbPers" class="InputReservations" type="number" value="'.($nbPers + $nbEnf).'" disabled min="1" max="10" required /><br />';
                    
                    echo '<label class="LabelToInputs">Veuiller indiquer votre numéro de téléphone : </label>';
                    echo '<input id="tel" name="tel" class="InputReservations" type="tel" placeholder="Numéro de téléphone" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" required /><br />';
                    
                    echo '<label class="LabelToInputs">Choisissez votre date : </label>';
                    echo '<input id="date" name="date" class="InputReservations" type="date" placeholder="Quel jour" required /><br />';
                    
                    echo '<label class="LabelToInputs">Ecrivez un commentaire : </label>';
                    echo '<input id="commentaire" name="commentaire" class="InputReservations" type="text" placeholder="Commentaire" />';
                    echo '</div>';
                    
                    // Récupérer les options d'allergies à partir de la base de données
                    $bdd = new PDO('mysql:host=localhost;dbname=lequaiantique', 'root', '');
                    $requete_allergies = $bdd->prepare('SELECT name FROM allergies');
                    $requete_allergies->execute();
                    $optionS = $requete_allergies->fetchAll(PDO::FETCH_COLUMN);
                                    
                    ?>
                <div id="page2" style="display: block">
                    <div id="titleAllergies">
                        <u>Vos allergies enregisté.</u>
                    </div>
                    <?php
                    $allergies_array  = explode(' - ', $allergies);
                    // Générer les cases à cocher pour chaque option d'allergie
/*------------------------------------------DEBUT CHAT-------------------------------------------------------------------------------------------------------------*/
                    ?>
                    <div class="Allergies">
                        <section class="Gauche">
                            <div class="allergieGauche">
                                <?php
            $options_count = count($optionS);
            $left_options = array_slice($optionS, 0, $options_count / 2);
            $right_options = array_slice($optionS, $options_count / 2);
            
            foreach ($left_options as $option) {   
            ?>
                                <section>
                                    <div class="textAllergies">
                                        <?php 
                        echo "<u>$option</u>"
                    ?>
                                        <label class="switch">
                                            <?php 
                        $checked = in_array($option, $allergies_array) ? 'checked' : '';
                        
                        echo '<input type="checkbox" name="allergies[]" value="'.$option.'" '.$checked.'> ';
                        
                        ?>
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="textAllergies">
                                    </div>
                                </section>
                                <?php
            }
            ?>
                            </div>
                        </section>
                        <?php
    if($options_count >= 11){ ?>
                        <section class="Droite">
                            <div class="allergieDroite">
                                <?php
            foreach ($right_options as $option) {             
            ?>
                                <section>
                                    <div class="textAllergies">
                                        <?php 
                        echo "<u>$option</u>"
                    ?>
                                        <label class="switch">
                                            <?php 
                        $checked = in_array($option, $allergies_array) ? 'checked' : '';
                        
                        echo '<input type="checkbox" name="allergies[]" value="'.$option.'" '.$checked.'> ';
                        
                        ?>
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="textAllergies">
                                    </div>
                                </section>
                                <?php
            } }?>
                            </div>
                        </section>
                    </div>
                    <?php
                    /*------------------------------------ELSE------------------------------------------------------------------------------------------------------------------*/
                    }else{
                    ?>
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
                            <label class="LabelToInputs">Veuiller indiquer votre nom :
                            </label>
                            <input id="name" name="name" class="InputReservation" type="text"
                                placeholder="Nom de la réservation" required />
                            <br />
                            <label class="LabelToInputs">Veuiller indiquer votre numéro de téléphone :
                            </label>
                            <input id="tel" name="tel" class="InputReservation" type="tel"
                                placeholder="Numéro de téléphone" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}"
                                required />
                            <br />
                            <label class="LabelToInputs">Veuiller indiquer le nombre de personne :
                            </label>
                            <input id="number" name="nbPers" class="InputReservation" type="number"
                                placeholder="Nombre de personnes" min="1" max="10" required />
                            <br />
                            <label class="LabelToInputs">Choisissez votre date : </label>
                            <input id="date" name="date" class="InputReservation" type="date" placeholder="Quel jour"
                                required />
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
                        <?php  }  ?>
                        <div id="choixHoraires">
                            <p class="TextHoraire" style="padding-left: 1em;">MIDI</p>
                            <div class="HoraireMidi">
                                <div class="ContainerHoraire">
                                    <input id="horaires1" class="BtnRadio" type="radio" name="horaires" value="12:00:00"
                                        onclick="horaire()" />
                                    <label for="12:00">12:00</label>
                                </div>
                                <div class="ContainerHoraire">
                                    <input id="horaires2" class="BtnRadio" type="radio" name="horaires" value="12:15:00"
                                        onclick="horaire()" />
                                    <label for="12:15">12:15</label>
                                </div>
                                <div class="ContainerHoraire">
                                    <input id="horaires3" class="BtnRadio" type="radio" value="12:30:00" name="horaires"
                                        onclick="horaire()" />
                                    <label>12:30</label>
                                </div>
                                <div class="ContainerHoraire">
                                    <input id="horaires4" class="BtnRadio" type="radio" value="12:45:00" name="horaires"
                                        onclick="horaire()" />
                                    <label>12:45</label>
                                </div>
                                <div class="ContainerHoraire">
                                    <input id="horaires5" class="BtnRadio" type="radio" value="13:00:00" name="horaires"
                                        onclick="horaire()" />
                                    <label>13:00</label>
                                </div>
                            </div>
                            <p class="TextHoraire" style="padding-left: 1em;">SOIR</p>
                            <div class="HoraireSoir">
                                <div class="ContainerHoraire">
                                    <input id="horaires6" class="BtnRadio" type="radio" value="19:00:00" name="horaires"
                                        onclick="horaire()" />
                                    <label>19:00</label>
                                </div>
                                <div class="ContainerHoraire">
                                    <input id="horaires7" class="BtnRadio" type="radio" value="19:15:00" name="horaires"
                                        onclick="horaire()" />
                                    <label>19:15</label>
                                </div>
                                <div class="ContainerHoraire">
                                    <input id="horaires8" class="BtnRadio" type="radio" value="19:30:00" name="horaires"
                                        onclick="horaire()" />
                                    <label>19:30</label>
                                </div>
                                <div class="ContainerHoraire">
                                    <input id="horaires9" class="BtnRadio" type="radio" value="19:45:00" name="horaires"
                                        onclick="horaire()" />
                                    <label>19:45</label>
                                </div>
                                <div class="ContainerHoraire">
                                    <input id="horaires10" class="BtnRadio" type="radio" value="20:00:00"
                                        name="horaires" onclick="horaire()" />
                                    <label>20:00</label>
                                </div>
                                <div class="ContainerHoraire">
                                    <input id="horaires11" class="BtnRadio" type="radio" value="20:15:00"
                                        name="horaires" onclick="horaire()" />
                                    <label>20:15</label>
                                </div>
                                <div class="ContainerHoraire">
                                    <input id="horaires12" class="BtnRadio" type="radio" value="20:30:00"
                                        name="horaires" onclick="horaire()" />
                                    <label>20:30</label>
                                </div>
                                <div class="ContainerHoraire">
                                    <input id="horaires13" class="BtnRadio" type="radio" value="20:45:00"
                                        name="horaires" onclick="horaire()" />
                                    <label>20:45</label>
                                </div>
                                <div class="ContainerHoraire">
                                    <input id="horaires14" class="BtnRadio" type="radio" value="21:00:00"
                                        name="horaires" onclick="horaire()" />
                                    <label>21:00</label>
                                </div>
                                <div class="ContainerHoraire">
                                    <input id="horaires15" class="BtnRadio" type="radio" value="21:15:00"
                                        name="horaires" onclick="horaire()" />
                                    <label>21:15</label>
                                </div>
                                <div class="ContainerHoraire">
                                    <input id="horaires16" class="BtnRadio" type="radio" value="21:30:00"
                                        name="horaires" onclick="horaire()" />
                                    <label>21:30</label>
                                </div>
                                <div class="ContainerHoraire">
                                    <input id="horaires17" class="BtnRadio" type="radio" value="21:45:00"
                                        name="horaires" onclick="horaire()" />
                                    <label>21:45</label>
                                </div>
                                <div id="boxhoraire" class="ContainerHoraire">
                                    <input id="horaires18" class="BtnRadio" type="radio" value="22:00:00"
                                        name="horaires" onclick="horaire()" />
                                    <label>22:00</label>
                                </div>
                            </div>
                        </div>
                        <div id="containerBtnReservation" style="white-space: nowrap;">
                            <button id="BtnReservation" name="submit" type="submit" style="width: auto;">
                                Reserver votre table
                            </button>
                        </div>
                    </div>
                    <!--Page 2-->
                    <?php 
          $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
          ?>
                    <div id="page2" style="display: none">
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
        if (!checkbox1.checked) {
            divParent1.style.backgroundColor = "#fffee6";
        }
        if (checkbox2.checked) {
            divParent2.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox2.checked) {
            divParent2.style.backgroundColor = "#fffee6";
        }
        if (checkbox3.checked) {
            divParent3.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox3.checked) {
            divParent3.style.backgroundColor = "#fffee6";
        }
        if (checkbox4.checked) {
            divParent4.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox4.checked) {
            divParent4.style.backgroundColor = "#fffee6";
        }
        if (checkbox5.checked) {
            divParent5.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox5.checked) {
            divParent5.style.backgroundColor = "#fffee6";
        }
        if (checkbox6.checked) {
            divParent6.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox6.checked) {
            divParent6.style.backgroundColor = "#fffee6";
        }
        if (checkbox7.checked) {
            divParent7.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox7.checked) {
            divParent7.style.backgroundColor = "#fffee6";
        }
        if (checkbox8.checked) {
            divParent8.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox8.checked) {
            divParent8.style.backgroundColor = "#fffee6";
        }
        if (checkbox9.checked) {
            divParent9.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox9.checked) {
            divParent9.style.backgroundColor = "#fffee6";
        }
        if (checkbox10.checked) {
            divParent10.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox10.checked) {
            divParent10.style.backgroundColor = "#fffee6";
        }
        if (checkbox11.checked) {
            divParent11.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox11.checked) {
            divParent11.style.backgroundColor = "#fffee6";
        }
        if (checkbox12.checked) {
            divParent12.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox12.checked) {
            divParent12.style.backgroundColor = "#fffee6";
        }
        if (checkbox13.checked) {
            divParent13.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox13.checked) {
            divParent13.style.backgroundColor = "#fffee6";
        }
        if (checkbox14.checked) {
            divParent14.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox14.checked) {
            divParent14.style.backgroundColor = "#fffee6";
        }
        if (checkbox15.checked) {
            divParent15.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox15.checked) {
            divParent15.style.backgroundColor = "#fffee6";
        }
        if (checkbox16.checked) {
            divParent16.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox16.checked) {
            divParent16.style.backgroundColor = "#fffee6";
        }
        if (checkbox17.checked) {
            divParent17.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox17.checked) {
            divParent17.style.backgroundColor = "#fffee6";
        }
        if (checkbox18.checked) {
            divParent18.style.backgroundColor = "#f8cf2c";
        }
        if (!checkbox18.checked) {
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
        } // Récupération de toutes les cases à cocher
        const checkboxes = document.querySelectorAll('input[type=checkbox]');

        // Boucle sur chaque case à cocher
        checkboxes.forEach((checkbox) => {
            // Vérification si la case à cocher est désactivée
            if (checkbox.disabled) {
                // Si elle est désactivée, changement de la couleur de fond en rouge
                checkbox.parentNode.style.backgroundColor = 'red';
            }
        });
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