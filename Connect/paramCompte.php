<?php
session_start();

$mail = $_SESSION['mail'];

$dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');

$sqlClient = $dbClient->query("SELECT * FROM client WHERE mail = '$mail'");
    while ($Session =$sqlClient->fetch()){
        $name = $Session['name'];
        $firstname = $Session['firstname'];
        $mail = $Session['mail'];
        $nbPers = $Session['nbPers'];
        $nbEnf = $Session['nbEnfant'];
        $allergies = $Session['allergies'];
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="favicon.PNG" rel="icon" type="image/png" />
    <link href="../css/style.css" rel="stylesheet" />
    <title class="DocTitle">Le Quai Antique</title>
    <style>
    main {
        min-height: 100%;
        margin-bottom: 10.2%;
    }

    footer.footer {
        height: -10.2%;
        margin: 0;
    }

    .fond {
        background-color: #291211;
        border: 1px solid #f8cf2c;
        border-radius: 1.5em;

        height: 500px;
        width: 500px;
        margin-left: calc(50% - 250px);
        margin-top: calc(50% - 1000px);
    }

    .Info {
        display: flex;
        flex-direction: column;
        align-items: center;

        color: #f8cf2c;
        margin-top: 2em;

        font-size: 2em;
        font-family: 'lora', sans-serif;

    }

    a {
        color: #f8cf2c;
        text-decoration: underline;
    }

    .title {
        display: flex;
        flex-direction: column;
        align-items: center;

        color: #f8cf2c;
        padding: 5em;
        font-family: 'Montserrat', sans-serif;

        font-size: .8em;
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
        <form action="Logout.php" class="BtnSeConnecter">
            <button class="btnConnecter">Se Déconnecter</button>
        </form>
    </nav>
    <main>
        <section class="fond">
            <div class="Info">Vos informations</div>
            <div class="title">
                <div>Votre Nom :
                    <?php 
                        if(!empty($name)){
                            echo $name;
                        }else{
                            echo '<a href="AddOption.php">Ajouter votre nom </a>';
                        }
                    ?>
                </div>
                <br>
                <div>Votre Prénom :
                    <?php 
                        if(!empty($firstname)){
                            echo $firstname;
                        }else{
                            echo '<a href="AddOption.php">Ajouter votre prénom </a>';
                        }
                    ?>
                </div>
                <br>
                <div>Votre Adresse-mail :
                    <?php echo $mail?>
                </div>
                <br>
                <div>Votre nombre de personne à votre table :
                    <?php echo $nbPers?>
                </div>
                <br>
                <div>Votre nombre d'enfant à votre table :
                    <?php echo $nbEnf?>
                </div>
                <br>
                <div style="display:flex; flex-direction:column; align-items: center;">Vos allergies :
                    <?php 
                        if (!empty($allergies)) {
                            $allergies_list = explode('-', $allergies);
                            foreach ($allergies_list as $allergie) {
                                echo '<div style="text-align:center; padding:0.2em;">'.$allergie.'</div>';
                            }
                        } else {
                            echo 'Vous n\'avez pas enregistré d\'allergies.<br>';
                            echo '<a href="../acces/Allergies/allergies.php">Cliquez ici</a> pour enregistrer des allergies.';
                        }
                    ?>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
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
    <script src="script.js"></script>
</body>

</html>