---------------------------------------------------------- Creation Database ----------------------------------------------

DROP DATABASE IF EXISTS base_04_07;
CREATE DATABASE base_04_07;
USE base_04_07;

---------------------------------------------------------- Creation Table ----------------------------------------------

CREATE TABLE professeur (
  idprofesseur INT NOT NULL AUTO_INCREMENT,
  nom VARCHAR(50),
  prenom VARCHAR(50),
  dateEmbauche DATE,
  PRIMARY KEY(idprofesseur)
);

CREATE TABLE classe (
  idclasse INT NOT NULL AUTO_INCREMENT,
  nom VARCHAR(50),
  salle VARCHAR(50),
  diplome VARCHAR(50),
  PRIMARY KEY(idclasse)
);

CREATE TABLE cours (
  idcours INT NOT NULL AUTO_INCREMENT,
  designation VARCHAR(50),
  coef INT,
  PRIMARY KEY(idcours)
);

CREATE TABLE materiel (
  idmateriel INT NOT NULL AUTO_INCREMENT,
  designation VARCHAR(50),
  dateAchat DATE,
  montant FLOAT,
  PRIMARY KEY(idmateriel)
);

CREATE TABLE emprunter (
  idprofesseur INT(5) NOT NULL,
  idmateriel INT(5) NOT NULL,
  dateEmprunt DATE,
  heureEmprunt TIME,
  rapport TEXT,
  PRIMARY KEY(idprofesseur, idmateriel, dateEmprunt),
  FOREIGN KEY(idprofesseur) REFERENCES professeur(idprofesseur),
  FOREIGN KEY(idmateriel) REFERENCES materiel(idmateriel)
);

CREATE TABLE assurer (
  idprofesseur INT(5) NOT NULL,
  idclasse INT(5) NOT NULL,
  idcours INT(5) NOT NULL,
  annee VARCHAR(50),
  PRIMARY KEY(idprofesseur, idclasse, idcours),
  FOREIGN KEY(idprofesseur) REFERENCES professeur(idprofesseur),
  FOREIGN KEY(idclasse) REFERENCES classe(idclasse),
  FOREIGN KEY(idcours) REFERENCES cours(idcours)
);

---------------------------------------------------------- IMnsertion Values ----------------------------------------------

INSERT INTO professeur VALUES (null, "Ben", "Oka", "2000-12-12"), (null, "Aul", "Fred", "2015-02-02");
INSERT INTO classe VALUES (null, "Promo-194", "Salle 5", "BTS"), (null, "Promo-195", "Salle 6", "BTS");
INSERT INTO materiel VALUES (null, "ordinateur", "2018-01-01", 500), (null, "videoprojecteur", "2017-01-05", 1000), (null, "ordinateur", "2017-01-05" 700);
INSERT INTO cours VALUES (null, "Info", 5), (null, "Anglais", 2), (null, "PPE", 4);
INSERT INTO emprunter VALUES (1,1,"2019-05-04", "9:00", "RAS"), (1,1,"2019-07-05","9:00", "RAS"),(2,1, "2019-05-04", "11:30", "Problem de Connexion"), (2,2, "2019-05-09", "11:30", "RAS");
INSERT INTO assurer VALUES (1,1,1, "2018-2019"), (1,1,2, "2018-2019"), (1,2,2, "2018-2019");

---------------------------------------------------------- Requêtes Simples ----------------------------------------------
/* Premières requêtes sans jointures :
    - Quels sont les materiels achetés en 2018
    - Quels sont les professeurs embauchés en février 2015
    - Quel est le coef le plus élevé des cours enseignés
    - Quel est le montant global des investissements en materiel
    - Quelles sont les classes qui préparent un diplome en BTS
    - Combien le cfa dispose-t-il de materiel
*/
SELECT * FROM materiel WHERE YEAR(dateAchat)="2018";
SELECT * FROM professeur WHERE YEAR(dateEmbauche)="2015" AND MONTH(dateEmbauche)="02";
SELECT MAX(coef) AS coef_eleve FROM cours;
SELECT SUM(montant) as investissements from materiels;
SELECT * FROM classe WHERE diplome="BTS";
SELECT COUNT(*) as nbmateriel from materiel;


---------------------------------------------------------- Requêtes Modif ----------------------------------------------
/* Requêtes avec Modification :
    - Ajouter à la table professeur le champ adresse de type VARCHAR.
    - Aouter à la table professeur le champ status de type BOOLEAN.
    - Modifier les données des professeurs :
        - M. Ben Oka : habite a 2, rue de Lyon, 75000 Paris, il est un prof externe.
        - M. Aul Fred: habite au 3, rue de Lille, 93000 Saint-Denis, elle est prof internet.
*/
ALTER TABLE professeur ADD adresse VARCHAR(100);
ALTER TABLE professeur ADD status BOOLEAN;
UPDATE professeur SET adresse="2 rue de Lyon 75000 Paris", status=FALSE WHERE idprofesseur=1;
UPDATE professeur SET adresse="3 rue de Lille 93000 Saint-Denis", status=TRUE WHERE idprofesseur=2;

---------------------------------------------------------- Requêtes Jointures ----------------------------------------------
/*Requêtes Jointures :
    - Quels sont les professeurs nom et prenom aui ont emprunter des materiels en mai 2019
    - Quels sont les professeurs (nom et prenom) qui empruntent des ordinateurs
    - Quels sont les professeurs (nom et prenom) qui donnent des cours durant 1 annee 2018-2019
    - Quels sont les professeurs qui donnent des cours aux classes de BTS
    - Quels sont les professeurs(nom et prenom) de la classe Promo 194 durant l'année "2018-2019"

*/

SELECT p.nom, p.prenom, FROM professeur p, emprunter e WHERE e.idprofesseur = p.idprofesseur AND YEAR(dateEmprunt) = "2019" AND MONTH(dateEmprunt) = "05";
SELECT p.nom, p.prenom FROM professeur p, emprunter e, materiel m WHERE p.idprofesseur = p.idprofesseur AND e.idmateriel = m.idmateriel AND m.designation="ordinateur";
SELECT p.nom, p.prenom FROM professeur p, assurer a WHERE a.idprofesseur = p.idprofesseur AND a.annee = "2018-2019";
SELECT p.nom, p.prenom FROM professeur p, classe c, assurer a WHERE a.idprofesseur = p.idprofesseur AND a.idclasse = c.idclasse AND c.diplome = "BTS";
SELECT p.nom, p.prenom FROM professeur p, classe c, assurer a WHERE a.idprofesseur = p.idprofesseur AND a.idclasse = C.idclasse AND c.nom = "Promo-194" AND annee = "2018-2019";
