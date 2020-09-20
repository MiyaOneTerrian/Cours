# include <stdio.h>
/* ecrire un prog en C qui stock dans un tableau dix prix et affiche le prix max,min,moyen
int main()
{
	float prix[10];
	int i;
	float prixmax, prixmoyen, prixmin;

	//algo de la saisie des prix
	for(i=0;i < 10; i++)
	{
		printf("Donner le prix numero i %d :", i);
		scanf("%f", &prix[i]);
	}
	//calculer le prix moyen : additionner tous les prix et diviser par le nombre de prix
	prixmoyen = 0;
	for(i=0; i < 10; i++)
	{
		prixmoyen = prixmoyen + prix[i];
	}
	prixmoyen = prixmoyen/10;
		printf("Le prix moyen est de : %f\n", prixmoyen);

		//determiner le prix min et le prix max:
		prixmin = prix[0];
		prixmax = prix[0];

		for(i=0; i<10; i++)
		{
			if(prix[i]<prixmin)
			{
			prixmin = prix[i];
			}
			if(prix[i]>prixmax)
			{
				prixmax = prix[i];
			}
		}
	printf("le prix min est de :%f\n", prixmin);
	printf("le prix max est de : %f\n", prixmax);
	
	return 0;
}
*/
/* Ecrire un prog qui stock dans un tableau dix entiers, demande une valeur et affiche le nombre d'apparition de la valeur dans le tableau
int main()
{
	// Déclaration des variables
	int tab[10];
	int i, valeur, apparition;
	// Saisie des valeurs dans le tableau
	for(i=0; i<10; i++)
	{
		printf("Donner un entier numéro %d :", i);
		scanf("%d", &tab[i]);
	}
	
	// Saisie de la valeur
	printf("Donner la valeur de l'entrée à rechercher : %d", valeur);
	scanf("%d", &valeur);
	apparition = 0;
	for(i=0; i<10; i++)
	{
		// demande de la valeur
		// recherche de la valeur dans le tableau
		if(tab[i]==valeur)
		{
			apparition = apparition+1;
		}

	}
	printf("La valeur apparait %d de fois.", apparition);
	
	return 0;
	
}
*/

/*  ecrire un prog qui permet de stocker dans un tableau 10 prix et saisir un seuil min, max et determin le nombre de prix compris entre ces deux seuils*/
int main()
{
    float prix[10];
    int i;
    int valeur;
    float max,min;

    for (i = 0;i<10;i++){
        printf("donner le prix numero %d:",i);
        scanf("%f", &prix[i]);
    }

    printf("donner le seuil max ",max);
    scanf("%f",&max);

    printf("donner le seuil min ",min);
    scanf("%f",&min);

    valeur = 0;
    for(i = 0; i < 10; i++){
        if(prix[i]>=min && prix[i]<=max)
            valeur= valeur + 1;
    }
    printf("le nombre de prix entre  les seuil est %d\n ", valeur);
    return 0;
}
