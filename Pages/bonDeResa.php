<?php
if ( isset( $_POST['submit'] ) ) {
        $nbPers = $_POST['nbPers'];
        $date = $_POST['date'];
        $commentaire = $_POST['commentaire'];
        $horaire = $_POST['horaires'];
        

        $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
    
        $sqlInsert = "INSERT INTO reservation 
        (
            NbPers,
            Date,
            Commentaire,
            Horaire
        ) 
        VALUES
        (
            '$nbPers',
            '$date',
            '$commentaire',
            '$horaire'
        )";
        $sqlPrepareInsert = $dbClient->prepare($sqlInsert);
        $sqlPrepareInsert->execute();
         
}


?>