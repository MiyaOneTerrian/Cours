import java.util.ArrayList;
import java.util.Scanner;

public class Molecule {
	
	private String nom;
	private ArrayList<Atome> lesAtomes;
	
	public Molecule() {
		this.nom = "";
		this.lesAtomes = new ArrayList<Atome>();
	}
	
	public void sairi() {
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Donner le nom de la molécule : ");
		this.nom = sc.next();
	}
	
	public void afficher() {
		System.out.println("Nom de la molécule : " + this.nom);
	}
	
	public void ajouterAtome() {
		Atome unAtome = new Atome(); // instanciation de la classe Atome
		unAtome.saisir();  // renseigner les infos
		this.lesAtomes.add(unAtome); // ajout dans l'ArrayList
	}
	
	public int masseMoleculaire() {
		int somme = 0;
		for (Atome unAtome : this.lesAtomes) {
			somme = somme + unAtome.getMasse();
		}
		return somme;
	}
	
	public int masseAtomeLourd() {
		int max = 0;
		
		for(Atome unAtome : this.lesAtomes) {
			if(unAtome.getMasse() > max) {
				max = unAtome.getMasse();
			}	
		}
		return max;
	}
	
	public String construireFormule() {
		String formule = "";
		
		for(Atome unAtome : this.lesAtomes) {
			formule = formule + unAtome.getSymbole();		
		}
		return formule;
	}
	
	public void supprimerAtom(String unSymbole) {
		for (Atome unAtome : this.lesAtomes) {
			if(unSymbole.equals(unAtome.getSymbole())) {
				this.lesAtomes.remove(unAtome);
				System.out.println("Atom Supprimé");
				break;
			}
		}
	}
}
