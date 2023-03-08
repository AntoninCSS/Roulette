<?php

if (isset($_POST["Reset"])) {
    echo $_SESSION["SelectedClasse"];
    $Statut0 = 'UPDATE Eleve SET STATUT=0 WHERE ID_Classe =' . $_SESSION["SelectedClasse"];
    $resultat = $connexion->query($Statut0);
    echo "<p class=\"Done\"> Done !</p>";
}
