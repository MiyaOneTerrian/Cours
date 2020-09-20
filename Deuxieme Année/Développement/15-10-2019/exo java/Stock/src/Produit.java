import java.util.Scanner;

public class Produit {

	// Attributes
	private String ref, des;
	private int qte;
	private float prix;
	
	// Constructor
	public Produit() {
		this.setRef("");
		this.setDes("");
		this.setQte(0);
		this.setPrix(0);
	}
	
	//Methods
	// méthode saisir
	public void saisir() {
		Scanner sc = new Scanner(System.in); // scanf du C : librairie Scanner
		// récupere la ref
		System.out.println("Donner la référence : ");
		this.ref = sc.next(); // next pour saisir une chaine de caractères
		
		// recupere la designation
		System.out.println("Donner le désignation : ");
		this.des = sc.next();
		
		// on récupère le prix
		System.out.println("Donner le prix : ");
		this.prix = sc.nextFloat(); // nextFloat pour saisir un float
		
		// on récupère le qte
		System.out.println("Donner la quantitée : ");
		this.qte = sc.nextInt(); // nextInt pour saisir un int
		
		// On ferme le scanner pour éviter le leak de ressource
		sc.close();
	}
	
	// méthode afficher
	public void afficher() {
		System.out.println("La référence est : " + this.ref);
		System.out.println("La désignation est : " + this.des);
		System.out.println("Le prix est : " + this.prix);
		System.out.println("La quantité est : " + this.qte);
	}
	
	// méthode calculer
	public float calculer() {
		return this.prix * this.qte;
	}
	
	//getters and setters
	// ref
	public String getRef() {
		return ref;
	}

	public void setRef(String ref) {
		this.ref = ref;
	}

	//des
	public String getDes() {
		return des;
	}

	public void setDes(String des) {
		this.des = des;
	}
	
	// qte
	public int getQte() {
		return qte;
	}

	public void setQte(int qte) {
		this.qte = qte;
	}
	
	// solde
	public float getPrix() {
		return prix;
	}

	public void setPrix(float prix) {
		this.prix = prix;
	}
}
