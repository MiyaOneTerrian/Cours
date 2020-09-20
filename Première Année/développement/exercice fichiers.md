# Exemple :
## Ecrire un algo puis un prog qui permet d'afficher à l'écran le contenu d'un fichier texte.

```algo
Algo : afficher_fichier
Déclaration
  f : fichier
  nomf : chaine
  car : caractère
Début
  afficher ("Donner votre nom de fichier")
  saisir (nomf)
  f <-- ouvir (nomf, "lecture")
  si f = NULL
    alors afficher ("fichier inexistant")
    sinon
      tant que fin_fichier(f) = faux faire
        lire(f, car)
        afficher(car)
      fin tant que
  fermer(f)
  fin si
fin afficher_fichier
```
Traduction en C
```C
# include <stdio.h>
int main()
{
  FILE * f;
  char nomf[20];
  char car;
  printf("Donner le nom du fichier à afficher : ");
  scanf("%s", &nomf)
  f = fopen(nomf, "r");
  if (f==NULL)
  {
    printf("fichier inexistant");
  }
  else
  {
    while ( ! foef(f))
    {
      car = fgetc(f);
      printf("%c", car);
    }
    fclose(f);
  }
  return 0;
}
```
