
<?php
session_start(); // demare la session 
include ("../Controleur/Log_BDO.php"); //PDO Connexions
include ("../Modeles/Header.html"); //Header
include ("../Modeles/Liste-Classe.php"); //Select 
include ("../Modeles/Aleatoire.php"); //Input de l'aléatoire
include ("../Modeles/Note.php"); // A | 1 | 2 | 3 
include ("../Modeles/Clear.php"); // Clear Classe
include("../Controleur/Reset.php"); // CLear
include("../Modeles/eleve_Passed.php"); // Liste eleve passer
include("../Modeles/eleve_Absent.php"); // Liste eleve Absent
?>