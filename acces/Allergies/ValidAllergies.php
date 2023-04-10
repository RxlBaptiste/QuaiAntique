<?php
session_start();


if (!isset($_POST['submit'])) {
$allergies = ($_POST["allergies"]);
}
if(!empty($allergies)){
$count = -1;
foreach ($allergies as $allergie) {
$allergy[] = /* "<br>" . */" - " . $allergie;
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

    $allergies_str = implode(',', $allergies); // concaténer les allergies avec une virgule
    $mail = $_SESSION['mail'];

    $dbClient = new mysqli('localhost', 'root', '', 'lequaiantique');
    if ($dbClient->connect_errno) {
        echo "Failed to connect to MySQL: " . $dbClient->connect_error;
        exit();
    }
    $count++;
   $sqlUpdate = "UPDATE client SET allergies = CONCAT_WS('', allergies, 
    '$allergie1','$allergie2','$allergie3','$allergie4','$allergie5','$allergie6','$allergie7','$allergie8','$allergie9','$allergie10',
    '$allergie11','$allergie12','$allergie13','$allergie14','$allergie15','$allergie16','$allergie17','$allergie18','$allergie19','$allergie20'), allergie = $count WHERE mail = '$mail'";
    $result = mysqli_query($dbClient, $sqlUpdate);

    if ($result) {
        echo "Allergies ajoutées avec succès.";
    } else {
        echo "Erreur lors de l'ajout des allergies: " . mysqli_error($dbClient);
    }
    mysqli_close($dbClient);
}








/* 
if (!isset($_POST['submit'])) {
$allergies = $_POST["allergies"];
$mail = $_SESSION['mail'];
$id_client = $_POST["id_client"]; 

$allergy = array();
foreach ($allergies as $allergie) {
$allergy[] = "- " . $allergie;
}

$dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
$sqlUpdate = "UPDATE client SET allergies = :allergies WHERE mail = $mail";
$sqlPrepareUpdate = $dbClient->prepare($sqlUpdate);/* 
$sqlPrepareUpdate->bindParam(':allergies', implode("<br>", $allergy));
$sqlPrepareUpdate->bindParam(':mail', $mail); 
$sqlPrepareUpdate->execute();

} */



/*
if ( isset( $_POST['submit'] ) ) {
$allergies = ($_POST["allergies"]);
}
if(!empty($allergies)){
$count = -1;
foreach ($allergies as $allergie) {
$allergy[] = /* "<br>" . *" - " . $allergie;
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

$sqlInsert = "UPDATE client SET
(
allergies = '$allergie1',
allergies = '$allergie2',
allergies = '$allergie3',
allergies = '$allergie4',
allergies = '$allergie5',
allergies = '$allergie6',
allergies = '$allergie7',
allergies = '$allergie8',
allergies = '$allergie9',
allergies = '$allergie10',
allergies = '$allergie11',
allergies = '$allergie12',
allergies = '$allergie13',
allergies = '$allergie14',
allergies = '$allergie15',
allergies = '$allergie16',
allergies = '$allergie17',
allergies = '$allergie18',
allergies = '$allergie19',
allergies = '$allergie20'
WHERE mail = '{$_SESSION['mail']}'";
$sqlPrepareInsert = $dbClient->prepare($sqlInsert);
$sqlPrepareInsert->execute();
*/

?>