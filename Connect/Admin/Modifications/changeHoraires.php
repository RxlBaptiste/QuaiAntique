<?php

/*TROUVER POURQUOI LES HORAIRES NE SONT PAS AU BON ENDROIT DANS LA BDD*/

session_start();
// Connexion à la base de données
$dbHoraire = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
/* if (isset($_POST["submit"])) { */
/*--------Horaire du midi------------*/
	$lundiMo = $_POST["lundiMO"];
	$lundiMf = $_POST["lundiMF"];
    $mardiMo = $_POST["mardiMO"];
	$mardiMf = $_POST["mardiMF"];
	$mercrediMo = $_POST["mercrediMO"];
	$mercrediMf = $_POST["mercrediMF"];
	$jeudiMo = $_POST["jeudiMO"];
	$jeudiMf = $_POST["jeudiMF"];
	$vendrediMo = $_POST["vendrediMO"];
	$vendrediMf = $_POST["vendrediMF"];
	$samediMo = $_POST["samediMO"];
	$samediMf = $_POST["samediMF"];
	$dimancheMo = $_POST["dimancheMO"];
	$dimancheMf = $_POST["dimancheMF"];
/*--------Horaire du soir------------*/ 
	$lundiSo = $_POST["lundiSO"];
	$lundiSf = $_POST["lundiSF"];
	$mardiSo = $_POST["mardiSO"];
	$mardiSf = $_POST["mardiSF"];
	$mercrediSo = $_POST["mercrediSO"];
	$mercrediSf = $_POST["mercrediSF"];
	$jeudiSo = $_POST["jeudiSO"];
	$jeudiSf = $_POST["jeudiSF"];
	$vendrediSo = $_POST["vendrediSO"];
	$vendrediSf = $_POST["vendrediSF"];
	$samediSo = $_POST["samediSO"];
	$samediSf = $_POST["samediSF"];
	$dimancheSo = $_POST["dimancheSO"];
	$dimancheSf = $_POST["dimancheSF"];


    $dbHoraire->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Afficher les erreurs PDO

    $sqlUpdateOuvert = "UPDATE horaires SET 
    lundiM='$lundiMo', 
    lundiS='$lundiSo', 
    mardiS='$mardiSo', 
    mardiM='$mardiMo', 
    mercrediM='$mercrediMo', 
    mercrediS='$mercrediSo', 
    jeudiM='$jeudiMo', 
    jeudiS='$jeudiSo', 
    vendrediM='$vendrediMo', 
    vendrediS='$vendrediSo', 
    samediM='$samediMo', 
    samediS='$samediSo', 
    dimancheM='$dimancheMo',
    dimancheS='$dimancheSo'
    WHERE id = 1 ";

    $sqlUpdateFerme = "UPDATE horaires SET 
    lundiM='$lundiMf', 
    lundiS='$lundiSf', 
    mardiM='$mardiMf', 
    mardiS='$mardiSf', 
    mercrediM='$mercrediMf', 
    mercrediS='$mercrediSf', 
    jeudiM='$jeudiMf', 
    jeudiS='$jeudiSf', 
    vendrediM='$vendrediMf', 
    vendrediS='$vendrediSf', 
    samediM='$samediMf', 
    samediS='$samediSf', 
    dimancheM='$dimancheMf', 
    dimancheS='$dimancheSf'
    WHERE id = 2 ";

    $sqlPrepareOuvert = $dbHoraire->prepare($sqlUpdateOuvert); 
    $sqlPrepareFerme = $dbHoraire->prepare($sqlUpdateFerme); 
    
    $sqlPrepareOuvert->execute();
    $sqlPrepareFerme->execute();

    header("Location: ../index.php" );
/* } */

?>