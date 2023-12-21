<?php
class Aleatoire{



    public function Tirage_Eleve(){
            $get_Eleve = new Eleve();
            $ArrayEleve = array();
            $allEleve = $get_Eleve->getEleveNotPassed($_SESSION["SelectedClasse"], $_SESSION["SelectedMatiere"]);
            
            foreach($allEleve as $ID) {

                array_push($ArrayEleve, $ID["ID_ELEVE"]);
            }
            $_SESSION["EleveID"] = $ArrayEleve;
             if (!empty($_SESSION["EleveID"])) {;
        
                 //Melange le tableau
                 shuffle($_SESSION["EleveID"]);
                 //prend le premier du tableau
                $_SESSION['nombreTire'] = array_shift($_SESSION["EleveID"]);
                
                //Supprime le nombre déja passé de l'array
                 //$ArrayEleve = array_slice($ArrayEleve, 1);
        
                 $Names = $get_Eleve->getEleveByID($_SESSION['nombreTire']);
                     $_SESSION["MESSAGE"] = "<p class=\"Tirage\">L'eleve " . $Names[0]["PRENOM"] . "  " . $Names[0]["NOM"] . " à été tirer au sort !</p>";
             } else {
                 $_SESSION["MESSAGE"]= '<p class="Tirage">Tout les eleves sont passés</p>';
             } 
            return $_SESSION["MESSAGE"];
    }


         

    public function Tirage_Absent(){
            $get_Eleve = new Eleve();
            $ArrayAbsent = array();
            $getAbsentId = $get_Eleve->getEleveAbsent($_SESSION["SelectedClasse"], $_SESSION["SelectedMatiere"]);
            foreach ($getAbsentId as $IDAbs) {
                array_push($ArrayAbsent, $IDAbs["ID_ELEVE"]);
            }
            $_SESSION['IdAbsent'] = $ArrayAbsent;
            if (!empty($_SESSION["IdAbsent"])) {;
        
                //Melange le tableau
                shuffle($_SESSION["IdAbsent"]);
        
                //prend le premier du tableau
                $_SESSION['nombreTire'] = array_shift($_SESSION["IdAbsent"]);
                
                //Supprime le nombre déja passé de l'array
                //$ArrayAbsent = array_slice($ArrayAbsent, 1);
    
                $Name = $get_Eleve->getEleveByID($_SESSION['nombreTire']);
                $_SESSION["MESSAGE"] = "<p class=\"Tirage\">L'eleve " . $Name[0]["PRENOM"] . "  " . $Name[0]["NOM"] . " à été tirer au sort !</p>";
            } else {
                $_SESSION["MESSAGE"]= '<p class="Tirage">Tout les eleves sont passés</p>';
        }
        return $_SESSION["MESSAGE"];
    }


    public function affiche(){
        if(isset($_SESSION["MESSAGE"])) {
            echo $_SESSION["MESSAGE"];
        } else{
            echo "<p>Erreur ! </p>";
        }
    }
}

?>
