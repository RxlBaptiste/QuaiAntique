<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');/* 
error_reporting(0); */
if(session_status() == '1'){
session_start();}

/* $action = $_GET['action'];
 if($action == "change")
{
    $id = $_GET['id'];
}else{
    $id = 0;
}*/
/* ?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Change</title>
</head>

<body>
    <form action="" method="post">
        <input name="name" type="text" placeholder="Nom du plat" />&nbsp
        <input name="description" type="text" placeholder="Description du plat" />
        <label>Prix du plat</label>
        <input name="price" type="number" placeholder="Prix en €" />
        <label for="categories-select">Catégorie du plat</label>
        <select name="categories" id="categories-select">
            <option>Entrée</option>
            <option>Plat</option>
            <option>Déssert</option>
        </select>
        <input type="submit" value="Valider les changement" />
    </form>
</body>

</html> */
/* <?php
if(isset($_GET['id']) AND !empty($_GET['id']) AND !isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $desc = $_POST['description'];   
    $price = $_POST['price'];   
    $cat = $_POST['categories'];


    $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
    
    $sqlUpdate = "UPDATE carte SET name='$name', description='$desc', price='$price', categories='$cat' WHERE id = $id ";
    $sqlPrepare = $dbClient->prepare($sqlUpdate); 
    $sqlPrepare->execute();

}
?> */
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Change</title>
</head>

<body>

    <a href="carte.php">
        <-RETOUR </a>

            <form action="" method="post">
                <input name="name" type="text" placeholder="Nom du plat" />&nbsp
                <input name="description" type="text" placeholder="Description du plat" />
                <label>Prix du plat</label>
                <input name="price" type="number" placeholder="Prix en €" />
                <label for="categories-select">Catégorie du plat</label>
                <select name="categories" id="categories-select">
                    <option>Entrée</option>
                    <option>Plat</option>
                    <option>Déssert</option>
                </select>
                <input type="submit" name="submit" value="Valider les changements" />
            </form>
</body>

</html>

<?php
    if(isset($_POST['submit'])){
        
        $name = $_POST['name'];
        $desc = $_POST['description'];   
        $price = $_POST['price'];   
        $cat = $_POST['categories'];
    
        $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
        $dbClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Afficher les erreurs PDO
    
        $sqlUpdate = "UPDATE carte SET name='$name', description='$desc', price='$price', categories='$cat' WHERE id = $id ";
        var_dump($sqlUpdate); // Affiche la requête SQL
    
        $sqlPrepare = $dbClient->prepare($sqlUpdate); 
        $sqlPrepare->execute();
    }
?>