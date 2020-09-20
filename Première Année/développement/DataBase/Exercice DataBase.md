# Exercice sur les Bases de Données
##  Ennoncé :
Contexte professionnel :   

Dans le cadre du CFA INSTA, un professeur connu par un nom, un prénom et un diplôme, peut emprunter un matériel (ordinateur, vidéo projecteur, etc...) décrit par un numéro, une désignation, et une date d'achat et un état.
Le matériel peut être emprunter plusieurs fois. A chaque emprunt, on stocke la date de l'emprunt et la date prévu de retour. Un professeur assure une seule matière à une classe. Une classe est connu par un code, une désignation et une salle. Une matière est connue par un code et un libellé. Le professeur est affectée à une classe pour une matière et on enregistre l'année universitaire.  

Une classe prépare un diplôme, un diplôme est connu par un numéro et un libellé. Une callse est composé par plusieurs étudiants, connus par leur nom, prenoms, e-mails, adresse et date de naissance.

- Elaborer un MCD
- Elaborer le MLDR sous forme textuelle
- Installer la base de donnée sous MySQL
- Réaliser les requêtes suivantes :
  - Ajouter un professeur ben, oka, bac
  - Ajouter un professeur Launay, Fred, BTS
  - Ajouter une matière Français
  - Ajouter une matière Maths
  - Ajouter une matière Informatique
  - Ajouter diplome License, BTS SIO, Master
  - Ajouter Materiel Vidéos projecteur, 2018-05-15, neuf
  - Ajouter Materiel Ordinateur, 2017-01-02, en bon Etat
  - Ajouter Materiel imprimante, 2015-05-14, en mauvais Etat
  - Ajouter Classe Promo-193, salle 5 et promo 194 salle 3
  - Ajouter Etudiant :
    - Pierre Olivier, p@gmail.com, 20 rue du Paris, 2000-05-06
    - François Marc, f@gmail.com, 20 rue de Lyon, 2001-06-05
    - Marie France, m@gmail.com, 20 rue de Lille, 2002-02-02
  - Ajouter a Emprunter :
    - 2018-10-08, 2018-10-16
    - 2018-11-02, 2018-12-02
    - 2018-12-05, 2018-12-18
  - Ajouter a Affecter
    - 2018-2019
    - 2018-2019
    - 2018-2019

### Création du MCD

![MCD](/home/pixi/Documents/CFA/Informatique/base_données1.png)

### Création du MLDR

![MLD](/home/pixi/Documents/CFA/Informatique/base_donnéeMLD.png)

#### Version Textuelle

```
MLDR
Professeur(idprof,nom,prénom,diplôme)  
Classe(code, désignation, salle, NuméroDiplome#)  
Matiere(code, libelle)  
Materiel(numero, designation, date_achat, etat)  
Etudiant(idEtudiant, nom, prénom, mail, adresse, annee de naissance, code#)
diplôme(numero, libelle)

 ```

### MySQL Version

