# Les Algos de tri
## Algos de permutation
### Principe :
On parcour le tableau case par case et pour chaque case on parcour le reste des éléments. Si deux éléments ne sont pas dans l'ordre croissant, on les permute.

```
Algo : tri_par_permutation
Declaration :
    tab : tableau[1..10] de entier
    i, j, temp : entier
Début :
    // on suppose le tableau rempli
Pour i allant de 1 à 9 faire
    Pour j allant de i+1 à 10 faire
        Si tab[i] > tab[j]
            alors temp ← tab[i]
                     tab[i] ← tab[j]
                     tab[j] ← temp
        Fin si
    Fin pour
Fin pour
```
## Tri par bulle
on réalise autant de parcours que c’est nécessaire pour trier le tableau a chaque parcours on compare deux éléments consécutif si il ne sont pas  dans l’ordre on les permute   
a chaque parcours on pousse les grandes valeurs a la fin du tableau alors que les petits remonte en surface

```

```
