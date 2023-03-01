CREATE TABLE Classe(
 NOM VARCHAR(255),
 ID_Classe INTEGER NOT NULL AUTO_INCREMENT,
 PRIMARY KEY (ID_Classe)
);


CREATE TABLE Eleve(
 NOM VARCHAR(255),
 PRENOM VARCHAR(255),
 STATUT int(2) NOT NULL,
 NOTE int(3) NOT NULL,
 ID_Classe int NOT NULL,
 ID_ELEVE INTEGER NOT NULL AUTO_INCREMENT,
 PRIMARY KEY (ID_ELEVE),
 FOREIGN KEY (ID_Classe) REFERENCES Classe(ID_Classe)
);