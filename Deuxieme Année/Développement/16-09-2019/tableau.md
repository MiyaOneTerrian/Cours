# Les tableaux
## Déclaration des tableaux

Algo :

```
nomTableau : tableau[1..taille] de type
```

C :
```c
type nomTableau;
```

## Acces à un élément :
```
nomTableau[indice] <- valeur
```

## Les algo élémentaires sur les vectuers :


###  Remplissage :
  ```
    pour i allant de 1 à taille faire
      afficher("donner un element : ")
      saisir(tab[i])
    fin pour
```

### Tri des éléments :
```
pour i allant de 1 a taille-1 faire
  pour j allant de i+1 a taille faire
    si tab[i] > tab[j]
      alors temp <- tab[i]
      tab[i] <- tab[j]
      tab[j] <- temp
    finsi
  finpour
finpour
```

Autres algos :
  - Recherche min et max
  - Calcul de la moyenne
  - Rechercher un élément

### Exercice 1 :
Ecrire un algo, prog C, dev php qui stocke dans un tableau 10 prix et détermine le prix min, max et le prix moyen.

#### Résolution :
Algo :

```
Algo: exo1
Déclaration :
  | tab : tableau[1..10] de reel
  | i : entier
  | min, max, moy : reel
Début :
  | Pour i allant de 1 à 10 faire
  | | afficher("Donner un prix : ")
  | | saisir(tab[i])
  | fin pour
  | min <- tab[1]
  | max <- tab[1]
  | moy <- ()
  | Pour i allant de 1 a 10 faire
  | | si tab[i]<min
  | | alors min <- tab[i]
  | fin si
  | si tab[i]>max
  | | alors max <- tab[i]
  | fin si
  | moy <- moy + tab[i]
  Fin Pour
  moy <- moy /10
  afficher("le prix moyen :, moy")
  afficher("le prix min :", min)
  afficher("le prix max: ", max)
```
C:

```C
#include <stdio.h>
int main()
{
    float prix[10];
    int i;
    float prixmax, prixmin, prixmoyen;

    for (i=0; i<10; i++)
    {
        printf("Donner le prix numero %d :",i);
        scanf("%f",&prix[i]);
    }
    prixmoyen = 0

    for (i=0; i<10; i++)
    {
        prixmoyen = prixmoyen + prix[i]
    }
    prixmoyen = prixmoyen/10;
    printf("Le prix moyen est de : %f/n",prixmoyen);

    prixmin=prix[0];
    prixmax=prix[0];

    for (i=0; i<10; i++)
    {
        if(prix[i] < prixmin)
        {
            prixmin=prix[i];
        }
    }

    for (i=0; i<10; i++)
    {
        if(prix[i] > prixmax)
        {
            prixmax = prix[i]
        }
    }

    printf("Le prix max est %f/n",prixmax);
    printf("Le prix min est %f/n",prixmin);

    return0;
}
```

PHP :
```PHP
<html>
  <head>
    <title>Min max Moy </title>
    <meta charset="utf-8" />
  <head>
  <body>
    <from method="POST" action="tableau.php">
      Les Prix :
      <input type="submit" name="Rechercher" value="Rechercher"
    </form>
    <?php
      if(isset($_POST['rechercher'])) {
        // explode sur la saisir des prix séparés par ;
        $tab = explode(";", $_POST['tab']);
        $min = $tab[0];
        $max = $tab[0];
        $moy = 0;

        for($i=0; $i < cout($tab); $i++) {
          if($tab[$i] < $min) $min = $tab[$i];
          if($tab[$i] > $min) $min = $tab[$i];
          $moy = $moy + $tab[$i];
      }

      $moy /= count($tab);

      printf("min est egale a : %f", $min);
      printf("max est egale a : %f", $max);
      printf("moyenne est egale a : %f", $moy);
      }
    ?>
  </body>
</html>
```

### Exercice 2 :
Ecrire un algo, prog C, Dev PHP qui stocke dans un tableau 10 entiers, les tri en ordre décroissant et détermine la médiane = (min + max)/2