```sql
#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Professeur
#------------------------------------------------------------

CREATE TABLE Professeur(
        ID_Prof Int NOT NULL ,
        Nom     Varchar (50) NOT NULL ,
        Prenom  Varchar (50) NOT NULL ,
        Diplome Varchar (50) NOT NULL
	,CONSTRAINT Professeur_PK PRIMARY KEY (ID_Prof)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Materiel
#------------------------------------------------------------

CREATE TABLE Materiel(
        Numero      Int NOT NULL ,
        Designation Varchar (50) NOT NULL ,
        Date_Achat  Date NOT NULL ,
        Etat        Varchar (50) NOT NULL
	,CONSTRAINT Materiel_PK PRIMARY KEY (Numero)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Diplôme
#------------------------------------------------------------

CREATE TABLE Diplome(
        Numero  Int NOT NULL ,
        Libelle Varchar (50) NOT NULL
	,CONSTRAINT Diplome_PK PRIMARY KEY (Numero)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Classe
#------------------------------------------------------------

CREATE TABLE Classe(
        Code        Int NOT NULL ,
        Designation Varchar (50) NOT NULL ,
        Salle       Int NOT NULL ,
        Numero      Int NOT NULL
	,CONSTRAINT Classe_PK PRIMARY KEY (Code)

	,CONSTRAINT Classe_Diplome_FK FOREIGN KEY (Numero) REFERENCES Diplome(Numero)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Etudiant
#------------------------------------------------------------

CREATE TABLE Etudiant(
        ID_Etudiant       Int NOT NULL ,
        Nom               Varchar (50) NOT NULL ,
        Prenom            Varchar (50) NOT NULL ,
        Email             Varchar (50) NOT NULL ,
        Adresse           Varchar (50) NOT NULL ,
        Date_de_Naissance Date NOT NULL ,
        Code              Int NOT NULL
	,CONSTRAINT Etudiant_PK PRIMARY KEY (ID_Etudiant)

	,CONSTRAINT Etudiant_Classe_FK FOREIGN KEY (Code) REFERENCES Classe(Code)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Matière
#------------------------------------------------------------

CREATE TABLE Matiere(
        Code    Int NOT NULL ,
        Libelle Varchar (50) NOT NULL
	,CONSTRAINT Matiere_PK PRIMARY KEY (Code)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Emprunter
#------------------------------------------------------------

CREATE TABLE Emprunter(
        Numero       Int NOT NULL ,
        ID_Prof      Int NOT NULL ,
        Date_Emprunt Date NOT NULL ,
        Date_Retour  Date NOT NULL
	,CONSTRAINT Emprunter_PK PRIMARY KEY (Numero,ID_Prof)

	,CONSTRAINT Emprunter_Materiel_FK FOREIGN KEY (Numero) REFERENCES Materiel(Numero)
	,CONSTRAINT Emprunter_Professeur0_FK FOREIGN KEY (ID_Prof) REFERENCES Professeur(ID_Prof)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Affecter
#------------------------------------------------------------

CREATE TABLE Affecter(
        Code         Int NOT NULL ,
        ID_Prof      Int NOT NULL ,
        Code_Matiere Int NOT NULL ,
        Annee_Univ   Varchar (50) NOT NULL
	,CONSTRAINT Affecter_PK PRIMARY KEY (Code,ID_Prof,Code_Matiere)

	,CONSTRAINT Affecter_Classe_FK FOREIGN KEY (Code) REFERENCES Classe(Code)
	,CONSTRAINT Affecter_Professeur0_FK FOREIGN KEY (ID_Prof) REFERENCES Professeur(ID_Prof)
	,CONSTRAINT Affecter_Matiere1_FK FOREIGN KEY (Code_Matiere) REFERENCES Matiere(Code)
)ENGINE=InnoDB;

# -----------------------------------------------------------
# Instructions
# -----------------------------------------------------------

insert into Professeur values (null, "ben","oka","bac"), (null,"Launay","Fred","BTS");
insert into Matiere values (null, "français"), (null, "Maths"), (null,"Informatique");
insert into Diplome values (null, "bac"), (null,"BTS"), (null,"License");
insert into Materiel values (null, "ordinateur", "2017-01-02", "En bon etat"),
                            (null, "Vidéo Projecteur", "2018-05-15", "Neuf"),
                            (null, "imprimante", "2015-05-14", "En mauvais etat");
insert into Classe values (null, "Promo-193", "Salle-5",1), (null, "Promo-194", "Salle-3",1);
insert into Etudiant values (null, "Pierre","Olivier","p@gmail.com","20 rue de Paris","2000-05-06",2),
                            (null, "Francois","Marc","f@gmail.com","20 rue de Lyon","2001-06-05",2),
                            (null, "Marie","France","m@gmail.com","20 rue de Lille","2002-02-02",2);
insert into Emprunter values (1,1,"2018-10-08","2018-10-16"),
                             (2,1,"2018-11-02","2018-12-02"),
                             (1,2,"2018-12-05","2018-12-18");
insert into Affecter values (1,1,1,"2018-2019"),(1,1,2,"2018-2019"), (2,2,2,"2018-2019");
```
