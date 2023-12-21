 <?php

$get_Eleve = new Eleve();
$ElevePasser = $get_Eleve->getElevePassed($_SESSION["SelectedClasse"], $_SESSION["SelectedMatiere"]);
$EleveAbsents= $get_Eleve->getEleveAbsent($_SESSION["SelectedClasse"], $_SESSION["SelectedMatiere"]);
?>


<div class="List-Absent">
    <h3>Liste des éléves absent</h3>
    <?php
    foreach ($EleveAbsents as $absent) { // Pour chaque réponse de la base sql faire:
        $_SESSION['absent'] = '<p>' . $absent["PRENOM"] . "   " . $absent["NOM"] . '</p>';
        echo $_SESSION['absent'];
    };

    ?>
</div>

<div class="List-Passed">
    <h3>Liste des éléves passée</h3>
    <?php
    foreach ($ElevePasser as $passer) { // Pour chaque réponse de la base sql faire:
        $_SESSION['passer'] = '<p>' . $passer["NOM"] . "   " . $passer["PRENOM"] ."    "."avec la note " .$passer["NOTE"] .'</p>';
        echo $_SESSION['passer'];
    };
    ?>
</div> 