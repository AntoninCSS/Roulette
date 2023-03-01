<?php
    //Logs
    $servername = 'localhost';
    $username = 'RouletteAdmin';
    $password = '1234';
    $BDDname = 'Roulette';

    try { // Essaye 
        $connexion = new PDO("mysql:host=$servername;dbname=$BDDname",$username, $password);
        //echo "Connexion Réussite  ";
    } catch (PDOException $e) { // EN cas d'échec

        echo "Erreur : " . $e-> getMessage();
    }

?>