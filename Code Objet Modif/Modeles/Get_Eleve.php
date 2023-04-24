<?php
class Eleve
{

    private $pdo;

    public function __construct()
    {
        $this->pdo = new Log_PDO();
    }

    public function getEleveByClasse($classe_id)
    {
        $resultats4 = $this->pdo->requete('SELECT NOM,PRENOM FROM Eleve WHERE ID_Classe=' . $classe_id);
        return $resultats4;
    }

    public function getEleveByID($eleve_id)
    {
        $resultats = $this->pdo->requete('SELECT NOM,PRENOM FROM Eleve WHERE ID_Eleve=' . $eleve_id);
        return $resultats;
    }


    public function getEleveNotPassed($classe_id,$matiere_ID) // Prend les Eleves par matiere et Classe selectionée 
    {
        $resultats = $this->pdo->requete('SELECT e.ID_ELEVE FROM Eleve e INNER JOIN Matiere_Eleve me ON e.ID_ELEVE = me.ID_ELEVE WHERE e.ID_Classe = '.$classe_id .' AND me.STATUT = 0 AND me.ID_matiere ='.$matiere_ID);
        return $resultats;

    }



    public function test($classe_id ){
        $resultats = $this->pdo->requete('SELECT ID_ELEVE FROM Eleve WHERE ID_Classe=' . $classe_id);
        return $resultats;
    }



    public function getEleveAbsent($classe_id, $matiere_ID)
    {
        $resultats2 = $this->pdo->requete('SELECT e.NOM, e.PRENOM, me.NOTE, e.ID_ELEVE  FROM Eleve e INNER JOIN Matiere_Eleve me ON e.ID_ELEVE = me.ID_ELEVE WHERE STATUT=2 and e.ID_Classe=' . $classe_id .' AND me.ID_matiere ='.$matiere_ID);
        return $resultats2;

    }

    public function getNameClasseByID($classe_id)
    {
        $resultats = $this->pdo->requete('SELECT NOM FROM Classe WHERE ID_Classe=' . $classe_id);
        return $resultats;
    }

    public function getClasse()
    { //Méthode pour faire une requête des Classes
        $resultats = $this->pdo->requete('SELECT * FROM CLasse');
        return $resultats;
    }

    public function setElevePasseD($Eleve_ID, $Matiere_ID)
    {
        $resultats3 = $this->pdo->requete('UPDATE matiere_eleve SET STATUT=1 WHERE ID_ELEVE=' . $Eleve_ID .' AND ID_matiere='. $Matiere_ID);
        return $resultats3;
    }

    public function setEleveAbsent($Eleve_ID,$Matiere_ID)
    {
        $resultats = $this->pdo->requete('UPDATE matiere_eleve SET STATUT=2 WHERE ID_ELEVE=' . $Eleve_ID .' AND ID_matiere='. $Matiere_ID);
        return $resultats;
    }

    public function getElevePassed($classe_id, $matiere_ID)
    {
        $resultats = $this->pdo->requete('SELECT e.NOM, e.PRENOM, me.NOTE FROM Eleve e INNER JOIN Matiere_Eleve me ON e.ID_ELEVE = me.ID_ELEVE WHERE STATUT=1 and e.ID_Classe='. $classe_id . ' AND me.ID_matiere ='.$matiere_ID);
        return $resultats;
    }

    public function reset($matiere_id)
    {
        $resultats = $this->pdo->requete('UPDATE matiere_eleve SET STATUT=0 AND NOTE=0 WHERE ID_matiere =' . $matiere_id);
        return $resultats;
    }
}
?>

<!-- SELECT e.ID_ELEVE FROM Eleve e INNER JOIN Matiere_Eleve me ON e.ID_ELEVE = me.ID_ELEVE WHERE e.ID_Classe = '.$classe_id .' AND me.STATUT = 0 AND me.ID_matiere ='.$matiere_ID -->