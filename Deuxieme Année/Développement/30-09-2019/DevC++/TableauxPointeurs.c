#include <stdio.h>
#include <stdlib.h>

// ___________________ Gestion des tableaux avec des pointeurs ___________________ //

// les signatures des procédures et des fonctions //

// le programme principale //

int * saisir_tab(int); // recoit la taille du tab et renvoi un pointeur  tableau
void afficher_tab(int *, int); // recoit un tableau et une taille et affiche ses elements
void min_max(int*, int, int*, int*); // recoit un tableau et une taille et renvoi en sorti un min et un max

int main(){
	int choix;
	int *t; // tableau de travail
	int nb; // nombre d'elements
	
	do {
		system("cls");
		printf("\n\t\t _____________ MENU GESTION _____________");
		printf("\n\t\t 1- saisir les elements");
		printf("\n\t\t 2- Afficher les elements");
		printf("\n\t\t 3- Min et Max du tableau");
		printf("\n\t\t 4- Moyenne des elements");
		printf("\n\t\t 5- Occurence d'un element'");
		printf("\n\t\t 6- Trier un tableau");
		printf("\n\t\t 0- Quitter");
		printf("\n\t\t ________________________________________");
		printf("\n\t\t Votre Choix : ");
		scanf("%d", &choix);
		switch(choix) {
			case 1 : printf("\n\t\t Donner le nombre d'éléments : ");
			scanf("%d", &nb);
			// Appel de la fonction saisir_tab
			t = saisir_tab(nb);
			break;
			case 2 : afficher_tab(t, nb);
			break;
			case 3 : {
				int mn, mx;
				min_max(t, nb, &mn, &mx);
				printf("\n\t\t L'élément max est : %d", mx);
				printf("\n\t\t L'élément min est : %d", mn);
			} break;
		}
		system("pause");
		}
		while (choix != 0);
}

// la réalisation des procédures et des fonctions
int * saisir_tab(int taille) {
	int * tab; // pointeur de tableau
	// allocation de la memoire centrale avec le nombre d'elements
	tab = (int *)malloc(sizeof(int) * taille);
	// saisie des elements avec un parcours pointeur :
	int *ptr;
	for(ptr = tab; ptr < tab + taille; ptr++) {
		printf("\n\t\t Donner element %d : ", ptr-tab);
		scanf("%d", ptr);
	}
	
	// retourne le pointeur tab sur le tableau cree
	return tab;
}

void afficher_tab(int *tab, int taille) {
	int *ptr;
	printf("\n\t\t ____________ Liste des elements du tableau _______________");
	for(ptr = tab; ptr < tab + taille; ptr ++) {
		printf("\n\t\element %d: %d", ptr-tab, *ptr);
	}
}

void min_max(int *tab, int taille, int *min, int *max) {
	*min = tab[0];
	*max = tab[0];
	int *ptr;
	for(ptr = tab; ptr <  tab + taille; ptr ++){
		if(*min > *ptr) *min = *ptr;
		if(*max < *ptr) *max = *ptr;
	}
}


