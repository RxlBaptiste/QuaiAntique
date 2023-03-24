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
                <a href="../index.html">Le Quai Antique</a>
            </h1>
        </div>
        <form action="connection.html" class="BtnSeConnecter">
            <button class="btnConnecter">Se Connecter</button>
        </form>
    </nav>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <main>
        <div class="FondReservation">
            <p style="color:#fffee6; font-size:2em">
                Votre réservation à bien été prise en compte
            <p>
        </div>
        <br><br><br><br><br>
        <br><br><br><br><br>
        <br><br><br><br><br>
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
</body>

</html>