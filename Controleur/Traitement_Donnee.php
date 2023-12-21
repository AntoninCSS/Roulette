<?php

class Traitement{


private $pdo;
private $Eleve;
private $Aleatoire;

private $SelectClasse;
private $reset;
private $SelectMatiere;
private $Matiere;
public function __construct(){
    $this->pdo = new Log_PDO();
    $this->Eleve = new Eleve();
    $this->Aleatoire = new Aleatoire();
    $this->SelectClasse = new SelectClasse();
    $this->reset = new Reset();
    $this->SelectMatiere= new SelectMatiere();
    $this->Matiere= new Matiere();
}

    public function Init(){
        if (isset($_POST['1'])) {
           $this->Matiere->ajouterNoteMatiere($_SESSION["nombreTire"], $_SESSION["SelectedMatiere"] ,"1");
           $this->Eleve->setElevePasseD($_SESSION["nombreTire"],$_SESSION["SelectedMatiere"]);
        };
        
        if (isset($_POST['2'])) { 
            $this->Matiere->ajouterNoteMatiere($_SESSION["nombreTire"], $_SESSION["SelectedMatiere"] ,"2");
            $this->Eleve->setElevePasseD($_SESSION["nombreTire"],$_SESSION["SelectedMatiere"]);
        };
        
        if (isset($_POST['3'])) { 
            $this->Matiere->ajouterNoteMatiere($_SESSION["nombreTire"], $_SESSION["SelectedMatiere"] ,"3");
            $this->Eleve->setElevePasseD($_SESSION["nombreTire"],$_SESSION["SelectedMatiere"]);
        };
        
        if (isset($_POST['A'])) { 
             $this->Eleve->setEleveAbsent($_SESSION["nombreTire"],$_SESSION["SelectedMatiere"]);
        };

        if (isset($_POST['Tirage'])){
            $this->Aleatoire->Tirage_Eleve();
            $this->Aleatoire->affiche();
            require_once '../Vue/Liste.php';
        };
        if (isset($_POST['TirageAbsent'])) {
            $this->Aleatoire->Tirage_Absent();
            $this->Aleatoire->affiche();
            require_once '../Vue/Liste.php';
        };

        if (isset($_POST['submit'])) {
            $this->SelectClasse->SelectedUpdate();

        }else {
                $_SESSION["MESSAGE"]= '<p class="Tirage">Tirage au sort !</p>';
        
        };
        if (isset($_POST['submitMatiere'])){
            $this->SelectMatiere->SelectedUpdateMatiere();
        };


        if (isset($_POST["Reset"])){
            $this->reset->Resets();
        };



    return;
}
}
?>