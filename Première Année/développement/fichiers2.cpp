/*
Ecrire un programme qui permet d'editer une facture composée de plusieurs produits selon le format suivant :
nom ...		prenom ...
date  facture
nbr produits 3

Designation		prix		quantite
...				...			....

Total à Payer ...
*/
# include <stdio.h>
int main()
{
	FILE * fact ;
	char nomFact[20];
	
	char nom[20],prenom[20], date[20], designation[20];
	int nbrproduits, qte, i;
	float prix, total;
	
	printf("Donner le nom du fichier : ");
	scanf("%s", &nomFact);
	fact = fopen(nomFact, "w");
	
	if(fact== NULL)
	{
		printf("Impossible de créer le fichier");
	}
	else
	{
		printf("Donner le nom du client : ");
		scanf("%s", &nom);
		printf("Donner le prenom du client : ");
		scanf("%s", &prenom);
		fprintf(fact, "Nom Client : %s \t \t Prénom Client : %s\n", nom, prenom);
		printf("Donner la date de la facture : ");
		scanf("%s", &date);
		fprintf(fact, "Date de la facture : %s \n", date);
		printf("Donner le nombre de produits : ");
		scanf("%d", &nbrproduits);
		fprintf(fact, "Le Nombre de produits est de : %d\n", nbrproduits);
		
		fprintf(fact, "\n Désignation \t Prix Unitaire \t Quantité\n");
		total = 0;
	
		for(i= 1; i<= nbrproduits; i++)
		{
			printf("Donner la désignation du produit N°%d : ", i);
			scanf("%s", &designation);
			
			printf("Donner le prix unitaire du produit N°%d : ", i);
			scanf("%f", &prix);
			
			printf("Donner la quantité du produit N°%d : ", i);
			scanf("%d", &qte);
			
			fprintf(fact, " %s \t %f \t %d \n", designation, prix, qte);
			
			total= total + qte * prix;
			
			fprintf(fact, "Le total à payer est de : %f", total);
			fclose(fact);
		}
		return 0;		
	}
}
