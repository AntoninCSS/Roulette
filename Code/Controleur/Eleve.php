<?php
$ArrayEleve = array();
$ArrayAbsent = array();
include('../Controleur/Log_BDO.php');
//Prend Les informations du select pour la reqête sql des eleves 


if (isset($_POST['submit'])) { //Si le select est activé
    if (!empty($_POST['Classes'])) { //
        $_SESSION["SelectedClasse"] = $_POST['Classes'];
        //requêtes SQL
        $get_Eleve = 'SELECT NOM,PRENOM FROM Eleve WHERE ID_Classe=' . $_SESSION["SelectedClasse"];
        $get_Classe2 = 'SELECT NOM FROM Classe WHERE ID_Classe=' . $_SESSION["SelectedClasse"];
        echo '<div class="Eleve">';

        foreach ($connexion->query($get_Classe2) as $ligne2) { // Pour chaque réponse de la base sql faire:
            $_SESSION['classe'] = '<h3>' . $ligne2[0] . '</h3>';
            echo $_SESSION['classe'];
        };

        foreach ($connexion->query($get_Eleve) as $ligne) { // Pour chaque réponse de la base sql faire:
            $_SESSION['eleve'] = '<p>' . $ligne[1] . '  ' . $ligne[0] . '</p>';
            echo $_SESSION['eleve'];
        }

        echo '</div>';

    } else {
        echo '<div class="Eleve"> <p>S\'il vous plaît veuillez choisir une classe.</p>  </div>';
    }
}


// Afficchage L'hors du tirage après refresh de la fonction du dessus 


if (isset($_POST['Tirage']) or isset($_POST['A']) or isset($_POST['1']) or isset($_POST['2']) or isset($_POST['3']) or isset($_POST['Reset']) or isset($_POST["TirageAbsent"])) {
    $get_Eleve = 'SELECT NOM,PRENOM FROM Eleve WHERE ID_Classe=' . $_SESSION["SelectedClasse"];
    $get_Classe2 = 'SELECT NOM FROM Classe WHERE ID_Classe=' . $_SESSION["SelectedClasse"];
    echo '<div class="Eleve">';

    foreach ($connexion->query($get_Classe2) as $ligne2) { // Pour chaque réponse de la base sql faire:
        $_SESSION['classe'] = '<h3>' . $ligne2[0] . '</h3>';
        echo $_SESSION['classe'];
    };

    foreach ($connexion->query($get_Eleve) as $ligne) { // Pour chaque réponse de la base sql faire:
        $_SESSION['eleve'] = '<p>' . $ligne[1] . '  ' . $ligne[0] . '</p>';
        echo $_SESSION['eleve'];
    }
    echo '</div>';
}

if(isset($_SESSION["MESS"])) {
    echo $_SESSION["MESSS"];
}