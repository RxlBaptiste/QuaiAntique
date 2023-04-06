<?php
/* 
    $db = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');

        $sql = "TRUNCATE TABLE reservation";
        if ($db->query($sql) === TRUE) {
        }
        header("Location: index.php" ); */
// Récupération des réservations
$dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
$recupBase = $dbClient->query("SELECT * FROM reservation");
if($recupBase->rowCount() == 0){
        header("Location: reservation.php");
} else {
    // Boucle sur les réservations
    while ($resa = $recupBase->fetch()) {
        $clientDate = strtotime($resa['Date'].' '.$resa['Horaire']);
        $now = time();
        // Si la date et l'heure de la réservation sont antérieures à la date et l'heure actuelles
        if ($clientDate < $now) {
            $idReservation = $resa['id']; // Récupération de l'id de la réservation à supprimer
            // Suppression de la réservation
            $supprResa = $dbClient->prepare("DELETE FROM reservation WHERE id = :id");
            $supprResa->execute(array('id' => $idReservation));
            echo "La réservation #$idReservation a été supprimée car elle est dépassée.";
        }
        header("Location: reservation.php");
    }
}

?>