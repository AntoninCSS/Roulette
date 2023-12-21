<?php
class Matiere
{

    private $pdo;

    public function __construct()
    {
        $this->pdo = new Log_PDO();
    }

    public function ajouterNoteMatiere($Eleve_ID, $Matiere_ID, $note) {
        $resultats = $this->pdo->requete('UPDATE matiere_eleve SET NOTE='.$note.' WHERE ID_ELEVE=' . $Eleve_ID .' AND ID_matiere='. $Matiere_ID);
        return $resultats;
    }
    
    public function getMatiere() {
        $resultats = $this->pdo->requete('SELECT * FROM matiere');
        return $resultats;
    }

    public function getMatiereID($MatiereID) {
        $resultats = $this->pdo->requete('SELECT Nom_Matiere FROM Matiere WHERE ID_MATIERE =' . $MatiereID);
        return $resultats;
    }



}
?>