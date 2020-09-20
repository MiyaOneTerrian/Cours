# Série d'exercices

## Exercice 1
##### Ecrire une algo puis un programme en C qui permet de saisir 10 entiers dans un tableau et affiche la liste des nombres pairs puis la liste des nombres impairs.

Algorithme :

```Algo
algo : exo 1
déclaration
  tab: Tableau[1..10] de entier
  i: entier
Debut
  pour i allant de 1 à 10 faire
    afficher("Donner la valeur de la case numéro ",i,":")
    saisir  (tab[i])
  fin Pour

  afficher ("voici les éléments pairs")
  pour i allant de 1 à 10 faire
    si tab[1] % 2 = 0
      alors affichier (tab[i])
    fin si
  fin Pour

  afficher ("voici les éléments impaires")
  pour i allant de 1 à 10 faire
    si tab[i] % 2 != 0
      alors afficher (tab[i])
    fin si
  fin pour
fin exo1
```

En C :
```C
#include <stdio.h>
int main()
{
  int tab[10];
  int i;

  for(i=0; i<10, i++)
  {
    printf("Donner une valeur de la case %d :", i);
    scanf("%d",&tab[1]);
  }
  printf("Voici la liste des nombres pairs : ");
  for(i=0; i<10; i++)
  {
    if(tab[i]%2=0)
    printf("%d", tab[i]);
  }
  return 0;
}
```
