# Les Fichiers :
### Déclaration d'un fichier :
Algo :
```
nomfichier : fichier
```

C:
```
File * nomfichier;
```
### Ouverture

Algo :
```
nomfichier <- ouvrir (nomphysique, mode) mode : lecture, ecriture, ajout
```

C et PHP:
```C
nomfichier = fopen(nomphysique, mode);
```
Les modes sont : r, w, a;


### Fermeture :
algo :
```
fermeture(nomfichier);
```

C et PHP :
```C
fclose(nomfichier);
```

### Opérations de lecture :
Algo :
```
lire(nomfichier, nomvariable)
```

C et PHP :
```C
fpute, fputs, printf, fwrite
```

### Fin de fichier
Algo :
```
fin_fichier (nomfichier)
```

C et PHP :
```C
foef(nomfichier)
```


## Exercices :
### Exercice 1 :
ecrire un algo, c, php, qui permet de



**DM Lundi 23 septembre: Réalisation d'un jeu **

- Bataille navale : cinq bateaux, jeu avec l'ordinateur ou à deux joueurs, on peut sauvegarder une partie, on peut la reprendre

- Jeu MasterMind : cinq couleurs, jeu avec un ordinateur, 10 essais, sauvegarder une partie, reprise de la partie, niveau : couleur unique, ou couleur double

- Snake: 3 pommes à la fois, jeu avec l'ordinateur, soit avec l'ordinateur, longueur du snake limitée, traverse les parois, sauvegarder et reprise des parties

- jeux d'échec avec les pièces suivantes : reine, tour, fou, roi, soit avec l'ordinateur soit avec deux utilisateurs, sauvegarder et reprise de partie

**notes :**
  - en langage C avec une bibliothèque conio.c ou sdl avec dev c++
  - en langage PHP
  - obligatoirement utilisation de tableaux matrices et de procedures et fonctions
  - binome
  - integration dans le portfolio
  - gestion d'un timer de niveau
  - gestion des users avec score
