#include <stdio.h>
#include <stdlib.h>
/*
int puissance (int nb, int exp)
{
	int p, i;
	p = 1;
	for (i= 1; i<= exp; i++)
	{
		p = p * nb;
	}
	return p;
}
int main()
{
	int a,b,c;
	printf("Donner un nonbre : ");
	scanf("%d", &a);
	printf("Donnerun exposant : ");
	scanf("%d", &b);	
	
	c = puissance(a,b);
	printf("le resultat est de %d : ", c);
	system("pause");
	return 0;
}


void factoriel(int n)
{
	int i, f;
	f = 1;
	for (i= 1; i <= n; i++)
	{
		f = f+ i;
	}
	print("Le factoriel de %d," f);
	
}

int main()
{
	int nbr;
	printf("%d")
}

void afficher_tableau(int tab[], int taille)
{
	int i;
	printf("[");
	for(i= 0; i< taille; i++)
	{
		printf("%d", tab[i]);
	}
	printf("]");
}

int rechercher_valeur(int tab[], int taille, int valeur)
{
	int i, cpt;
	cpt = 0;
	for(i=0;i< taille; i++ )
	{
		if(tab[i] == valeur)
		{
			cpt = cpt ++;
		}
	}
	return cpt;
}

int main(){
    int taille;
    printf("donner taille");
    scanf("%d",&taille);
    int tab[taille];
    int i;
    for(i = 0;i<taille;i++){
        printf("Element %d\n",i );
        scanf("%d"&tab[i]);
    }
    afficher_tableau(tab,taille);
    float m = rechercher_valeur(tab[],taille);
    printf("la moyenne est %f\n",m );
    system("pause")
}
*/
void min_max (int tab[], int taille)
{
	int i;
	int max, min;
	max = tab[0];
	min = tab[0];
	
	for(i=0; i<taille; i++)
	{
		if(tab[i] > max)
		max = tab[i];
		if(tab[i] < min)
		min = tab[i];
	}
	printf("La valeur min est %d, la valeur max est %d : ", min, max);
}

int main()
{
	int taille;
	printf("Donner une taille : ");
	scanf("%d", &taille);
	int tab[taille];
	int i;
	for (i=0; i<taille; i++)
	{
		printf("Element %d")	
	}
}
