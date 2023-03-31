<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button onclick="addForm()">Ajouter un formulaire</button>
    <button onclick="removeForm()">Supprimer un formulaire</button>

    <input onclick="envoyer()" type="submit" value="Valider les menus">

    <!--  FORMULAIRE N°1  -->

    <form id="form-0" action="test2.php" method="POST">
        <?php
    
    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');

    //Recupération des Entrées
    $recupPlat = $dbCarte->query("SELECT name FROM carte WHERE categories = 'entrée'");
    while ($carte = $recupPlat->fetch()){
        $entrées[] = $carte['name'];
    }

?>
        <select id="entre0" name="entrée-0">
            <?php
            foreach ($entrées as $entrée) {
        ?>
            <option value="<?php echo $entrée; ?>">
                <?php  
                echo $entrée;
                ?>
            </option><?php
    }
    ?>
        </select>
        <?php
    //Recupération des Plats
    $recupPlat = $dbCarte->query("SELECT name FROM carte WHERE categories = 'plat'");
    while ($carte = $recupPlat->fetch()){
        $plats[] = $carte['name'];
    }

?>
        <select id="plat0" name="plat-0">
            <?php
            foreach ($plats as $plat) {
        ?>
            <option value="<?php echo $plat; ?>">
                <?php  
                echo $plat;
                ?>
            </option><?php
    }
    ?>
        </select>
        <?php
    //Recupération des Désserts
    $recupPlat = $dbCarte->query("SELECT name FROM carte WHERE categories = 'dessert'");
    while ($carte = $recupPlat->fetch()){
        $desserts[] = $carte['name'];
    }
?>
        <select id="dessert0" name="dessert-0">
            <?php
            foreach ($desserts as $dessert) {
        ?>
            <option value="<?php echo $dessert; ?>">
                <?php  
                echo $dessert;
                ?>
            </option><?php
    }
    ?>
        </select>
    </form>

    <!--  FORMULAIRE N°2  -->

    <form id="form-1" action="test2.php" method="POST" class="hidden">
        <?php
    
    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');

    //Recupération des Entrées
    $recupPlat = $dbCarte->query("SELECT name FROM carte WHERE categories = 'entrée'");
    while ($carte = $recupPlat->fetch()){
        if (!in_array($carte['name'], $entrées)) {
            $entrées[] = $carte['name'];
        }
    }

?>
        <select id="entre1" name="entrée-1">
            <?php
            foreach ($entrées as $entrée) {
        ?>
            <option value="<?php echo $entrée; ?>">
                <?php  
                echo $entrée;
                ?>
            </option><?php
    }
    ?>
        </select>
        <?php
    //Recupération des Plats
    $recupPlat = $dbCarte->query("SELECT name FROM carte WHERE categories = 'plat'");
    while ($carte = $recupPlat->fetch()){
        if (!in_array($carte['name'], $plats)) {
            $plats[] = $carte['name'];
        }
    }

?>
        <select id="plat1" name="plat-1">
            <?php
            foreach ($plats as $plat) {
        ?>
            <option value="<?php echo $plat; ?>">
                <?php  
                echo $plat;
                ?>
            </option><?php
    }
    ?>
        </select>
        <?php
    //Recupération des Désserts
    $recupPlat = $dbCarte->query("SELECT name FROM carte WHERE categories = 'dessert'");
    while ($carte = $recupPlat->fetch()){
        if (!in_array($carte['name'], $desserts)) {
            $desserts[] = $carte['name'];
        }
    }
?>
        <select id="dessert1" name="dessert-1">
            <?php
            foreach ($desserts as $dessert) {
        ?>
            <option value="<?php echo $dessert; ?>">
                <?php  
                echo $dessert;
                ?>
            </option><?php
    }
    ?>
        </select>
    </form>

    <!--  FORMULAIRE N°3  -->

    <form id="form-2" action="test2.php" method="POST" class="hidden">
        <?php
    
    $dbCarte = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');

    //Recupération des Entrées
    $recupPlat = $dbCarte->query("SELECT name FROM carte WHERE categories = 'entrée'");
    while ($carte = $recupPlat->fetch()){
        if (!in_array($carte['name'], $entrées)) {
            $entrées[] = $carte['name'];
        }
    }

?>
        <select id="entre2" name="entrée-2">
            <?php
            foreach ($entrées as $entrée) {
        ?>
            <option value="<?php echo $entrée; ?>">
                <?php  
                echo $entrée;
                ?>
            </option><?php
    }
    ?>
        </select>
        <?php
    //Recupération des Plats
    $recupPlat = $dbCarte->query("SELECT name FROM carte WHERE categories = 'plat'");
    while ($carte = $recupPlat->fetch()){
        if (!in_array($carte['name'], $plats)) {
            $plats[] = $carte['name'];
        }
    }

