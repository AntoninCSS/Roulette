<?php  
$ArrayEleve = array();
include ('../Controleur/Log_BDO.php');
//Prend Les informations du select pour la reqête sql des eleves 

    
    if(isset($_POST['submit'])){ //Si le select est activé
        if(!empty($_POST['Classes'])) {
            $selected = $_POST['Classes'];

            //requêtes SQL
            $get_Eleve = 'SELECT NOM,PRENOM FROM Eleve WHERE ID_Classe='.$selected.' AND STATUT=0';
            $get_Classe2 = 'SELECT NOM FROM Classe WHERE ID_Classe='.$selected;
            echo '<div class="Eleve">';

            foreach ($connexion->query($get_Classe2) as $ligne2) { // Pour chaque réponse de la base sql faire:
                $_SESSION['classe'] ='<h3>'.$ligne2[0].'</h3>';
                echo $_SESSION['classe'];
            };

            foreach ($connexion->query($get_Eleve) as $ligne) { // Pour chaque réponse de la base sql faire:
                $_SESSION['eleve']= '<p>'.$ligne[1].'  '.$ligne[0].'</p>';
                echo $_SESSION['eleve'];
            }

            $getID = 'SELECT ID_Eleve FROM Eleve WHERE ID_Classe='.$selected.' AND STATUT=0';;

            foreach ($connexion->query($getID) as $ID) {
            array_push($ArrayEleve,$ID[0]);
            echo "test";
            }
            $_SESSION['EleveID']= $ArrayEleve;

             echo '</div>';
        } else {
            echo '<div class="Eleve"> <p>S\'il vous plaît veuillez choisir une classe.</p>  </div>';
        }
        }
?>