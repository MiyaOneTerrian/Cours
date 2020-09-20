# Algebre de Boole.

## Addition :

En algèbre de Boole, le signe __+__ se dit __"ou"__.   
0 + 0 = 0 ==> __0__ est l'élément __neutre__
0 + 1 = 1
1 + 0 = 1 ==> __1__ est l'élément __abstrait__
1 + 1 = 1

## Multiplication :

en algèbre de Boole, le signe __x__ se lit __ET__.

0 x 0 = 0 ==> 1 est neutre
0 x 1 = 0
1 x 0 = 0 ==> 0 est absorbant
1 x 1 = 1

## Regles de calcul :

### Lois de DeMorgan :

a +  b = a . b avec un trait suscrit au dessus des lettres

a . b = a + b avec un trait suscrit au dessus des lettres

#### Involution supplémentaires :

a (double trait suscrit) = a

#### Absorbtion :

a + ab = a.1 + a.b    
       = a.(1+b)  
       = a.1  
       = a  
Absorbtion de b par a

#### Tiers exclu et non-contradiction :

a + a(trait suscrit) = 1   
a . a(trait suscrit) = 0

#### Consensus

a + a(trait suscrit)b = a + b

#### Idempotence :

a + a = a  
a . a = a

## Diagramme de Karnaugh à 3 varaibles :
! D'une colone à sa voisine, on ne doit changer l'état que d'une seule variable !

1 case : Produit fondamentale de trois varaibles.
Exemple : la case rouge corespond à l'expression : ab|c  

2 cases voisines : produit de 2 varaiables
Exemple : regroupement de la verte et de la rouge : conduit à l'expression : ac...

ab|c + abc = ac(b|+b) = ac.1 = ac
