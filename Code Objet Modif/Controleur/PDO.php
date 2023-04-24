<?php

class Log_PDO {
   private $pdo;

   private $servername;
   private $username;
   private $password;
   private $BDDname;



   public function __construct() {

   $servername = $this->servername = 'localhost';
   $username = $this->username = 'RouletteAdmin';
   $password = $this->password = '1234';
   $BDDname = $this->BDDname = 'Roulette';

    try {
        $this->pdo = new PDO("mysql:host=$servername;dbname=$BDDname",$username, $password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Erreur de connexion à la base de données : " . $e->getMessage();
        exit();
    }
}

   public function requete($requete, $params = array()) {
    $stmt = $this->pdo->prepare($requete);
    $stmt->execute($params);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function deconnexion() {
    $this->pdo = null;
}

}
?>