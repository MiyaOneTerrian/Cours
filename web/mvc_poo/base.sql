drop database if exists base ;
create database base;
use base ;

create table categorie (
	idcategorie int(5) not null auto_increment,
	libelle varchar(50),
	primary key(idcategorie)
	);

insert into categorie values (null, "Alimentaire"),
(null, "Bricolage"), (null,"Santé");

create table produit (
	idproduit int(5) not null auto_increment,
	designation varchar(50),
	prix float (5.2),
	quantite int(5),
	idcategorie int(5) not null,
	primary key (idproduit),
	foreign key (idcategorie) references categorie(idcategorie)
);

insert into produit values
(null, "Chocolat",1.20, 15, 1),
(null, "Pain", 0.80, 20, 1),
(null, "Beurre", 1.50,12, 1),
(null, "Confiture", 2.30, 13, 1);

create table utilisateur(
	iduser int(5) not null auto_increment,
	login varchar(50),
	mdp varchar(50),
	nom varchar(50),
	prenom varchar(50),
	primary key (iduser)
);
insert into utilisateur values (null, "admin", "admin", "Administrateur", "Administrateur");







