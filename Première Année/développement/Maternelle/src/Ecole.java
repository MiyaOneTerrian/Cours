
public class Ecole {
	private String nom, addresse;
	
	// un ecole est composée d'une seule instance de la classe Directeur
	private Directeur unDirecteur;
	
	// une ecole est composée de plusieurs instances de la classe groupe
	private ArrayList<Groupe> lesGroupes;
	
	// une ecole est composee de plusieurs tuteurs
	private ArrayList<Tuteur> lesTuteurs;
	
	public Ecole() {
		
	}
	
	public void saisir() {
		
	}
	
	public void afficher() {
		
	}
	
	// les methodes de gestion des groupes
	
	public void ajouterGroupe() {
		
	}
	
	public void listerGroupe() {
		
	}
	
	public void supprimerGroupe() {
		
	}
	
	public void gererUnGroupe() {
		// recherche un groupe et appelle la methode gerer de groupe
	}
	
	// les methodes de gestion des tuteurs
	
	public void ajouterTuteur() {
		
	}
	
	public void listerTuteur() {
		
	}
	
	public void supprimerTuteur() {
		
	}
	
	public void gererUnTuteur() {
		// rechercher un tuteur et appelle la methode gerer de tuteur
	}
	
	// Menu General
	
	public void menuGeneral () {
		
	}
	
	public static void main (String args[])
	{
		//instanciation de la classe Groupe 
		Groupe unGroupe = new Groupe(); 
		Tuteur unTuteur = new Tuteur();
		Ecole cfa= new Ecole (); 
		
		//appel de la méthode gerer 
		unGroupe.gerer();
		unTuteur.gerer();
		cfa.menuGeneral ();
	}
}
