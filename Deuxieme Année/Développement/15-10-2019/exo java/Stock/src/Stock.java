
public class Stock {
	
	public static void main(String args[]) {
		
		//Instantiation de la classe Produit
		Produit unProduit = new Produit();
		
		// appel de la m�thode saisir
		unProduit.saisir();
		
		// appel de la m�thode afficher
		unProduit.afficher();
		
		// appel de la m�thode calculer
		System.out.println("Le Chiffre d'affaire est de : " + unProduit.calculer());
	}
}
