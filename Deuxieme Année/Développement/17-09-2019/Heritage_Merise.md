# L'héritage dans Merise

## 1. Introduction :

Soit le contexte suivant :

Un étudiant connu par:
- son nom,
- prenom,
- adresse   

s'inscrit dans une classe identifiée par:
- un libelle
- une salle.

L'étudiant peut etre:
- initial
- alternant.

S'il est en initiale il paye un montant de scolarité. Dans le cas contraire, il est salarié dans une entreprise.

Critiques de ce modèle :
- Avantages : une seule table pour tous les étudiants, donc on peut afficher les étudiants avec une seule requête
- Inconvénient :
  - les montants des étudiants alternants seront initialisés à null
  - les id_entrprises cle's étrangères pour les étudiantsinitiaux seriont initialisés à null

L'affichage des étudiants initiaux ou alternants se fera par une requête sur le table Etudiants avec la sélection du champs : type_etudiant

Deuxièmeme modélidation : création de deux tables disctinctes
