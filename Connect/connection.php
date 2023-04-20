<?php
session_start();

$dbClient = new PDO('mysql:host=lequaic8.mysql.db;dbname=lequaic8;', 'lequaic8', 'LeQuaiAntiqueEstMon1SiteOvh');
/* 
if(isset($_POST['submit'])){
    
} */
if(isset($_POST['submit'])){/* 
    if(!empty($_POST['email']) AND !empty($_POST['password'])){ */
        $pseudoParDefaut = "admin@lequaiantique.fr";
        $mdpParDefaut = "LeQuaiAntique_Admin";

        $pseudoSaisi = htmlspecialchars($_POST['email']);
        $mdpSaisi = htmlspecialchars($_POST['password']);

        $sqlStatut = $dbClient->query("SELECT statut FROM client WHERE mail = '$pseudoParDefaut'");
        while ($statut =$sqlStatut->fetch()){
            $statut = $statut['statut'];
            echo $statut;
        }

        
        if($pseudoSaisi == $pseudoParDefaut AND $mdpSaisi == $mdpParDefaut AND $statut = "admin"){

            $_SESSION['Admin'] = $mdpSaisi;
            $_SESSION['AdminName'] = $pseudoSaisi;
            $_SESSION['mdp'] = $mdpSaisi;
            header('location: Admin/index.php');
        } else{
            /*echo "Mot de passe ou pseudo incorrect";
        } 
    }*/

        $mail = $_POST['email'];
        $pass = $_POST['password'];
    /* $mdpSaisi = htmlspecialchars($_POST['password']); */

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
                header("Location: ../acces/creation/inscription.php");
            }
        }/* else{
            echo"Le mot de passe n'est pas vérifié";
            header("Location: ../acces/creation/inscription.php");
        } */
    }
}
?>