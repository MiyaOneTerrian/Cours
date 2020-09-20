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
	// m�thode saisir
	public void saisir() {
		Scanner sc = new Scanner(System.in); // scanf du C : librairie Scanner
		// r�cupere la ref
		System.out.println("Donner la r�f�rence : ");
		this.ref = sc.next(); // next pour saisir une chaine de caract�res
		
		// recupere la designation
		System.out.println("Donner le d�signation : ");
		this.des = sc.next();
		
		// on r�cup�re le prix
		System.out.println("Donner le prix : ");
		this.prix = sc.nextFloat(); // nextFloat pour saisir un float
		
		// on r�cup�re le qte
		System.out.println("Donner la quantit�e : ");
		this.qte = sc.nextInt(); // nextInt pour saisir un int
		
		// On ferme le scanner pour �viter le leak de ressource
		sc.close();
	}
	
	// m�thode afficher
	public void afficher() {
		System.out.println("La r�f�rence est : " + this.ref);
		System.out.println("La d�signation est : " + this.des);
		System.out.println("Le prix est : " + this.prix);
		System.out.println("La quantit� est : " + this.qte);
	}
	
	// m�thode calculer
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
