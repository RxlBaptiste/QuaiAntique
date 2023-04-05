<?php

    $db = new PDO('mysql:host=localhost;dbname=lequaiantique;', 'root', '');

        $sql = "TRUNCATE TABLE reservation";
        if ($db->query($sql) === TRUE) {
        }
        header("Location: index.php" );

?>