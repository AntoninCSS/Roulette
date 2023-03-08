<?php

include('../Controleur/Log_BDO.php');
//Choisit un eleve aléatoirement 
// Statut int(2)
// 0 = Non passé   6
// 1= Passé        1
// 2 = Absent      2


// $getID = 'SELECT ID_Eleve FROM Eleve WHERE ID_Classe='.$selected.' AND STATUT=0';;


//Si le select est activé
if (isset($_POST['Tirage'])) {

    $getID = 'SELECT ID_Eleve FROM Eleve WHERE ID_Classe=' . $_SESSION["SelectedClasse"] . ' AND STATUT=0';

    foreach ($connexion->query($getID) as $ID) {
        array_push($ArrayEleve, $ID[0]);
    }
    $_SESSION['EleveID'] = $ArrayEleve;

    if (!empty($_SESSION["EleveID"])) {;

        //Melange le tableau
        shuffle($_SESSION["EleveID"]);

        //prend le premier du tableau
        $_SESSION['nombreTire'] = array_shift($_SESSION["EleveID"]);
        //Supprime le nombre déja passé de l'array
        //$ArrayEleve = array_slice($ArrayEleve, 1);

        $NameSQL = 'SELECT NOM,PRENOM FROM Eleve WHERE ID_ELEVE=' . $_SESSION['nombreTire'];

        foreach ($connexion->query($NameSQL) as $ligne3) {
            $PrenomTirer = $ligne3[1];
            $NomTirer = $ligne3[0];
            $_SESSION["MESSAGE"] = "<p class=\"Tirage\">L'eleve " . $PrenomTirer . "  " . $NomTirer . " à été tirer au sort !</p>";
        };
    } else {
        $_SESSION["MESSAGE"]= '<p class="Tirage">Tout les eleves sont passés</p>';
    }
} else {
    $_SESSION["MESSAGE"]= '<p class="Tirage">Tirage au sort !</p>';
}

//Aleatoire Eleve passer

if (isset($_POST['TirageAbsent'])) {

    $getAbsentId = 'SELECT ID_Eleve FROM Eleve WHERE ID_Classe=' . $_SESSION["SelectedClasse"] . ' AND STATUT=2';

    foreach ($connexion->query($getAbsentId) as $IDAbs) {
        array_push($ArrayAbsent, $IDAbs[0]);
    }
    $_SESSION['IdAbsent'] = $ArrayAbsent;
    if (!empty($_SESSION["IdAbsent"])) {;

        //Melange le tableau
        shuffle($_SESSION["IdAbsent"]);

        //prend le premier du tableau
        $_SESSION['nombreTire'] = array_shift($_SESSION["IdAbsent"]);
        
        //Supprime le nombre déja passé de l'array
        //$ArrayAbsent = array_slice($ArrayAbsent, 1);

        $NameSQL = 'SELECT NOM,PRENOM FROM Eleve WHERE ID_ELEVE=' . $_SESSION['nombreTire'];

        foreach ($connexion->query($NameSQL) as $ligne3) {
            $PrenomTirer = $ligne3[1];
            $NomTirer = $ligne3[0];
            $_SESSION["MESSAGE"] ="<p class=\"Tirage Absent \">L'eleve " . $PrenomTirer . "  " . $NomTirer . " à été tirer au sort !</p>";
        };
    } else {
        $_SESSION["MESSAGE"]= '<p class="Tirage">Tout les eleves sont passés</p>';
    }
}

if(isset($_SESSION["MESSAGE"])) {
    echo $_SESSION["MESSAGE"];
}
else{
    echo '<p class="Tirage">Tirage au sort !</p>';
}


