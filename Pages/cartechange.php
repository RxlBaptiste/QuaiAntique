<?php
error_reporting(0);

$dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');

$action = $_GET['action'];
 if($action == "change")
{
$id = $_GET['id'];
}?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Change</title>
</head>

<body>

    <form action="#" method="post">
        <input name="name" type="text" placeholder="nom du plat" />
        <input name="description" type="text" placeholder="description du plat" />
        <label>Prix du plat</label>
        <input name="price" type="number" placeholder="prix du plat" />
        <label for="categories-select">Catégorie du plat</label>
        <select name="categories" id="categories-select">
            <option>Entrée</option>
            <option>Plat</option>
            <option>Déssert</option>
        </select>
        <input type="submit" value="Valider les changement" />
    </form>
</body>

</html>

<?php
if(!isset($_POST['submit'])){
    $name = $_POST['name'];
    $desc = $_POST['description'];   
    $price = $_POST['price'];   
    $cat = $_POST['categories'];

    
  $sql = "UPDATE carte SET name='$name' , description='$desc', price='$price', categories='$cat'  WHERE id = 3 ";
  $result = $dbCarte->prepare($sql); $result->execute();
   /*  header('Location: carte.php' ); */
}
?>