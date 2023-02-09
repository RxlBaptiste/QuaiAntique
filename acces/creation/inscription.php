<?php
    session_start();/* 
    $_SESSION['mail'] = $_POST['mail']; */
    
    if(isset($_POST['submit'])){
        $mail = $_POST['mail'];
        $password = $_POST['pass'];
        $nbPers = $_POST['NbPers'];
        $nbEnfant = $_POST['NbEnfant'];

        $dbClient = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');
    
        $sqlSelect = "SELECT * FROM client where mail = '$mail'";
        $sqlPrepareSelect = $dbClient->prepare($sqlSelect);
        $sqlPrepareSelect->execute();



        if($sqlPrepareSelect->rowCount() > 0){
            $data = $sqlPrepareSelect->fetchAll();
            if(password_verify($password, $data[0]["password"])){
                echo '<script language="javascript">
                    alert("Vous êtes déjà inscript... Veuillez vous connecter")
                    </script>';
                header("location:../connection.html");
            }
        }else{
            $password = password_hash($password, PASSWORD_DEFAULT);
            $sqlInsert = "INSERT INTO client ( mail, password, nbPers, nbEnfant ) VALUES ( '$mail', '$password', '$nbPers', '$nbEnfant')";
            $sqlPrepareInsert = $dbClient->prepare($sqlInsert);
            $sqlPrepareInsert->execute();

            echo '<script language="javascript">
                    alert("Enregistrement validé... Veuillez vous connecter")
                    </script>';
                header("location:../connection.html");
        }
    
    }


?>