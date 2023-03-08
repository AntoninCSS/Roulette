<?php
include ("../Controleur/Log_BDO.php");

$StatutPasser = 'UPDATE Eleve SET STATUT=1 WHERE ID_ELEVE='.$_SESSION["nombreTire"];
$StatutAbsent = 'UPDATE Eleve SET STATUT=2 WHERE ID_ELEVE='.$_SESSION["nombreTire"];

if (isset($_POST['1'])) {
    $connexion->query($StatutPasser);
    $connexion->query('UPDATE Eleve SET NOTE=1 WHERE ID_ELEVE='.$_SESSION["nombreTire"]);
};

if (isset($_POST['2'])) { 
    $connexion->query($StatutPasser);
    $connexion->query('UPDATE Eleve SET NOTE=2 WHERE ID_ELEVE='.$_SESSION["nombreTire"]);
};

if (isset($_POST['3'])) { 
     $connexion->query($StatutPasser);
     $connexion->query('UPDATE Eleve SET NOTE=3 WHERE ID_ELEVE='.$_SESSION["nombreTire"]);
};

if (isset($_POST['A'])) { 
     $connexion->query($StatutAbsent);
};

?>