import java.util.Scanner;

public class Maitresse 
{
	private String nom, prenom, diplome ; 
	
	public Maitresse() {
		this.nom =""; 
		this.prenom =""; 
		this.diplome ="";
	}
	public void saisir () {

		Scanner sc= new Scanner (System.in);
		System.out.println("Le nom de la maitresse : ");
		this.nom = sc.next();
		System.out.println("Le prenom de la maitresse : ");
		this.prenom = sc.next();
		System.out.println("Le Diplome de la maitresse : ");
		this.diplome = sc.next();
	}
	public void afficher() {
		System.out.println("Nom de la maitresse    : " + this.nom);
		System.out.println("Prenom de la maitresse : " + this.prenom);
		System.out.println("Diplome de la maitresse: " + this.diplome);
	}
	
	public String toString () {
		return this.nom + " ; " + this.prenom +" ; "+ this.diplome;
	}
	public String toXml() {
		String chaine =""; 
		chaine += "<Maitresse> \n ";
		chaine += "<nom>" + this.nom + "</nom>\n";
		chaine += "<prenom>" + this.prenom + "</prenom>\n";
		chaine += "<diplome>" + this.diplome + "</diplome>\n";
		chaine += "</Maitresse> \n ";
		return chaine;
	}
	//getters and setters 
	
	public String getNom() {
		return nom;
	}
	public void setNom(String nom) {
		this.nom = nom;
	}
	public String getPrenom() {
		return prenom;
	}
	public void setPrenom(String prenom) {
		this.prenom = prenom;
	}
	public String getDiplome() {
		return diplome;
	}
	public void setDiplome(String diplome) {
		this.diplome = diplome;
	}
	
	
	
	
	
	
}
