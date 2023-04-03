<?php

session_start();
// Connexion à la base de données
$dbHoraire = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
if (isset($_POST["submit"])) {
/*--------Horaire du midi------------*/
	$lundiMo = $_POST["lundiMo"];
	$lundiMf = $_POST["lundiMf"];
	$mardiMo = $_POST["mardiMo"];
	$mardiMf = $_POST["mardiMf"];
	$mercrediMo = $_POST["mercrediMo"];
	$mercrediMf = $_POST["mercrediMf"];
	$jeudiMo = $_POST["jeudiMo"];
	$jeudiMf = $_POST["jeudiMf"];
	$vendrediMo = $_POST["vendrediMo"];
	$vendrediMf = $_POST["vendrediMf"];
	$samediMo = $_POST["samediMo"];
	$samediMf = $_POST["samediMf"];
	$dimancheMo = $_POST["dimancheMo"];
	$dimancheMf = $_POST["dimancheMf"];
/*--------Horaire du soir------------*/
	$lundiSo = $_POST["lundiSo"];
	$lundiSf = $_POST["lundiSf"];
	$mardiSo = $_POST["mardiSo"];
	$mardiSf = $_POST["mardiSf"];
	$mercrediSo = $_POST["mercrediSo"];
	$mercrediSf = $_POST["mercrediSf"];
	$jeudiSo = $_POST["jeudiSo"];
	$jeudiSf = $_POST["jeudiSf"];
	$vendrediSo = $_POST["vendrediSo"];
	$vendrediSf = $_POST["vendrediSf"];
	$samediSo = $_POST["samediSo"];
	$samediSf = $_POST["samediSf"];
	$dimancheSo = $_POST["dimancheSo"];
	$dimancheSf = $_POST["dimancheSf"];

    
/*--------Horaire du midi------------*/
	$ClundiMo = date("H:i");
	$ClundiMf = date("H:i");
	$CmardiMo = date("H:i");
	$CmardiMf = date("H:i");
	$CmercrediMo = date("H:i");
	$CmercrediMf = date("H:i");
	$CjeudiMo = date("H:i");
	$CjeudiMf = date("H:i");
	$CvendrediMo = date("H:i");
	$CvendrediMf = date("H:i");
	$CsamediMo = date("H:i");
	$CsamediMf = date("H:i");
	$CdimancheMo = date("H:i");
	$CdimancheMf = date("H:i");
/*--------Horaire du soir------------*/
	$ClundiSo = date("H:i");
	$ClundiSf = date("H:i");
	$CmardiSo = date("H:i");
	$CmardiSf = date("H:i");
	$CmercrediSo = date("H:i");
	$CmercrediSf = date("H:i");
	$CjeudiSo = date("H:i");
	$CjeudiSf = date("H:i");
	$CvendrediSo = date("H:i");
	$CvendrediSf = date("H:i");
	$CsamediSo = date("H:i");
	$CsamediSf = date("H:i");
	$CdimancheSo = date("H:i");
	$CdimancheSf = date("H:i");

    $dbHoraire->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Afficher les erreurs PDO

    $sqlUpdateOuvert = "UPDATE horaires SET 
    lundiM='$lundiMo', 
    lundiS='$lundiMf', 
    mardiM='$mardiMo', 
    mardiS='$mardiMf', 
    mercrediM='$mercrediMo', 
    mercrediS='$mercrediMf', 
    jeudiM='$jeudiMo', 
    jeudiS='$jeudiMf', 
    vendrediM='$vendrediMo', 
    vendrediS='$vendrediMf', 
    samediM='$samediMo', 
    samediS='$samediMf', 
    dimancheM='$dimancheMo', 
    dimancheS='$dimancheMf' WHERE id = 1 ";

    $sqlUpdateFerme = "UPDATE horaires SET 
    lundiM='$lundiSo', 
    lundiS='$lundiSf', 
    mardiM='$mardiSo', 
    mardiS='$mardiSf', 
    mercrediM='$mercrediSo', 
    mercrediS='$mercrediSf', 
    jeudiM='$jeudiSo', 
    jeudiS='$jeudiSf', 
    vendrediM='$vendrediSo', 
    vendrediS='$vendrediSf', 
    samediM='$samediSo', 
    samediS='$samediSf', 
    dimancheM='$dimancheSo', 
    dimancheS='$dimancheSf' WHERE id = 2 ";

    $sqlPrepareOuvert = $dbHoraire->prepare($sqlUpdateOuvert); 
    $sqlPrepareFerme = $dbHoraire->prepare($sqlUpdateFerme); 
    
    $sqlPrepareOuvert->execute();
    $sqlPrepareFerme->execute();

    header("Location: ../index.php" );
}

?>