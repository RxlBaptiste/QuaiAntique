<?php
session_start();
if (!empty($_POST['allergies'])) { 
    $allergies = $_POST['allergies'];
    $mail = $_SESSION['mail'];

    $dsn = 'mysql:host=lequaic8.mysql.db;dbname=lequaic8;charset=utf8';
    $username = 'lequaic8';
    $password = 'LeQuaiAntiqueEstMon1SiteOvh';

    echo $allergies;

}
/* 
    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Requête SQL pour ajouter les allergies
        $sql = "UPDATE client SET allergies = CONCAT_WS(',', allergies, ";
        $placeholders = array();
        for ($i = 0; $i < count($allergies); $i++) {
            $placeholders[] = ":allergy$i";
        }
        $sql .= implode(",", $placeholders) . ") WHERE mail = :mail";

        // Paramètres de la requête
        $params = array(':mail' => $mail);
        foreach ($allergies as $i => $allergy) {
            $params[":allergy$i"] = $allergy;
        }

        // Exécution de la requête
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);

        echo "Allergies ajoutées avec succès.";
    } catch (PDOException $e) {
        echo "Erreur lors de l'ajout des allergies: " . $e->getMessage();
    } */
}


/* 
if (!isset($_POST['submit'])) {
$allergies = ($_POST["allergies"]);
}
if(!empty($allergies)){
$count = -1;
foreach ($allergies as $allergie) {
$allergy[] = /* "<br>" . " - " . $allergie;
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
$allergies_str = implode(',', $allergies); // concaténer les allergies avec une virgule
$mail = $_SESSION['mail'];

$dsn = 'mysql:host=lequaic8.mysql.db;dbname=lequaic8;charset=utf8';
$username = 'lequaic8';
$password = 'LeQuaiAntiqueEstMon1SiteOvh';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $count++;
    $sqlUpdate = "UPDATE client SET allergies = CONCAT_WS('', allergies, 
        :allergie1, :allergie2, :allergie3, :allergie4, :allergie5, :allergie6, :allergie7, :allergie8, :allergie9, :allergie10,
        :allergie11, :allergie12, :allergie13, :allergie14, :allergie15, :allergie16, :allergie17, :allergie18, :allergie19, :allergie20), allergies = :count WHERE mail = :mail";
    $stmt = $pdo->prepare($sqlUpdate);
    $stmt->execute([
        'allergie1' => $allergie1,
        'allergie2' => $allergie2,
        'allergie3' => $allergie3,
        'allergie4' => $allergie4,
        'allergie5' => $allergie5,
        'allergie6' => $allergie6,
        'allergie7' => $allergie7,
        'allergie8' => $allergie8,
        'allergie9' => $allergie9,
        'allergie10' => $allergie10,
        'allergie11' => $allergie11,
        'allergie12' => $allergie12,
        'allergie13' => $allergie13,
        'allergie14' => $allergie14,
        'allergie15' => $allergie15,
        'allergie16' => $allergie16,
        'allergie17' => $allergie17,
        'allergie18' => $allergie18,
        'allergie19' => $allergie19,
        'allergie20' => $allergie20,
        'count' => $count,
        'mail' => $mail,
    ]);

    echo "Allergies ajoutées avec succès.";
} catch (PDOException $e) {
    echo "Erreur lors de l'ajout des allergies: " . $e->getMessage();
} 
*/


/* 
    $allergies_str = implode(',', $allergies); // concaténer les allergies avec une virgule
    $mail = $_SESSION['mail'];

    $dbClient = new mysqli('mysql:host=lequaic8.mysql.db; dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
   if ($dbClient->connect_errno) {
        echo "Failed to connect to MySQL: " . $dbClient->connect_error;
        exit();
    }else{
        
    $count++;
   $sqlUpdate = "UPDATE client SET allergies = CONCAT_WS('', allergies, 
    '$allergie1','$allergie2','$allergie3','$allergie4','$allergie5','$allergie6','$allergie7','$allergie8','$allergie9','$allergie10',
    '$allergie11','$allergie12','$allergie13','$allergie14','$allergie15','$allergie16','$allergie17','$allergie18','$allergie19','$allergie20'), allergie = '$count' WHERE mail = '$mail'";
    $result = mysqli_query($dbClient, $sqlUpdate);

    }
    if ($result) {
        echo "Allergies ajoutées avec succès.";
    } else {
        echo "Erreur lors de l'ajout des allergies: " . mysqli_error($dbClient);
    }
    mysqli_close($dbClient); */

?>