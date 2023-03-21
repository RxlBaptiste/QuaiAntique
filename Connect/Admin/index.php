<?php

if(session_status() == '1'){
  session_start();

  if(!$_SESSION['Admin']){
    header('location: ../Logout.php');
  }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="favicon.PNG" rel="icon" type="image/png" />
    <link href="../../css/style.css" rel="stylesheet" />
    <title class="DocTitle">Le Quai Antique</title>
    <style>
    a.section {
        text-decoration: underline;
        text-underline-offset: 3px;
        color: #f8cf2c;
    }
    </style>
</head>

<body>
    <nav class="parent">
        <div class="title">
            <h1>Le Quai Antique</h1>
        </div>
        <form action="../Logout.php" class="BtnSeConnecter">
            <button class="btnConnecter" style="width: auto; padding: 0 1em">
                <?php
                    echo $_SESSION['AdminName'];
                ?>
            </button>
        </form>
    </nav>
    <main>
        <div class="slider-container">
            <span class="nos">Les réservations</span>
            <!-- ---------------------Reservation Client------------------------------------------------- -->
            <section></section>
            <div class="br"></div>
            <span class="nos">La carte</span>
            <!-- --------------------Modification Carte---------------------------------------------- -->
            <section>
                <p>
                    <a class="section" href="Modifications/carte.html">Modification de la carte</a>
                </p>
            </section>
            <div class="br"></div>
            <span class="nos">Les menus</span>
            <!-- ---------------------Modification Menu------------------------------------ -->
            <section>
                <p>
                    <a class="section" href="Modifications/menu.html">Modification des menus</a>
                </p>
            </section>

            <div class="br"></div>
            <span class="nos">Les horaires</span>
            <!-- ---------------------Modification Horaire------------------------------------------------- -->
            <section>
                <p>
                    <a class="section" href="Modifications/horaire.html">Modification des horaires</a>
                </p>
            </section>
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
    <script src="script.js"></script>
</body>

</html>
<!-- 
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Le Quai Antique / Admin</title>
  </head>

  <body>
    <nav>
      <section>
        <a href="../Logout.php">Se deconnecter</a>
        <a href="Modifications/carte.html">La Carte</a>
        <a href="Modifications/menu.html">Les Menus</a>
        <a href="Modifications/horaire.html">Les Horaires</a>
        <a href="Modifications/reservation.html">Les Réservations</a>
      </section>
    </nav> 
  </body>
</html>-->