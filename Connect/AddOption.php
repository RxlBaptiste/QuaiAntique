<?php
session_start();

$mail = $_SESSION['mail'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];

    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
    
    $recupMail = $dbClient->query("SELECT * FROM client WHERE mail = '$mail'");
     while ($Add = $recupMail->fetch()){
        $nameSession = $Add['name'];
        $fistnameSession = $Add['firstname'];
    }
    $add = "UPDATE client SET name = '$name', firstname = '$firstname' WHERE mail='$mail'";
    $req = $dbClient->prepare($add);
    $req->execute();
    header('Location: Accueil.php' );
}
/* 
  echo '<script language="javascript">
    alert("Enregistrement validé... Veuillez vous connecter")
    </script>'; */
/* 
  $sqlInsert = "INSERT INTO client ( name, firstname ) VALUES ( '$name', '$firstname' )";
  $sqlPrepareInsert = $dbClient->prepare($sqlInsert);
  $sqlPrepareInsert->execute(); */

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="favicon.PNG" rel="icon" type="image/png" />
    <link href="../style.css" rel="stylesheet" />
    <title class="DocTitle">Le Quai Antique</title>
    <style>
    .fond {
        display: flex;
        justify-content: center;
        align-items: center;

        background-color: #291211;
        height: 500px;
        width: 500px;
        margin-left: calc(50% - 250px);
        margin-top: calc(50% - 1000px);
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
            <button class="btnConnecter">
                <?php
                    echo $_SESSION['mail'];
                ?></button>
        </form>
    </nav>
    <main>
        <section class="fond">
            <form action="#" method="post">
                <div>
                    <input class="iptForm" type="name" name="name" placeholder="Votre nom" />
                </div>
                <div>
                    <input class="iptForm" type="name" name="firstname" placeholder="Votre prénom" />
                </div>
                <button class="Btn" name="submit" type="submit">
                    Ajouter
                </button>
            </form>
        </section>
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
    <script src="script.js"></script>
</body>

</html>