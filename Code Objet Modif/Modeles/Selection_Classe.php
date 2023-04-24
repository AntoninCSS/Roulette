<?php

class SelectClasse{
    public function SelectedUpdate():void{ //Si le select est activé
        if (isset($_POST['submit'])) {
            if (!empty($_POST['Classes'])) { //si le Select n'est pas vide
                $_SESSION["SelectedClasse"] = $_POST['Classes']; // On stocke la Classe selectioné dans la Session 
                echo '<div class="Eleve">';
        
        
                $get_Eleves = new Eleve();
                $get_Classe2 = $get_Eleves->getNameClasseByID($_SESSION["SelectedClasse"]);
                $get_Eleves2 = $get_Eleves->getEleveByClasse($_SESSION["SelectedClasse"]);
        
        
                foreach ($get_Classe2 as $ligne2) { // Pour chaque réponse de la base sql faire:
                    $_SESSION['classe'] = '<h3>' . $ligne2["NOM"] . '</h3>';
                    echo $_SESSION['classe'];
                };
        
                foreach ($get_Eleves2 as $ligne) { // Pour chaque réponse de la base sql faire:
                    $_SESSION['eleve'] = '<p>' . $ligne["NOM"] . '  ' . $ligne["PRENOM"] . '</p>';
                    echo $_SESSION['eleve'];
                }
        
                echo '</div>';
        
            } else {
                echo '<div class="Eleve"> <p>S\'il vous plaît veuillez choisir une classe.</p>  </div>';
            }
        }else {
                $_SESSION["MESSAGE"]= '<p class="Tirage">Tirage au sort !</p>';
             }
        }
    }
?>