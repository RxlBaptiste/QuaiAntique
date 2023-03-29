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

    <input onclick="envoyer()" type="submit" value="Valider les menus">
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
        <button onclick="removeForm()">Supprimer un formulaire</button>
    </form>


    <div id="container">
    </div>


    <button onclick="envoyerVariable()">Envoyer variable</button>
    <div id="resultat"></div>
</body>

<script>
let formCount = 1;

function addForm() {
    if (formCount < 3) {
        // Crée un nouvel élément de formulaire
        const newForm = document.createElement("div");
        newForm.innerHTML = `
    <form id="form-${formCount}" action="test2.php" method="POST">
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
        <select id="entre${formCount}" name="entrée-${formCount}">
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
        <select id="plat${formCount}" name="plat-${formCount}">
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
        <select id="dessert${formCount}" name="dessert-${formCount}">
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
      <button onclick="removeForm(this)">Supprimer ce formulaire</button>
    </form>
    `;

        // Ajoute le nouvel élément de formulaire au conteneur de formulaire
        const formContainer = document.getElementById("container");
        formContainer.appendChild(newForm);

        // Incrémente le compteur de formulaire

        formCount++;
    } else {
        alert("Imposible de rajouter un autre formulaire");
    }
}

function removeForm(button) {
    // Trouve l'élément parent (qui contient le formulaire) du bouton cliqué
    const form = button.parentElement;

    formCount--;
    // Supprime l'élément parent du formulaire
    form.remove();
}

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

function envoyer() {
    /* 
        console.log(entre0.value);
        console.log(plat1.value);
        console.log(dessert2.value); */

    /* 
        // envoyer les formulaires
        form1.submit();
        form2.submit();
        form3.submit(); */
}

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

    /* 
        xhr.send("maVariable=" + maVariable); */

    xhr.send(
        "entre0=" + entre0.value +
        "&plat0=" + plat0.value +
        "&dessert0=" + dessert0.value
    );
    xhr.send("entre1=" + entre1.value);
    xhr.send("plat1=" + plat1.value);
    xhr.send("dessert1=" + dessert1.value1);
    xhr.send(
        "entre2=" + entre2.value +
        "&plat2=" + plat2.value +
        "&dessert2=" + dessert2.value
    );
}
</script>

</html>