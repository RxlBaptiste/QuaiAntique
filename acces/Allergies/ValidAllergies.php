<?php
session_start();
if (!empty($_POST['allergies'])) { 
    $allergies = $_POST['allergies'];
    $mail = $_SESSION['mail'];
    $conn = new mysqli("lequaic8.mysql.db", "lequaic8", "LeQuaiAntiqueEstMon1SiteOvh", "lequaic8");
    if ($conn->connect_error) {
        die("La connexion a échoué: " . $conn->connect_error);
    }
    $allergies_string = implode(",", $allergies);
    $sql = "UPDATE client SET allergies='$allergies_string' WHERE mail='$mail'";
    if ($conn->query($sql) === TRUE) {
        echo "Les allergies ont été mises à jour avec succès.";
    } else {
        echo "Erreur de mise à jour des allergies: " . $conn->error;
    }
    $conn->close();
    
    header("Location: ../connection.php" );

}
?>