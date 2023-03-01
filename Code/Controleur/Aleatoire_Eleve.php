<?php

include ('../Controleur/Log_BDO.php');
//Choisit un eleve aléatoirement 
// Statut int(2)
// 0 = Non passé   6
// 1= Passé        1
// 2 = Absent      2


// $getID = 'SELECT ID_Eleve FROM Eleve WHERE ID_Classe='.$selected.' AND STATUT=0';;

// foreach ($connexion->query($getID) as $ID) {
//     array_push($ArrayEleve,$ID[0]);
// }

var_dump($_SESSION["EleveID"]);



 //Si le select est activé
if(isset($_POST['Tirage'])) {

        //Melange le tableau
    var_dump($_SESSION["ArrayEleve2"]);

    shuffle($_SESSION["ArrayEleve2"]);


    echo '<h1>test</h1>';

    var_dump($_SESSION["ArrayEleve2"]);
    //prend le premier du tableau
    $nombreTire = array_shift($_SESSION["ArrayEleve2"]);
    var_dump($nombreTire);
    echo '<h1>test2</h1>';
    //Supprime le nombre déja passé de l'array
    $ArrayEleve = array_slice($ArrayEleve, 1);
    $NameSQL = 'SELECT NOM,PRENOM FROM Eleve WHERE ID_ELEVE='.$nombreTire;
    echo '<h1>test3</h1>';

    foreach($connexion->query($NameSQL) as $ligne3){
        echo '<h1>test5</h1>';
    $PrenomTirer = $ligne3[1];
    $NomTirer = $ligne3[0];
    echo "<p class=\"Tirage\">L'eleve ".$PrenomTirer."  ".$NomTirer." à été tirer au sort !</p>";
};
echo '<h1>test4</h1>';
}else {
        echo '<p class="Tirage">Tirage au sort !</p>';
    }












// $StatutPasser = 'UPDATE Eleve SET STATUT=1 WHERE ID_ELEVE='.$nombreTire;
// $StatutAbsent = 'UPDATE Eleve SET STATUT=2 WHERE ID_ELEVE='.$nombreTire;

?>