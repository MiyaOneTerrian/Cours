DROP DATABASE IF EXISTS alternance;
CREATE DATABASE alternance;
USE alternance;

CREATE TABLE etudiant (
  idetudiant INT(5) NOT NULL AUTO_INCREMENT,
  nom VARCHAR(50),
  prenom VARCHAR(50),
  email VARCHAR(50),
  addresse VARCHAR(50),
  PRIMARY KEY (idetudiant)
);

CREATE TABLE entreprise (
  identreprise INT(5) NOT NULL AUTO_INCREMENT,
  nom VARCHAR(50),
  status VARCHAR(50),
  addresse VARCHAR(50),
  PRIMARY KEY (identreprise)
);

CREATE TABLE alternance (
  idalternance INT(5) NOT NULL AUTO_INCREMENT,
  datedebut DATE,
  datefin DATE,
  typecontrat VARCHAR(50),
  idetudiant INT(5) NOT NULL,
  identreprise INT(5) NOT NULL,
  PRIMARY KEY (idalternance),
  FOREIGN KEY (idetudiant) REFERENCES etudiant(idetudiant),
  FOREIGN KEY (identreprise) REFERENCES entreprise(identreprise)
);

INSERT INTO etudiant VALUES
  (NULL, "Corentin", "Myriam", "a@gmail.com", "Rue de Paris"),
  (NULL, "Pierre", "Stafanie", "s@gmail.com", "Rue de Lyon");

INSERT INTO entreprise VALUES
  (NULL, "SNCF", "public", "Rue de Lille"),
  (NULL, "BNP", "Prive", "Rue de Dijon");

INSERT INTO alternance VALUES
  (NULL, "2019-09-01", "2021-09-01", "pro", 1, 1),
  (NULL, "2019-10-05", "2021-10-05", "apprentissage", 2, 2);
