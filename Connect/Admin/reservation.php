<?php

$dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');

$updateEtat = "UPDATE reservation SET etat='1' WHERE etat = 0";

    $sqlEtat = $dbClient->prepare($updateEtat); 
    $sqlEtat->execute();


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <main>
        <section>
            <?php
                $recupBase = $dbClient->query("SELECT * FROM reservation");
                if($recupBase->rowCount() == 0){
                    echo "Il n'y a aucune réservation enregistré";
                }else{
                while ($resa = $recupBase->fetch()) {
                    $clientName = $resa['name'];
                    $clientNb = $resa['NbPers'];
                    $clientDate = strftime("%d/%m/%Y", strtotime($resa['Date']));
                    $clientHoraire = $resa['Horaire'];
                    $clientCommentaire = $resa['Commentaire'];
                    $clientAllergies = $resa['Allergies'];
            ?>
            <p>Réservation N° : <?php echo $resa['id']; ?></p>
            <p>Nom de la réservation : <?php echo $clientName; ?> </p>
            <p>Nombre de personnes : <?php echo $clientNb; ?> </p>
            <p>Date de la réservation : <?php echo $clientDate; ?> </p>
            <p>Heure de la réservation : <?php echo substr($clientHoraire, 0, 5); ?> </p>
            <p>Commentaire : <?php echo $clientCommentaire; ?> </p>
            <p>Les allergies de la réservation : <?php echo $clientAllergies; ?> </p>
            <hr />
        </section>
        <form action="deleteResa.php" method="post">
            <input type="checkbox" required />Veuillez cocher cette case pour confirmer la suppression de toutes les
            réservations et vous assurer que toutes les nouvelles réservations ont été enregistrées correctement.
            <br><br>
            <input type="submit" value="Supprimer les réservation">
        </form>
        <?php
                }}
            ?>
    </main>
</body>

</html>