?>
        <select id="plat2" name="plat-2">
            <?php
            foreach ($plats as $plat) {
        ?>
            <option value="<?php echo $plat; ?>">
                <?php  
                echo $plat;
                ?>
            </option><?php
    }
    ?>
        </select>
        <?php
    //Recupération des Désserts
    $recupPlat = $dbCarte->query("SELECT name FROM carte WHERE categories = 'dessert'");
    while ($carte = $recupPlat->fetch()){
        if (!in_array($carte['name'], $desserts)) {
            $desserts[] = $carte['name'];
        }
    }
?>
        <select id="dessert2" name="dessert-2">
            <?php
            foreach ($desserts as $dessert) {
        ?>
            <option value="<?php echo $dessert; ?>">
                <?php  
                echo $dessert;
                ?>
            </option><?php
    }
    ?>
        </select>
    </form>
    <form action="test2.php" method="POST">
        <input id="name" name="name" type="text" placeholder="Nom du menu">
        <input id="price" name="price" type="number" placeholder="Prix du menu">
    </form>
    <button onclick="envoyerVariable()">Envoyer variable</button>
    <div id="resultat"></div>
</body>

<script>
let formCount = 1;
// récupérer les formulaires
const form1 = document.getElementById('form-0');
const form2 = document.getElementById('form-1');
const form3 = document.getElementById('form-2');

const entre0 = document.getElementById('entre0');
const plat0 = document.getElementById('plat0');
const dessert0 = document.getElementById('dessert0');

const entre1 = document.getElementById('entre1');
const plat1 = document.getElementById('plat1');
const dessert1 = document.getElementById('dessert1');

const entre2 = document.getElementById('entre2');
const plat2 = document.getElementById('plat2');
const dessert2 = document.getElementById('dessert2');

const name = document.getElementById('name');
const price = document.getElementById('price');

let form2visible = 0;
let form3visible = 0;

function addForm() {

    if (form3visible == 0 && form2visible == 1) {
        form3.classList.toggle('hidden');
        form3visible = 1;
    } else if (form2visible == 0 && form3visible == 0) {
        form2.classList.toggle('hidden');
        form2visible = 1;
    } else if (form2visible == 1 && form3visible == 1) {
        alert('Vous avez afficher le maximum de formulaire sur une carte.')
    }
    formCount++;
    console.log("Add Count : " + formCount);
}

function removeForm() {

    if (form3visible == 1 && form2visible == 1) {
        form3.classList.toggle('hidden');
        form3visible = 0;
    } else if (form2visible == 1 && form3visible == 0) {
        form2.classList.toggle('hidden');
        form2visible = 0;
    } else if (form2visible == 0 && form3visible == 0) {
        alert('Vous avez afficher le minimum de formulaire sur une carte.')
    }
    formCount--;
    console.log("Remove Count : " + formCount);
}

/* 
function envoyer() {
    /* 
        console.log(entre0.value);
        console.log(plat1.value);
        console.log(dessert2.value); */

/* 
    // envoyer les formulaires
    form1.submit();
    form2.submit();
    form3.submit(); 
}*/

function envoyerVariable() {

    // Création d'une variable
    var maVariable = "Bonjour PHP !";

    // Création d'une instance d'objet XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Définition de la méthode d'envoi et de l'URL de la requête
    xhr.open("POST", "test2.php", true);

    // Définition de l'en-tête de la requête
    xhr.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded"
    );

    // Définition de la fonction de rappel pour la réponse de la requête
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Affichage de la réponse dans la page
            document.getElementById("resultat").innerHTML = this.responseText;
        }
    };

    // Envoi de la requête avec les données de la variable

    if (formCount == 1) {
        xhr.send(
            "entre0=" + entre0.value +
            "&plat0=" + plat0.value +
            "&dessert0=" + dessert0.value +
            "&name=" + name.value +
            "&price=" + price.value +
            "&formCount=" + formCount
        );
    } else if (formCount == 2) {
        xhr.send(
            "entre0=" + entre0.value +
            "&plat0=" + plat0.value +
            "&dessert0=" + dessert0.value +
            "&entre1=" + entre1.value +
            "&plat1=" + plat1.value +
            "&dessert1=" + dessert1.value +
            "&name=" + name.value +
            "&price=" + price.value +
            "&formCount=" + formCount
        );
    } else if (formCount == 3) {
        xhr.send(
            "entre0=" + entre0.value +
            "&plat0=" + plat0.value +
            "&dessert0=" + dessert0.value +
            "&entre1=" + entre1.value +
            "&plat1=" + plat1.value +
            "&dessert1=" + dessert1.value +
            "&entre2=" + entre2.value +
            "&plat2=" + plat2.value +
            "&dessert2=" + dessert2.value +
            "&name=" + name.value +
            "&price=" + price.value +
            "&formCount=" + formCount
        );
    }
}
</script>

</html>
<style>
.hidden {
    display: none;
}
</style>