<?php
// Connexion à la base de données
$dbMenu = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
/* 
if (isset($_POST["entre0"])) { */
	$entre1 = $_POST["entre0"];
	$plat1 = $_POST["plat0"];
	$dessert1 = $_POST["dessert0"];
	$entre2 = $_POST["entre1"];
	$plat2 = $_POST["plat1"];
	$dessert2 = $_POST["dessert1"];
	$entre3 = $_POST["entre2"];
	$plat3 = $_POST["plat2"];
	$dessert3 = $_POST["dessert2"];

	$name = $_POST["name"];
	$price = $_POST["price"];
	$formCount = $_POST["formCount"];
	
	echo "Variable 1 reçue : " . $entre0. "<br>";
	echo "Variable 2 reçue : " . $plat0. "<br>";
	echo "Variable 3 reçue : " . $dessert0. "<br>";
	echo "Variable 4 reçue : " . $entre1. "<br>";
	echo "Variable 5 reçue : " . $plat1. "<br>";
	echo "Variable 6 reçue : " . $dessert1. "<br>";
	echo "Variable 7 reçue : " . $entre2. "<br>";
	echo "Variable 8 reçue : " . $plat2. "<br>";
	echo "Variable 9 reçue : " . $dessert2. "<br>";
	echo "<br>";
	echo "Variable name reçue : " . $name. "<br>";
	echo "Variable price reçue : " . $price. "<br>";
	echo "<br>";
	echo "Variable formCount reçue : " . $formCount. "<br>";


	if($formCount == 1){
    	$sqlInsert = "INSERT INTO menus 
			( name, entre1, plat1, dessert1, price ) VALUES 
			( '$name', '$entre1', '$plat1', '$dessert1', '$price')";
    	$sqlPrepareInsert = $dbMenu->prepare($sqlInsert);
    	$sqlPrepareInsert->execute(); 
	} else if($formCount == 2){
    	$sqlInsert = "INSERT INTO menus 
			( name, entre1, plat1, dessert1, entre2, plat2, dessert2, price ) VALUES 
			( '$name', '$entre1', '$plat1', '$dessert1', '$entre2', '$plat2', '$dessert2', '$price')";
    	$sqlPrepareInsert = $dbMenu->prepare($sqlInsert);
    	$sqlPrepareInsert->execute(); 
	}else if($formCount == 3){
    	$sqlInsert = "INSERT INTO menus 
			( name, entre1, plat1, dessert1, entre2, plat2, dessert2, entre3, plat3, dessert3, price ) VALUES 
			( '$name', '$entre1', '$plat1', '$dessert1', '$entre2', '$plat2', '$dessert2', '$entre3', '$plat3', '$dessert3', '$price')";
    	$sqlPrepareInsert = $dbMenu->prepare($sqlInsert);
    	$sqlPrepareInsert->execute(); 
	}


?>