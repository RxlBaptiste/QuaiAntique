<?php
if ( isset( $_POST['submit'] ) ) {
        $name = htmlspecialchars($_POST['name']);
        $mail = htmlspecialchars($_POST['mail']);
        $nbPers = htmlspecialchars($_POST['nbPers']);
        $date = htmlspecialchars($_POST['date']);
        $commentaire = htmlspecialchars($_POST['commentaire'], ENT_QUOTES);
        $horaire = htmlspecialchars($_POST['horaires']);
        $allergies = ($_POST["allergies"]);
    }
        if(!empty($allergies)){
            $count = -1;
            foreach ($allergies as $allergie) {
                $allergy[] = /* "<br>" . */"  - " .  $allergie;
                $count++;

                if($count == 0){
                    $allergie1 = $allergy[$count];
                }
                if($count == 1){
                    $allergie2 = $allergy[$count];
                }
                if($count == 2){
                    $allergie3 = $allergy[$count];
                }
                if($count == 3){
                    $allergie4 = $allergy[$count];
                } 
                if($count == 4){
                    $allergie5 = $allergy[$count];
                } 
                if($count == 5){
                    $allergie6 = $allergy[$count];
                } 
                if($count == 6){
                    $allergie7 = $allergy[$count];
                } 
                if($count == 7){
                    $allergie8 = $allergy[$count];
                } 
                if($count == 8){
                    $allergie9 = $allergy[$count];
                } 
                if($count == 9){
                    $allergie10 = $allergy[$count];
                } 
                if($count == 10){
                    $allergie11 = $allergy[$count];
                } 
                if($count == 11){
                    $allergie12 = $allergy[$count];
                } 
                if($count == 12){
                    $allergie13 = $allergy[$count];
                } 
                if($count == 13){
                    $allergie14 = $allergy[$count];
                } 
                if($count == 14){
                    $allergie15 = $allergy[$count];
                } 
                if($count == 15){
                    $allergie16 = $allergy[$count];
                } 
                if($count == 16){
                    $allergie17 = $allergy[$count];
                } 
                if($count == 17){
                    $allergie18 = $allergy[$count];
                } 
                if($count == 18){
                    $allergie19 = $allergy[$count];
                } 
                if($count == 19){
                    $allergie20 = $allergy[$count];
                } 
            }
        }
        echo "<br>";
        var_dump($allergy);
    $switch = 0;
   $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
    
    $sqlInsert = "INSERT INTO reservation 
    (
        Allergies
    )
    VALUES
    (
        '$allergie1'
        '$allergie2'
        '$allergie3'
        '$allergie4'
        '$allergie5'
        '$allergie6'
        '$allergie7'
        '$allergie8'
        '$allergie9'
        '$allergie10'
        '$allergie11'
        '$allergie12'
        '$allergie13'
        '$allergie14'
        '$allergie15'
        '$allergie16'
        '$allergie17'
        '$allergie18'
        '$allergie19'
        '$allergie20'
    )";
    $sqlPrepareInsert = $dbClient->prepare($sqlInsert);
    $sqlPrepareInsert->execute();

    $sqlRecupLastLign = "UPDATE reservation SET 
    name='$name',
    mail='$mail',
    NbPers='$nbPers',
    Date='$date',
    Horaire='$horaire',
    Commentaire='$commentaire'
    ORDER BY id DESC LIMIT 1";
    $result = $dbClient->query($sqlRecupLastLign);
    $LastLign = $result->fetch(PDO::FETCH_ASSOC);
   
    header("Location: popUp.php");
?>