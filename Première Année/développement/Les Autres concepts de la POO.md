# III. Les autres concepts de la POO

## 1. La composition de classes

Une classe peut contenir comme attributs des instances d'autres classes créant des relations de composition, contenus-contenants, entre les classes.  
Ces relations sont de deux types :
  1. Relation 1-1 :  
Une relation classe B est composée d'une seule instance de la classe A.

Syntax en Java :
  ```java
  class A (...) {

  };

  class B( private A uneInstanceA; ...)  {

  };

```

Syntax en PHP :
```php
class A(...) {

};
class B( private $uneInstanceA; ...) {

};
```
Représentation en UML : méthode de modélisation des classes.

  2. Relation 1-N ou bien 1-* :  
Une classe B est composée d'une ou plusieurs instances de la classe A.  
La cardinalité N ou bien * sera placé du côté contenu, classe inférieure, la cardinalité 1 sera placé du côté contenant, classe supérieure.   
Donc les cardinalités en UML sont inversées par rapport aux cardinalités MCD Merise.

Exemple :   
Une voiture est composée d'une ou plusieurs roues :

La Modelisation de la relation 1-N en PHP se fait par des conteneurs et des tableaux vecteurs ou des tableaux associatifs (dictionnaires)

Exemple :

```PHP
  class Roue (...) {  
  }
  class Voiture {
    private $lesRoues;
    public function __construct () {
      $this->lesRoues - array();
    }
  }
```

La réalisation en Java de la relation 1-N par des conteneurs comme :

Tableaux vecteurs : Tableau standard, static     
ArrayList : tableau dynamique   
LinkedList : Liste dynamique
HashMap : liste dynamique sous forme de tableau aassociatif avec clé et valeurs.


Exemple de réalisation :

Gestion d'une maternelle :
Réaliser une modélisation du systeme d'information d'une maternelle composée des classes suicantes : tuteur, enfant, maitresse, directeur groupe, Niveau d'études, Ecolde.

Gestion des vols :
Réaliser le modélisation UML du system de vols avec les classe suivantes : vol, passager, compagnie, Aeroport, ville, pays, pilote, Avion

Gestion des locations de véhicules :
Realiser une modelisation UML du systeme d'information de locations de véhicules dans un comité d'entreprise avec les classes suivantes :   
cadre, service, vehicule, controle technique, location, Parc de véhicules, planning, comité d'entreprise
