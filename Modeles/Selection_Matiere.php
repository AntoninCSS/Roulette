<?php

class SelectMatiere{
    public function SelectedUpdateMatiere():void{ //Si le select est activé
        if (isset($_POST['submitMatiere'])) {
            if (!empty($_POST['Matiere'])) { //si le Select n'est pas vide
                $_SESSION["SelectedMatiere"] = $_POST['Matiere']; // On stocke la Classe selectioné dans la Session 
                echo '<div class="Matiere">';
                
                $get_ELeve = new Matiere();
                $get_Matiere = $get_ELeve-> getMatiereID($_SESSION["SelectedMatiere"]);
                echo "La matière selectioné est : ".$get_Matiere[0]["Nom_Matiere"]; 
                
                echo '</div>';
        
            } else {
                echo '<div class="Eleve"> <p>S\'il vous plaît veuillez choisir une classe.</p>  </div>';
            }
        }
    }
}
?>