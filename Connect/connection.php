<?php

session_start();

$dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');

if(isset($_POST['submit'])){
    $mail = $_POST['email'];
    $pass = $_POST['password'];
/* 
    $mdpSaisi = htmlspecialchars($_POST['password']); */

    $sqlPassClient = $dbClient->query("SELECT * FROM client WHERE mail = '$mail'");
    while ($passSession =$sqlPassClient->fetch()){
        $passWordSession = $passSession['password'];
        echo $passWordSession;
        echo "<br>";
        echo $pass;
        echo "<br>";
        echo "<br>";
    }

     
    $sqlSelect = "SELECT * FROM client where mail = '$mail'";
    $sqlPrepare = $dbClient->prepare($sqlSelect);
    $sqlPrepare->execute();
    
    if(!isset($_SESSION['mail'])){
        $_SESSION['mail'] = $mail;
    }
    $sqlClient = $dbClient->query("SELECT * FROM client WHERE mail = '$mail'");
     while ($session = $sqlClient->fetch()){
       
        $mailSession = $session['mail'];
        $passSession = $session['password'];
    }
    echo $mailSession;
    echo "<br>";
    echo $mail; 
    if($mailSession == $mail){
        if(password_verify($pass,$passWordSession)){
            header("Location:Accueil.php" );
            echo "Le mot de passe est validé";
        }else{
            echo "Le mot de passe n'est pas vérifié";
            header("Location: ../acces/creation/inscription.html");
        }
    }else{
        echo"Le mot de passe n'est pas vérifié";
        header("Location: ../acces/creation/inscription.html");
    }
}
?>