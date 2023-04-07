<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');/* 
error_reporting(0); */
if(session_status() == '1'){
session_start();}

$id = $_GET['id'];
$imagePath = $_GET['image_path'];
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

            <form method="post" action="" enctype="multipart/form-data">
                <input type="hidden" name="id" value="3" />
                <label for="nom">Nom de l'image :</label>
                <input type="text" name="nom" required />
                <br />
                <label for="image">Nouvelle image :</label>
                <input type="file" name="image" required />
                <br />
                <input type="submit" name="submit" value="Mettre à jour l'image" />
            </form>
</body>

</html>

<?php
if (isset($_POST["submit"])) {
    // Récupération des informations de l'image à mettre à jour
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $image_path = $_FILES['image']['tmp_name'];
        
    // Suppression de l'ancienne image
    $old_image_path = "../../../$imagePath.jpg";
    if (file_exists($old_image_path)) {
        unlink($old_image_path);
    }
    
    // Ajout de la nouvelle image
    $new_image_path = "../../../$imagePath.jpg";
    move_uploaded_file($image_path, $new_image_path);
    
    // Mise à jour de la base de données
    $dbImage = new PDO('mysql:host=localhost;dbname=codebychat;', 'root', '');
    $sql = "UPDATE image SET name = '$nom', image_path = '$new_image_path' WHERE id = $id";
    $sqlPrepare = $dbImage->prepare($sql);
    $sqlPrepare->execute(); 
    
    echo "L'image a été mise à jour.";
}
?>