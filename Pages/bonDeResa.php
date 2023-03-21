<?php
if ( isset( $_POST['submit'] ) ) {
        $nbPers = $_POST['nbPers'];
        $date = $_POST['date'];
        $commentaire = $_POST['commentaire'];
        $horaire = $_POST['horaires'];
        $allergies = $_POST["allergies"];

        echo "Allergies sélectionnées : ";
        foreach ($allergies as $allergie) {
            echo "<br>" . "- " . $allergie;
        }

        /* $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
    
        $sqlInsert = "INSERT INTO reservation 
        (
            NbPers,
            Date,
            Commentaire,
            Horaire
            Allergies

        ) 
        VALUES
        (
            '$nbPers',
            '$date',
            '$commentaire',
            '$horaire',
            '$allergies'
        )";
        $sqlPrepareInsert = $dbClient->prepare($sqlInsert);
        $sqlPrepareInsert->execute(); */
         
}


?>