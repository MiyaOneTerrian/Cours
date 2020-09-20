DROP DATABASE IF EXISTS juin;
CREATE DATABASE juin;
USE juin;

CREATE TABLE utilisateur (
  iduser INT(5) NOT NULL AUTO_INCREMENT,
  email VARCHAR(50) NOT NULL,
  mdp VARCHAR(50) NOT NULL,
  nom VARCHAR(50),
  prenom VARCHAR(50),
  statut ENUM('initial', 'alternant'),
  PRIMARY KEY (iduser)
);

CREATE TABLE grainSel (
  nb VARCHAR(255) NOT NULL,
  PRIMARY KEY(nb)
);

INSERT INTO grainSel VALUES("123456789001239405069708123456789001239405069708123456789001239405069708123456789001239405069708123456789001239405069708123456789001239405069708123456789001239405069708123456789001239405069708123456789001239405069708");

set @nbsel = 0; /* initialisation et declaration d'une variable sql */
SELECT nb INTO @nbsel FROM grainSel;

INSERT INTO utilisateur VALUES(NULL, "a@gmail.com", md5(CONCAT("123", @nbsel)), "Paul", "Olivier", "initial");
INSERT INTO utilisateur VALUES(NULL, "b@gmail.com", md5(CONCAT("456", @nbsel)), "Jean", "Moutarde", "initial");
INSERT INTO utilisateur VALUES(NULL, "c@gmail.com", md5(CONCAT("789", @nbsel)), "Michel", "Mayo", "initial");
