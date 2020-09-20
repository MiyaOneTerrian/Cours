# Cours SQL

## Base de données servant pour le cours
```sql
drop database if exists cfa;
create database cfa;
use cfa;
create table classe(
    idclasse int (5) not null auto_increment,
    nom varchar(50),
    salle varchar(50),
    primary key(idclasse)
);

insert into classe values (null,"promo 200","salle 5"),(null,"promo 201","salle 4");

create table etudiant(
    idetudiant int (5) not null auto_increment,
    nom varchar (50),
    prenom varchar (50),
    adresse varchar (100),
    idclasse int (5) not null,
    primary key (idetudiant),
    foreign key(idclasse) references classe (idclasse)
);

insert into etudiant values (null,"Raph","lukman","rue de paris",1), (null,"Bait","Anthony","rue de lyon",1),(null,"Sandri","Conrentin","rue de Lille",2);

create table professeur(
    idprofesseur int (5) not null auto_increment,
    nom varchar(50),
    prenom varchar (50),
    primary key (idprofesseur)
);

insert into professeur values (null,"Ben","Oka"), (null,"Fred","Launay");

create table enseigner(
    idprofesseur int(5) not null,
    idclasse int(5) not null,
    matiere varchar(50),
    nbheures int(5),
    primary key (idprofesseur,idclasse),
    foreign key (idprofesseur) references professeur (idprofesseur),
    foreign key (idclasse) references classe (idclasse)
);

insert into enseigner values (1,1,"info",8), (1,2,"info",2), (2,1,"anglais",6);
```
## Les Vues

Une vue est le résultat d'une requête de selection qu'on peut stocker sous forme d'une table non physique. La vue permet de réaliser des requêtes imbriquées.

### Syntaxe :
```sql
create view nom_vue as (la requete de selection);
drop view nom_vue;
```
### Exemple :
Créer une vue qui donne l'état suivant : nom etudiant, prenom etudiant, nom classe, salle de classe.

**Solution :**

```sql
create view liste_etu as (
  select e.nom as nom_etudiant, e.prenom as prenom_etudiant, c.nom as nom classe, c.salle
  from etudiant e, classe c
  where e.idclasse = c.idclasse
);
```

On peut executer les requêtes de séléction sur les vues :

```sql
select * from liste_etu;
```

Afficher le nombre d'étudiants par classe : requête sur la vue
```sql
select nom_classe,
count(nom_classe) as nb_etudiants
from liste_etu
group by nom_classe;
```

## Exercices

Réaliser les vues suivantes :

1. Afficher dans une vue : nom classe, salle, nom prof, prenom prof, matiere, nbheures
  - calculer le nombre de profs par classe
  - afficher le nombre d'heures de cours que dispose chaque classe
  - afficher le nombre d'heures total que enseigne chaque prof
  - Afficher le nombre de classes par professeur

Création de la vue :
```SQL
create view liste_prof as (
  select c.nom as nom_classe, c.salle, p.nom as nom_prof, p.prenom as prenom_prof, e.matiere, e.nbheures
  from classe c, professeur p, enseigner e
  where c.idclasse = e.idclasse and e.idprofesseur = p.idprofesseur
);
```

Requête 1 :
```sql
select nom_classe,
count(nom_prof) as nb_prof
from liste_prof
group by nom_classe;
```

Requête 2 :
```sql
select nom_classe, sum(nbheures) as total_heure
from liste_prof
group by nom_classe;
```

Requête 3 :
```sql
select nom_prof, prenom_prof,
sum(nbheures)
from liste_prof
group by (nom_prof);
```

Requête 4 :
```sql
select nom_prof, prenom_prof,
count(nom_classe) as nb_classe
from liste_prof
group by (nom_prof);

```
