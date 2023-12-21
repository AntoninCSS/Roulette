<?php

//include
require_once '../Modeles/Get_Matiere.php';
require_once "../Modeles/Selection_Classe.php";
require_once '../Controleur/PDO.php';
require_once '../Modeles/Get_Eleve.php';
require_once '../Vue/Header.html';
require_once '../Vue/SelectCLasse.php';
require_once '../Vue/Tirage.html';
require_once '../Modeles/Aleatoire.php';
require_once '../Vue/Note.html';
require_once '../Controleur/Traitement_Donnee.php';
require_once '../Controleur/reset.php';
require_once '../Vue/SelectMatiere.php';
require_once '../Modeles/Selection_Matiere.php';


$initClass = New Traitement();
$thiIs = $initClass->Init();
    
?>