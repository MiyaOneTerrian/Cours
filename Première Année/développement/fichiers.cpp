/*
#include <stdio.h>
#include <stdlib.h>
int main(void)
{
    FILE* fSrc;
    FILE* fDest;
    char ligne[90];
 
    if ((fSrc = fopen("origine.txt", "r") == NULL))
    {
        return 1;
    }
 
    if ((fDest = fopen("destination.txt", "w")) == NULL)
    {
        fclose(fSrc);
        return 2;
    }
 
      fgets(ligne, 90, fSrc);
 
   while (!feof(fSrc))
 {
   fputs(ligne, fDest);
   fgets(ligne, 81, fSrc);
 }
 
    fclose(fDest);
    fclose(fSrc);
 
printf("\nLa copie est terminee.\n");
 
return 0;
 
}
*/

#include <stdio.h>
#include <stdlib.h>  

	int main()
	{
		FILE *s, *d;
		char nomS[20], nomD[20];
		char car;
		
		printf("Donner le nom du fichier source : ");
		scanf("%s", &nomS);
		printf("Donner le nom du fichier destination : ");
		scanf("%s", &nomD);
		
		s = fopen(nomS, "r");
		if(s == NULL)
		{
			printf("Copie impossible, source inexistante");
		}
		else
		{
			d= fopen(nomD, "w");
			while(!feof(s))
			{
				car = fgetc(s);
				fputc(car, d);
			}
			fclose(s);
			fclose(d);
			system ("notepad destination.txt");
		}
		return 0;
	}
