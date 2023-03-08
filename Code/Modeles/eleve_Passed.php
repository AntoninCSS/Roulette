<div class="List-Passed">
    <h3>Liste des éléves passée</h3>
    <?php
    include("../Controleur/Log_BDO.php");
    $getPassed = 'SELECT NOM,PRENOM,NOTE FROM Eleve WHERE STATUT=1 AND ID_Classe=' . $_SESSION["SelectedClasse"];

    foreach ($connexion->query($getPassed) as $passer) { // Pour chaque réponse de la base sql faire:
        $_SESSION['passer'] = '<p>' . $passer[0] . "   " . $passer[1] ."    "."avec la note ".$passer[2]. '</p>';
        echo $_SESSION['passer'];
    };
    ?>
</div>
