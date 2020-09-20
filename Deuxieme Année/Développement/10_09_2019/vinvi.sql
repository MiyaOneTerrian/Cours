#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
create database vinci;
use vinci;

#------------------------------------------------------------
# Table: Ville
#------------------------------------------------------------

CREATE TABLE Ville(
        id_ville    Int  Auto_increment  NOT NULL ,
        code_postal Int NOT NULL ,
        libelle     Varchar (50) NOT NULL
);


#------------------------------------------------------------
# Table: Parking
#------------------------------------------------------------

CREATE TABLE Parking(
        id_parking      Int  Auto_increment  NOT NULL ,
        Numero          Int NOT NULL ,
        libelle         Varchar (50) NOT NULL ,
        Geolocalisation Varchar (50) NOT NULL ,
        Capacite        Int NOT NULL ,
        id_ville        Int NOT NULL
          FOREIGN KEY (id_ville) REFERENCES Ville(id_ville)
);
#------------------------------------------------------------
# Table: Etage
#------------------------------------------------------------

CREATE TABLE Etage(
        id_etage      Int  Auto_increment  NOT NULL ,
        numero        Int NOT NULL ,
        lettre_indent Varchar (50) NOT NULL ,
        capacite      Int NOT NULL ,
        id_parking    Int NOT NULL,
        FOREIGN KEY (id_parking) REFERENCES Parking(id_parking)
);


#------------------------------------------------------------
# Table: Type de Place
#------------------------------------------------------------

CREATE TABLE Type_de_Place(
        id_type Int  Auto_increment  NOT NULL ,
        libelle Varchar (50) NOT NULL,
);


#------------------------------------------------------------
# Table: Places
#------------------------------------------------------------

CREATE TABLE Places(
        Numero   Int  Auto_increment  NOT NULL ,
        couleur  Varchar (50) NOT NULL ,
        id_etage Int NOT NULL ,
        id_type  Int NOT NULL,
           FOREIGN KEY (id_etage) REFERENCES Etage(id_etage),
         FOREIGN KEY (id_type) REFERENCES Type_de_Place(id_type)
);


#------------------------------------------------------------
# Table: Client
#------------------------------------------------------------

CREATE TABLE Client(
        id_client Int  Auto_increment  NOT NULL ,
        nom       Varchar (50) NOT NULL ,
        prenom    Varchar (50) NOT NULL ,
        adresse   Varchar (50) NOT NULL ,
        email     Varchar (50) NOT NULL ,
        tel       Int NOT NULL
);
#------------------------------------------------------------
# Table: Abonnement
#------------------------------------------------------------

CREATE TABLE Abonnement(
        id_abonnement Int  Auto_increment  NOT NULL ,
        date_debut    Date NOT NULL ,
        date_fin      Date NOT NULL ,
        montant       Float NOT NULL ,
        id_client     Int NOT NULL ,
        Numero        Int NOT NULL,
        FOREIGN KEY (id_client) REFERENCES Client(id_client)
          FOREIGN KEY (Numero) REFERENCES Places(Numero)
);


#------------------------------------------------------------
# Table: Occuper
#------------------------------------------------------------

CREATE TABLE Occuper(
        Numero    Int NOT NULL ,
        id_client Int NOT NULL ,
        duree     Float NOT NULL ,
        tarif     Float NOT NULL,
          FOREIGN KEY (Numero) REFERENCES Places(Numero)
          FOREIGN KEY (id_client) REFERENCES Client(id_client)
);
