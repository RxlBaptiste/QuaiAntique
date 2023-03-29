<?php
// Connexion à la base de données
$dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
/* 
if (isset($_POST["entre0"])) { */
	$entre0 = $_POST["entre0"];
	$plat0 = $_POST["plat0"];
	$dessert0 = $_POST["dessert0"];
	$entre1 = $_POST["entre1"];
	$plat1 = $_POST["plat1"];
	$dessert1 = $_POST["dessert1"];
	$entre2 = $_POST["entre2"];
	$plat2 = $_POST["plat2"];
	$dessert2 = $_POST["dessert2"];
	echo "Variable 1 reçue : " . $entre0. "<br>";
	echo "Variable 2 reçue : " . $plat0. "<br>";
	echo "Variable 3 reçue : " . $dessert0. "<br>";
	echo "Variable 4 reçue : " . $entre1. "<br>";
	echo "Variable 5 reçue : " . $plat1. "<br>";
	echo "Variable 6 reçue : " . $dessert1. "<br>";
	echo "Variable 7 reçue : " . $entre2. "<br>";
	echo "Variable 8 reçue : " . $plat2. "<br>";
	echo "Variable 9 reçue : " . $dessert2. "<br>";
/*} else {
	echo "Aucune variable reçue.";
} 
if (isset($_POST["plat0"])) {
	$plat0 = $_POST["plat0"];
	echo "Variable reçue : " . $plat0;
} else {
	echo "Aucune variable reçue.";
}*//* 
	$dessert0 = $_POST["dessert0"];
	$entre1 = $_POST["entre1"];
	$plat1 = $_POST["plat1"];
	$dessert1 = $_POST["dessert1"];
	$entre2 = $_POST["entre2"];
	$plat2 = $_POST["plat2"];
	$dessert2 = $_POST["dessert2"];
	echo "Variable reçue : " . $dessert0;
	echo "Variable reçue : " . $entre1;
	echo "Variable reçue : " . $plat1;
	echo "Variable reçue : " . $dessert1;
	echo "Variable reçue : " . $entre2;
	echo "Variable reçue : " . $plat2;
	echo "Variable reçue : " . $dessert2; */

/* 
// Récupération des valeurs sélectionnées
    $E0 = $_POST["entrée-0"];
    $P0 = $_POST["plat-0"];
    $D0 = $_POST["dessert-0"];
    
    $E1 = $_POST["entrée-1"];
    $P1 = $_POST["plat-1"];
    $D1 = $_POST["dessert-1"];
    
    $E2 = $_POST["entrée-2"];
    $P2 = $_POST["plat-2"];
    $D2 = $_POST["dessert-2"]; */
/* 
// Affichage des valeurs sélectionnées
echo "Premier Form :". "<br>";
echo $E0 . "<br>";
echo $P0 . "<br>";
echo $D0 . "<br>";

echo "<br>";

echo "Deuxieme Form :". "<br>";
echo $E1 . "<br>";
echo $P1 . "<br>";
echo $D1 . "<br>";

echo "<br>";

echo "Troisieme Form :". "<br>";
echo $E2 . "<br>";
echo $P2 . "<br>";
echo $D2 . "<br>"; */

?>