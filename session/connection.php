<?php/*
    session_start();
    $_SESSION['mail'] = $_POST['mail'];

    if(isset($_POST['submit'])){
        $mail = $_POST['mail'];
        $password = $_POST['pass'];

        $mdpSaisi = htmlspecialchars($_POST['pass']);
    
        $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');

        $sqlSelect = "SELECT * FROM client WHERE mail = '$mail'";
        $sqlPrepareSelect = $dbClient->prepare($sqlSelect);
        $sqlPrepareSelect->execute();

        if(!isset($_SESSION['mail'])){
            $recupeMail = $dbClient->query("SELECT * FROM client WHERE mail = '$mail'");
            while ($Mail = $recupeMail->fetch()){
                $mailSession = $Mail['mail'];
                $passwordSession = $Mail['pass'];
            }
            if($passwordSession == $password AND $mailSession == $mail){
                header("Location: activeAccueil.php");
            }
        }
    }*/

session_start();

$dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');

if(isset($_POST['submit'])){
    $email = $_POST['mail'];
    $password = $_POST['pass'];

    $mdpSaisi = htmlspecialchars($_POST['pass']);

    $sqlPassClient = $dbClient->query("SELECT * FROM client WHERE mail = '$email'");
    while ($passSession =$sqlPassClient->fetch()){
        
        $passWordSession = $passSession['password'];
    }

    if(password_verify($mdpSaisi,$passWordSession)){
        $_SESSION['mdp']; 
        header("Location:../ApiClient/accueil.php" );
    }else{
        echo "Le mot de passe n'est pas vérifié";
    }

    $sqlSelect = "SELECT * FROM client where mail = '$email'";
    $sqlPrepare = $dbClient->prepare($sqlSelect);
    $sqlPrepare->execute();
    
    if(!isset($_SESSION['email'])){
        $_SESSION['email'] = $email;
    }
    $sqlClient = $dbClient->query("SELECT * FROM client WHERE mail = '$email'");
     while ($session = $sqlClient->fetch()){
       
        $nameSession = $session['email'];
        $passSession = $session['password'];
    }
    if($passSession == $password /* AND $nameSession == $email */ ){
        header("Location: activeAccueil.php"); 
        /* echo 'Flow !';*/
    }else{  
        header("Location: ../acces/creation/inscription.html");
        /*echo 'No-Flow !';
    } *//* 
    echo $passSession;
    echo "<br>";
    echo $mdp; */
    }
}
?>