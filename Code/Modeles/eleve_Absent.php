<div class="List-Absent">
    <h3>Liste des éléves absent</h3>
    <?php
    include("../Controleur/Log_BDO.php");
    $getAbsent = 'SELECT NOM,PRENOM FROM Eleve WHERE STATUT=2 AND ID_Classe='. $_SESSION["SelectedClasse"];
    foreach ($connexion->query($getAbsent) as $absent) { // Pour chaque réponse de la base sql faire:
        $_SESSION['absent'] = '<p>' . $absent[0] . "   " . $absent[1] . '</p>';
        echo $_SESSION['absent'];
    };
    ?>
</div>
