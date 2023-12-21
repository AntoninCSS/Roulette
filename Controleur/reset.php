<?php

class Reset{

    public function Resets(){

        $get_Eleve = new Eleve();
        $FnialReset = $get_Eleve->reset($_SESSION["SelectedMatiere"]);
        echo "<p class=\"Done\"> Done !</p>";
        return;
    } 
}


?>