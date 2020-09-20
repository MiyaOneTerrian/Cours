import java.util.ArrayList;
import java.util.Scanner;

public class Groupe {
	
	private String nom, salle ; 
	
	// un groupe est composée d'une seule instance de la classe Maitresse 1-1 
	private Maitresse uneMaitresse  ; 
	
	//un groupe est composé d'une seule instance de la classe NiveauEtude 1-1
	private NiveauEtude unNiveauEtude ; 
	
	//un groupe est composé de plusieurs instances de la classe Enfant 1-N 
	private ArrayList<Enfant> lesEnfants ;
	
	public Groupe ()
	{
		this.nom =""; 
		this.salle =""; 
		//instanciation de la classe Maitresse 
		this.uneMaitresse = new Maitresse() ;
		
		//instanciation de la classe NiveauEtude 
		this.unNiveauEtude = new NiveauEtude(); 
		
		//instanciation de l'ArrayList
		this.lesEnfants = new ArrayList<Enfant>();
		
	}
	
	public void saisir ()
	{
		Scanner sc = new Scanner (System.in);
		System.out.println("Donner le nom du groupe : ");
		this.nom = sc.next(); 
		
		System.out.println("Donner la salle du groupe : ");
		this.salle = sc.next(); 
		
		System.out.println("Donner les infos de la maitresse : ");
		this.uneMaitresse.saisir();
		
		System.out.println("Donner les infos du niveau d'études :");
		this.unNiveauEtude.saisir();
	}
	
	public void afficher ()
	{
		System.out.println("Le nom du groupe : " + this.nom);
		System.out.println("La salle du groupe : " + this.salle);
		System.out.println("Les infos de la maitresse  : ");
		this.uneMaitresse.afficher();
		System.out.println("Les infos du niveau etudes :");
		this.unNiveauEtude.afficher();
		
	}
	
	public void ajouterEnfant ()
	{
		//instancier la classe Enfant 
		Enfant unEnfant = new Enfant(); 
		
		//renseigner les infos de l'enfant 
		unEnfant.saisir();
		
		//ajouter l'instance enfant dans le groupe 
		this.lesEnfants.add(unEnfant);
	}
	public void listerEnfants ()
	{
		System.out.println("Voici la liste des enfants ");
		for (Enfant unEnfant : this.lesEnfants) // foreach($this->lesEnfants as $unEnfant)
		{
			unEnfant.afficher();
		}
		
		//autre facon de parcourir l'ArrayList : parcours par indice 
		
		for (int i = 0 ; i < this.lesEnfants.size() ; i++)
		{
			this.lesEnfants.get(i).afficher();
		}
	}
	
	public void supprimerEnfant ()
	{
		//on demande le nom de l'enfant a supprimer 
		String nomRech ; 
		Scanner sc = new Scanner (System.in);
		System.out.println("Donner le nom de l'enfant a supprimer :");
		nomRech = sc.next();
		//on parcours l'arrayList 
		for (Enfant unEnfant : this.lesEnfants)
		{
			//on compare les noms et s'il ya égalité on supprime l'element recherche. 
			if( nomRech.equals(unEnfant.getNom()))
			{
				this.lesEnfants.remove(unEnfant);
				System.out.println("Lenfant a ete supprime avec succes ! ");
				break; //sortir de la boucle 
			}
		}
	}
	
	public void gerer ()
	{
		Scanner sc = new Scanner (System.in);
		int choix =0 ; 
		do {
			System.out.println(" ____________ Gestion des enfants ________________");
			System.out.println(" 1- La saisie des infos du groupe "); 
			System.out.println(" 2- Affichage des infos du groupe"); 
			System.out.println(" 3- Ajout d'un enfant "); 
			System.out.println(" 4- Lister les enfants ");
			System.out.println(" 5- Supprimer un enfant ");
			System.out.println(" 6- To XML");
			System.out.println(" 0- Quitter "); 
			System.out.println(" Votre choix ->"); 
			
			choix = sc.nextInt() ;
			
			switch (choix)
			{
			case 1 : this.saisir();break ;
			case 2 : this.afficher();break;
			case 3 : this.ajouterEnfant();break; 
			case 4 : this.listerEnfants();break;
			case 5 : this.supprimerEnfant();break;
			case 6 : System.out.println("XML : "+this.toXml()); break;
			}
		}while (choix != 0);
		
	}
	public String toXml()
	{
		String chaine =""; 
		chaine = "<Groupe>\n";
		chaine += "<nom>"+this.nom +"</nom>\n";
		chaine += "<salle>"+this.salle +"</salle>\n";
		chaine += this.uneMaitresse.toXml() ; 
		chaine += this.unNiveauEtude.toXml(); 
		
		chaine +="<enfants>\n";
		for (Enfant unEnfant : this.lesEnfants)
		{
			chaine += unEnfant.toXml();
		}
		chaine +="</enfants>\n";
		
		chaine += "</Groupe>\n";
		return chaine;
	}
	
	public float ageMoyen() {
        float moyen = 0;
        
        for (Enfant unEnfant : this.lesEnfants) {
            moyen = unEnfant.getAge() + moyen;
        }
        
        moyen = moyen / this.lesEnfants.size();
        return moyen; 
    }
	
	public int maxAge() {
		// on declare un age max et on initialise à 0
		
		int ageMax = 0;		
		
		// on parcours le tableau lesEnfants et on realise des comparaisons
		
		for(Enfant unEnfant : this.lesEnfants) {
			
		// a chaque fois qu'on trouve un age plus eleve, on actualise l'age max
			
			if (unEnfant.getAge() > ageMax) {
				ageMax = unEnfant.getAge();
			}
		
		}
		
		// on retourne l'age max
		
		return ageMax;
	}

}







